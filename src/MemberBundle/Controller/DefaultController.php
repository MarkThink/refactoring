<?php

namespace MemberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MemberBundle:Default:index.html.twig', array('name' => $name));
    }
}
