<?php

namespace PayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PayBundle:Default:index.html.twig', array('name' => $name));
    }
}
