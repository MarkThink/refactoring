<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Yaml\Parser;


class SecurityController extends Controller
{
    private $_encryption_key='';
    private $_hash_type	= 'sha1';
    private $_mcrypt_exists = false;
    private $_mcrypt_cipher = MCRYPT_RIJNDAEL_256;
    private $_mcrypt_mode = MCRYPT_MODE_CBC;

    public $constant = array();
    public $opcode = array();
    public $status = array();

    public $ret;//默认返回JSON结构体

    public $logger;

    //初始化构造器
    public function __construct()
    {
        $this->_mcrypt_exists = (!function_exists('mcrypt_encrypt')) ? false : true;

        $yaml = new Parser();
        $constants = $yaml->parse(file_get_contents(__DIR__.'/../Resources/config/constants.yml'));
        $this->opcode = $constants['Opcode'];
        $this->status = $constants['Status'];
        $this->constant = $constants['Constant'];

        //构造返回数据结构
        $this->ret = array(
            $this->opcode['RETURN_CODE']=>$this->status['AJAX_200'],
            $this->opcode['RETURN_MSG']=>$this->constant['SUCCESS'],
        );
    }

    //登陆处理
    public function loginAction(Request $request)
    {
        //获取日志处理器
        $this->logger = $this->get("monolog.logger.trjcn_admin");

        if(!$this->_mcrypt_exists){
            $this->logger->error('functions:mcrypt_encrypt method not exists');
        }

        if($request->isXmlHttpRequest()){
            $username = $request->request->get('username');
            $password = $request->request->get('password');
            $is_auto_login = $request->request->get('is_auto_login')?true:false;//是否记住密码
            $client_letters_code = $request->request->get('letters_code');


            $session = $request->getSession();
            if(!$session->isStarted()){
                $session->start();
            }
            //验证码校验
            $session_letters_code = $session->get('letters_code');
            if($session_letters_code!== strtolower($client_letters_code)){
                $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
                $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['SECURITY_CODE'];

                return $this->retJsonData($this->ret);
            }

            $em = $this->getDoctrine()->getManager();
            $userinfo = $em->getRepository('Model:TrjAdmins')->findOneByUsername(array('username'=>$username));
            if(!$userinfo){
                $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
                $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['USER_NOT_EXIST'];

                return $this->retJsonData($this->ret);
            }

            if($userinfo->getStatus() !=1){
                $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
                $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['USER_STATUS_STOP'];

                return $this->retJsonData($this->ret);
            }

            if($userinfo->getPassword()!=md5($password)){
                $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
                $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['USER_PASSWD_ERROR'];

                return $this->retJsonData($this->ret);
            }

            $roleinfo = $em->getRepository('Model:TrjRoles')->findOneByRoleid(array('roleid'=>$userinfo->getRoleid()));

            if($roleinfo->getIsuse()!=1){
                $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
                $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['USER_ROLE_STOP'];

                return $this->retJsonData($this->ret);
            }
            //会话设置
            $session->set('userinfo',$userinfo);

            //自动登陆，保留一周
            $expire = 0;
            if ($is_auto_login == true){
                $expire = 3600*24*7;
            }

            $cookie_userid = $this->get_userid_encode($userinfo->getId());

            $cookie_domian = $request->getHttpHost();//注意，必须和session一致
//            默认写入PHPSESSID
//            $session_cookie = new Cookie('session_id', $session->getId(), $expire, '/', $cookie_domian, false, false);
            $userid_cookie = new Cookie('cookie_uid', $cookie_userid, $expire, '/', $cookie_domian, false, false);

            //设置成功返回URL
            $this->ret[$this->opcode['RETURN_DATA']]['ok_url'] = $this->generateUrl('admin_homepage');
            $response  = new JsonResponse($this->ret);
//            $response->headers->setCookie($session_cookie);
            $response->headers->setCookie($userid_cookie);

            return $response;
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

        return $this->redirect($this->generateUrl('admin_login'));
    }

    /*
     * JSON+日志返回信息
     */
    public function retJsonData($data)
    {
        $this->logger->error($_SERVER['REQUEST_URI']." POST => ".serialize($_POST)." RET => ".serialize($data));
        return new JsonResponse($data);
    }

    /*
     * 生成验证码
     */
    public function captchaAction(Request $request)
    {
        $image_width = 95;
        $image_height = 33;
        $characters_on_image = 4;

        $font =$this->container->getParameter("fonts");
        //输出文件：
        $output =$this->container->getParameter("admin_codeimg");

        //The characters that can be used in the CAPTCHA code.
        //avoid confusing characters (l 1 and i for example)
        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $random_dots = 15;
        $random_lines = 15;
        $captcha_text_color = "0x142864";
        $captcha_noice_color = "0x142864";
        //定义要生成验证码的字符串
        $code = '';

        $i = 0;
        while ($i < $characters_on_image) {
            $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
            $i++;
        }

        $font_size = $image_height * 0.75;
        $image = @imagecreate($image_width, $image_height);

        /* setting the background, text and noise colours here */
        $background_color = imagecolorallocate($image, 255, 255, 255);

        $arr_text_color = $this->hexrgb($captcha_text_color);
        $text_color = imagecolorallocate($image, $arr_text_color['red'],
            $arr_text_color['green'], $arr_text_color['blue']);

        $arr_noice_color = $this->hexrgb($captcha_noice_color);
        $image_noise_color = imagecolorallocate($image, $arr_noice_color['red'],
            $arr_noice_color['green'], $arr_noice_color['blue']);


        /* generating the dots randomly in background */
        for ($i = 0; $i < $random_dots; $i++) {
            imagefilledellipse($image, mt_rand(0, $image_width),
                mt_rand(0, $image_height), 2, 3, $image_noise_color);
        }
        /* generating lines randomly in background of image */
        for ($i = 0; $i < $random_lines; $i++) {
            imageline($image, mt_rand(0, $image_width), mt_rand(0, $image_height),
                mt_rand(0, $image_width), mt_rand(0, $image_height), $image_noise_color);
        }
        /* create a text box and add 6 letters code in it */
        $textbox = imagettfbbox($font_size, 0, $font, $code);
        $x = ($image_width - $textbox[4]) / 2;
        $y = ($image_height - $textbox[5]) / 2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $code);


        /* Show captcha image in the page html page */
        //header('Content-Type: image/jpeg'); // defining the image type to be shown in browser widow
        imagejpeg($image,$output); //showing the image
        imagedestroy($image); //destroying the image instance

        //设置session，做验证
        //$session = new Session();
        $session = $request->getSession();
        if(!$session->isStarted()){
            $session->start();
        }
        $session->set('letters_code',$code);
//        $response= new Response();
//        $response->headers->set('Content-Type', 'image/jpeg');
//        $response->getContent();
        return new Response('refreshcode.jpeg');
    }

    public function hexrgb($hexstr)
    {
        $int = hexdec($hexstr);

        return array("red" => 0xFF & ($int >> 0x10),
            "green" => 0xFF & ($int >> 0x8),
            "blue" => 0xFF & $int);
    }

    //获取登陆用户的ID加密串
    public function get_userid_encode($userid)
    {
        $this->get_encryption_key();

        $encode_userid = $this->encode($userid);
        $cookie_userid = md5($this->_encryption_key.$encode_userid).$encode_userid;
        return $cookie_userid;
    }

    //解密登陆用户ID
    public function get_userid_decode($userid_encode)
    {
        $user_id = '';

        $this->get_encryption_key();

        $strmd5 = substr($userid_encode, 0, 32);
        $str = substr($userid_encode,32);

        if (md5($this->_encryption_key.$str) == $strmd5){
            $user_id = (int)$this->decode($str);
        }
        return $user_id;
    }

    //返回加密串-用于Cookie存储处理
    public function encode($string)
    {
        $key = md5($this->_encryption_key);
        $enc = $this->_mcrypt_encode($string, $key);
        return base64_encode($enc);
    }

    public function _mcrypt_encode($data, $key)
    {
        $init_size = mcrypt_get_iv_size($this->_mcrypt_cipher, $this->_mcrypt_mode);
        $init_vect = mcrypt_create_iv($init_size, MCRYPT_RAND);
        return $this->_add_cipher_noise($init_vect.mcrypt_encrypt($this->_mcrypt_cipher, $key, $data, $this->_mcrypt_mode, $init_vect), $key);
    }

    function _add_cipher_noise($data, $key)
    {
        $keyhash = $this->hash($key);
        $keylen = strlen($keyhash);
        $str = '';

        for ($i = 0, $j = 0, $len = strlen($data); $i < $len; ++$i, ++$j)
        {
            if ($j >= $keylen)
            {
                $j = 0;
            }

            $str .= chr((ord($data[$i]) + ord($keyhash[$j])) % 256);
        }

        return $str;
    }

    //返回解密串-用于Cookie存储处理
    function decode($string)
    {
        $key = md5($this->_encryption_key);

        if (preg_match('/[^a-zA-Z0-9\/\+=]/', $string))
        {
            return false;
        }
        $dec = base64_decode($string);

        if (($dec = $this->_mcrypt_decode($dec, $key)) === false)
        {
            return false;
        }

        return $dec;
    }

    public function _mcrypt_decode($data,$key)
    {
        $data = $this->_remove_cipher_noise($data, $key);
        $init_size = mcrypt_get_iv_size($this->_mcrypt_cipher, $this->_mcrypt_mode);

        if ($init_size > strlen($data))
        {
            return false;
        }

        $init_vect = substr($data, 0, $init_size);
        $data = substr($data, $init_size);
        return rtrim(mcrypt_decrypt($this->_mcrypt_cipher, $key, $data, $this->_mcrypt_mode, $init_vect), "\0");
    }

    function _remove_cipher_noise($data, $key)
    {
        $keyhash = $this->hash($key);
        $keylen = strlen($keyhash);
        $str = '';

        for ($i = 0, $j = 0, $len = strlen($data); $i < $len; ++$i, ++$j)
        {
            if ($j >= $keylen)
            {
                $j = 0;
            }

            $temp = ord($data[$i]) - ord($keyhash[$j]);

            if ($temp < 0)
            {
                $temp = $temp + 256;
            }

            $str .= chr($temp);
        }

        return $str;
    }

    /*
     * 获取加密key
     */
    public function get_encryption_key()
    {
        $this->_encryption_key = $this->container->getParameter('encryption_key');
    }

    function hash($str)
    {
        return ($this->_hash_type == 'sha1') ? sha1($str) : md5($str);
    }


}