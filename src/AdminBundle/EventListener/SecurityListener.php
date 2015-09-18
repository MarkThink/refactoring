<?php

namespace AdminBundle\EventListener;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use SharedLogic\Utils\SafeCookie;
use Symfony\Component\Yaml\Parser;

/**
 * SecurityListener handles security restrictions on controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityListener implements EventSubscriberInterface
{
    protected $container;

    public function __construct($router,$container,$paramValue)
    {
        $this->container = $container;
    }

    public function onKernelController(FilterControllerEvent $event)
    {

        $request = $event->getRequest();

        //获取日志处理器
        $logger = $this->container->get("monolog.logger.trjcn_admin");
        $request->attributes->set('logger',$logger);

        //构造默认参数开始
        $yaml = new Parser();
        $constants = $yaml->parse(file_get_contents(__DIR__.'/../Resources/config/constants.yml'));

        $request->attributes->set('Opcode',$constants['Opcode']);
        $request->attributes->set('Status',$constants['Status']);
        $request->attributes->set('Constant',$constants['Constant']);

        //构造返回数据结构
        $ret = array(
            $constants['Opcode']['RETURN_CODE']=>$constants['Status']['AJAX_200'],
            $constants['Opcode']['RETURN_MSG']=>$constants['Constant']['SUCCESS'],
        );
        $request->attributes->set('Ret',$ret);
        //构造默认参数结束

        //注入验证码服务KEY+TOKEN
        $nc_appkey = $this->container->getParameter('nc_appkey');
        $nc_token = $this->container->getParameter('nc_token');

        $request->attributes->set('nc_appkey',$nc_appkey);
        $request->attributes->set('nc_token',$nc_token);

        $encryption_key = $this->container->getParameter('encryption_key');
        $request->attributes->set('encryption_key',$encryption_key);

        //后台权限处理注入
        if($request->getHttpHost()=='admin.trjcn.cn'){

            $session = $request->getSession();
            if(!$session->isStarted()){
                $session->start();
            }
            //如果已经退出，则不解析客户端Cookie数据
            if($session->has('userinfo')){
                $cookie_userid = $request->cookies->get('cookie_uid');
                if ($cookie_userid){
                    $safe_cookie = new SafeCookie($encryption_key);
                    $login_uid = $safe_cookie->get_userid_decode($cookie_userid);
                    if($session->get('userinfo')->getId()==$login_uid){
                        $request->attributes->set('login_uid',$login_uid);

                        //获取菜单权限


                    }else{
                        if($request->attributes->has('login_uid')){
                            $request->attributes->remove('login_uid');
                        }
                    }
                }
            }



//                $data['info'] = '您没有权限操作！';
//                $data['status'] = false;
//
//                $ajax = $request->isXmlHttpRequest();
//                if(!$ajax){
//                    $event->setController(
//                        function () use ($data) {
//                            return new Response('<b>您没有足够的访问权限!</b><script>setTimeout("window.history.back(-1)",2000)</script>');
//                        });
//                }
        }
    }

    public static function getSubscribedEvents()
    {
        return array(KernelEvents::CONTROLLER => 'onKernelController');
    }
}
