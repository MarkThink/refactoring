<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Yaml\Parser;
use SharedLogic\Utils\SafeCookie;
use SharedLogic\Utils\ValidateCode;
use SharedLogic\Utils\NoCaptcha;

class SecurityController extends Controller
{
    public $logger;


    //登陆处理
    public function loginAction(Request $request)
    {


        if($request->isXmlHttpRequest()){

//            获取返回参数
            $ret = $request->get('Ret');
            $opcode = $request->get('Opcode');
            $status = $request->get('Status');
            $constant = $request->get('Constant');

            $username = $request->request->get('username');
            $password = $request->request->get('password');
            $is_auto_login = $request->request->get('is_auto_login')?true:false;//是否记住密码
            //验证码校验
            $csig = $request->request->get('nc_sig');
            $nc_sessionid = $request->request->get('nc_sessionid');
//            $nc_ua = $request->request->get('nc_ua');//默认用户账户

            $session = $request->getSession();
            if(!$session->isStarted()){
                $session->start();
            }
            //验证码校验
            $sig = $session->get('sig');
            $sessionid = $session->getId();

            if($csig!=$sig || $nc_sessionid!=$sessionid){
                $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                $ret[$opcode['RETURN_MSG']]=$constant['SECURITY_CODE'];

                return $this->retJsonData($request,$ret);
            }

            $em = $this->getDoctrine()->getManager();
            $userinfo = $em->getRepository('Model:TrjAdmins')->findOneByUsername(array('username'=>$username));
            if(!$userinfo){
                $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                $ret[$opcode['RETURN_MSG']]=$constant['USER_NOT_EXIST'];

                return $this->retJsonData($request,$ret);
            }

            if($userinfo->getStatus() !=1){
                $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                $ret[$opcode['RETURN_MSG']]=$constant['USER_STATUS_STOP'];

                return $this->retJsonData($request,$ret);
            }

            if($userinfo->getPassword()!=md5($password)){
                $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                $ret[$opcode['RETURN_MSG']]=$constant['USER_PASSWD_ERROR'];

                return $this->retJsonData($request,$ret);
            }

            $roleinfo = $em->getRepository('Model:TrjRoles')->findOneByRoleid(array('roleid'=>$userinfo->getRoleid()));

            if($roleinfo->getIsuse()!=1){
                $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                $ret[$opcode['RETURN_MSG']]=$constant['USER_ROLE_STOP'];

                return $this->retJsonData($request,$ret);
            }
            //会话设置
            $session->set('userinfo',$userinfo);

            //自动登陆，保留一周
            $expire = 0;
            if ($is_auto_login == true){
                $expire = 3600*24*7;
            }
            $safeCookie = new SafeCookie($request->get('encryption_key'));
            $cookie_userid = $safeCookie->get_userid_encode($userinfo->getId());

//            $cookie_userid = Security::get_userid_encode($userinfo->getId(),$encryption_key);

            $cookie_domian = $request->getHttpHost();//注意，必须和session一致
//            默认写入PHPSESSID
//            $session_cookie = new Cookie('session_id', $session->getId(), $expire, '/', $cookie_domian, false, false);
            $userid_cookie = new Cookie('cookie_uid', $cookie_userid, $expire, '/', $cookie_domian, false, false);

            //设置成功返回URL
            $ret[$opcode['RETURN_DATA']]['ok_url'] = $this->generateUrl('admin_homepage');
            $response  = new JsonResponse($ret);
//            $response->headers->setCookie($session_cookie);
            $response->headers->setCookie($userid_cookie);

            return $response;
        }

        //如果用户已登陆，不显示登陆窗口
        $is_login = $request->get('login_uid');
        if($is_login){
            return $this->redirect($this->generateUrl('admin_homepage'));
        }
        return $this->render('AdminBundle:login:index.html.twig');
    }

    //退出登陆
    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->isStarted()){
            $session->start();
        }
        $session->invalidate();
        //移除客户端Cookies存储Request参数
        $request->attributes->remove('login_uid');

        return $this->redirect($this->generateUrl('admin_login'));
    }

    /*
     * JSON+日志返回信息
     */
    public function retJsonData($request,$data)
    {
        $logger = $request->get('logger');
        $logger->error($_SERVER['REQUEST_URI']." POST => ".serialize($_POST)." RET => ".serialize($data));
        return new JsonResponse($data);
    }
    /*
     * 生成验证码
     */
    public function captchaAction(Request $request)
    {
        $font =$this->container->getParameter("fonts");
        //输出文件：
        $output =$this->container->getParameter("admin_codeimg");

        $validate = new ValidateCode($font,$output);
        $validate->doimg();

        //设置session，做验证
        $session = $request->getSession();
        if(!$session->isStarted()){
            $session->start();
        }
        $session->set('letters_code',$validate->getCode());
        return new Response('refreshcode.png');
    }

    /*
     * NoCaptcha验证
     */
    public function nocaptchaAction(Request $request)
    {
        $font =$this->container->getParameter("idiom_fonts");
        $image =$this->container->getParameter("admin_nocaptcha");

        $redis = $this->container->get('snc_redis.default');
        $em = $this->getDoctrine()->getManager();

        //绘图 获取标识文字 存储至Session
        $noCaptcha = new NoCaptcha($em,$redis,$font,$image);
        $noCaptcha->doimg();

        $session = $request->getSession();
        if(!$session->isStarted()){
            $session->start();
        }
        $session->set('tag',$noCaptcha->getCode());
        $session->set('marignBox',$noCaptcha->getMarginBox());

        $output = array(
            'questiontext'=>'请点击图中的'.$noCaptcha->getCode().'字',
            'imgurl'=>'nocaptcha.png',
            'tag'=>$noCaptcha->getCode()

        );

        return  new JsonResponse($output);
    }

    /*
     * 服务检测-选择用哪种方式验证
     */
    public function analyzeAction(Request $request)
    {
        //获取返回参数
        $ret = $request->get('Ret');
        $opcode = $request->get('Opcode');
        $status = $request->get('Status');
        $constant = $request->get('Constant');

        $session = $request->getSession();
        if(!$session->isStarted()){
            $session->start();
        }
        //获取用户点击次数-超过10次切换到验证码输入模式
        $sessionid = $session->getId();

        $nc_click =0;
        if($session->has($sessionid)){
            $nc_click = $session->get($sessionid);
        }else{
            $session->set($sessionid,$nc_click);
        }

        $ret[$opcode['RETURN_DATA']]=array(
            'code'=>($nc_click<10?100:200),
            'value'=>'default',
            'csessionid'=>$sessionid,
        );

        return new JsonResponse($ret);
    }

    /*
     * 验证成语点击或验证码正确与否
     */
    public function check_codeAction(Request $request)
    {
        //获取返回参数
        $ret = $request->get('Ret');
        $opcode = $request->get('Opcode');
        $status = $request->get('Status');
        $constant = $request->get('Constant');

        //获取客户端提交数据
        $ctype = $request->request->get('ctype');
        $checkcode = $request->request->get('checkcode');
        $appkey = $request->request->get('appkey');
        $token = $request->request->get('token');
        $csessionid = $request->request->get('csessionid');

        //校验APPKEY+TOKEN
        $nc_appkey = $request->get('nc_appkey');
        $nc_token = $request->get('nc_token');

        $session = $request->getSession();
        if(!$session->isStarted()){
            $session->start();
        }

        if($appkey==$nc_appkey && $token==$nc_token){
            switch($ctype){
                case 'noCaptcha':
                    $idiom = json_decode($checkcode,true);
                    //$tag = $session->get('tag');
                    //坐标顺序：左下角[0,1] 右下角[2,3] 右上角[4,5] 左上角[6,7]
                    $marignBox = $session->get('marignBox');
                    $x = $idiom['x'];$y=$idiom['y'];
                    //校验点击区域
                    $captcha = ($x>$marignBox[6] && $x<$marignBox[2]) && ($y>$marignBox[7] && $y<$marignBox[3]);
                    if($captcha==false){
                        $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                        $ret[$opcode['RETURN_MSG']]=$constant['NO_CAPTCHA_ERR'];
                    }
                    break;
                case 'Captcha':
                    $checkcode = json_decode($checkcode,true);
                    $letters_code = $session->get('letters_code');
                    $captcha = ($letters_code == strtolower($checkcode['code']));

                    if($captcha==false){
                        $ret[$opcode['RETURN_CODE']]=$status['AJAX_201'];
                        $ret[$opcode['RETURN_MSG']]=$constant['CAPTCHA_ERR'];
                    }

                    break;
                default:
                    $ret[$opcode['RETURN_CODE']]=$status['AJAX_202'];
                    $ret[$opcode['RETURN_MSG']]=$constant['CAPTCHA_TYPE_ERR'];
            }
        }else{
            //参数不合法
            $ret[$opcode['RETURN_CODE']]=$status['AJAX_203'];
            $ret[$opcode['RETURN_MSG']]=$constant['CAPTCHA_TOKEN_ERR'];
        }

        if($ret[$opcode['RETURN_CODE']]==$status['AJAX_200']){
            $sig = sha1($csessionid);
            $ret[$opcode['RETURN_DATA']]=array(
                'sig'=>$sig,
            );
            //移除计数
            if($session->has($csessionid)){
                $session->remove($csessionid);
            }
            $session->set('sig',$sig);
            return new JsonResponse($ret);

        }else{
            //更新Session
            if($session->getId()==$csessionid){
                if($session->has($csessionid)){
                    $nc_click = $session->get($csessionid);
                    $session->set($csessionid,$nc_click+1);
                }
            }
            return $this->retJsonData($request,$ret);
        }
    }
}