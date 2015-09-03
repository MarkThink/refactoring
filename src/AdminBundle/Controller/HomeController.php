<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends SecurityController
{

    public function indexAction(Request $request)
    {
        $login_uid = 0;
        $cookie_userid = $request->cookies->get('cookie_uid');
        if ($cookie_userid){
            $login_uid = $this->get_userid_decode($cookie_userid);
        }
        if($login_uid == 0){
            return $this->redirect($this->generateUrl('admin_login'));
        }

        $em = $this->getDoctrine()->getManager();
        $userinfo = $em->getRepository('Model:TrjAdmins')->findOneById(array('id'=>$login_uid));
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

        $roleinfo = $em->getRepository('Model:TrjRoles')->findOneByRoleid(array('roleid'=>$userinfo->getRoleid()));

        if($roleinfo->getIsuse()!=1){
            $this->ret[$this->opcode['RETURN_CODE']]=$this->status['AJAX_201'];
            $this->ret[$this->opcode['RETURN_MSG']]=$this->constant['USER_ROLE_STOP'];

            return $this->retJsonData($this->ret);
        }


        return $this->render('AdminBundle:home:index.html.twig',array(
            'userinfo'
        ));
    }


    public function mainAction()
    {
        return $this->render('AdminBundle:home:main.html.twig');
    }
}
