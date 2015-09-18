<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends SecurityController
{

    public function indexAction(Request $request)
    {
        //获取返回参数
        $ret = $request->get('Ret');
        $opcode = $request->get('Opcode');
        $status = $request->get('Status');
        $constant = $request->get('Constant');


        return $this->render('AdminBundle:home:index.html.twig',array(
            'userinfo'
        ));
    }


    public function mainAction()
    {
        return $this->render('AdminBundle:home:main.html.twig');
    }
}
