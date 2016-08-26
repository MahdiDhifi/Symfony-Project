<?php

namespace News\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NewsFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
