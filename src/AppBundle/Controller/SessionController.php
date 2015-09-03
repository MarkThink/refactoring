<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;



class SessionController extends Controller
{
    public function indexActon()
    {
//        $storage = new NativeSessionStorage(array(),new NativeFileSessionHandler());
//        $session = new Session($storage);

        $session = new Session();
        if (!$session->isStarted()){
            $session->start();
            $session->setName('SS');
        }

        //set and get session attributes
        $session->get('name','Drak');
        $session->get('name');
        //set flash messages
        $session->getFlashBag()->add('notice','Profile updated');

        //retrieve message
        foreach($session->getFlashBag()->get('notice',array()) as $message){
            echo '<div class="flash-notice">'.$message.'</div>';
        }

        $response  = new Response();

        $request = new Request();
        $request->request->get('ss');

        $cookie_domian = $request->getHttpHost();//注意，必须和session一致
        $new_cookie = new Cookie('__trjcn', $session->getId(), 0, '/', $cookie_domian, false, false);
        $response->headers->setCookie($new_cookie);

        $request->cookies->all();
        $response->headers->clearCookie('__trjcn', '/', $cookie_domian);
    }

//http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/caching.html
    public function redis()
    {
        $redis = new \Redis();
        $redis->connect('localhost', 6379);

        $cacheDriver = new \Doctrine\Common\Cache\RedisCache();
        $cacheDriver->setRedis($redis);
        $cacheDriver->save('cache_id', 'my_data');
    }
}