<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Entity\Tuser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Security\Authorization\Voter\PostVoter;

class PostController extends Controller
{
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tuser = $em->getRepository('AppBundle:Tuser')->find(8);

        $authChecker = $this->get('security.authorization_checker');

        if(false === $authChecker->isGranted('edit',$tuser)){
            throw $this->createAccessDeniedException('Unauthorized access!');
        }
        return new Response('<h1>'.$tuser->getUsername().'</h1>');
    }

    public function addUserAction()
    {
        $user = new Tuser();
        //引入密码加密服务
        $plain_password = '123456';
        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user,$plain_password);

        $user->setUsername('zjadmin');
        $user->setPassword($encoded);
        $user->setEmail('dxwsk@163.com');
        $user->setIsActive(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new Response('success');
    }

    public function queryUserAction()
    {
        $em = $this->getDoctrine()->getManager();
        $test = $em->getRepository('AppBundle:Tuser')->loadUserByUsername('admin');

        $fox = $em->getRepository('AppBundle:Tuser')->refreshUser($test);

        return new Response($test->getUsername());
    }
}
