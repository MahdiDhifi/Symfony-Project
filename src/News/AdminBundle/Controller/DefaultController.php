<?php

namespace News\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NewsAdminBundle:Default:index.html.twig', array());
    }
    
     public function homeAction()
    {
    $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        
        return $this->render('NewsAdminBundle:Default:home.html.twig', array(
           
             'categories'=> $categories,
         
        ));
    }
}
