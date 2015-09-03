<?php

namespace FundsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FundsBundle:Default:index.html.twig', array('name' => $name));
    }
}
