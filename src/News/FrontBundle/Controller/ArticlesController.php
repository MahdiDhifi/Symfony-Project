<?php

namespace News\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use News\FrontBundle\Entity\Articles;
use News\FrontBundle\Form\ArticlesType;
use News\FrontBundle\Entity\Contacts;
use News\FrontBundle\Form\ContactsType;

/**
 * Articles controller.
 *
 */
class ArticlesController extends Controller
{

    /**
     * Lists all Articles entities.
     *
     */
        public function homeAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
       //   $entities = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('date' => 'DESC'));
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
          $dql   = "SELECT a FROM NewsFrontBundle:Articles a  ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
    
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
        return $this->render('NewsFrontBundle:Articles:home.html.twig', array(
            'entities' => $pagination,
            'archive' => $archive,
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
        ));
    }
      public function listAction($id ,Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
       //   $entities = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('date' => 'DESC'));
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
          $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
    
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
        return $this->render('NewsFrontBundle:Articles:list.html.twig', array(
            'entities' => $pagination,
            'archive' => $archive,
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
            'id'=> $id,
        ));
    }
          
      public function detailAction($id,Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
       $entity = $em->getRepository('NewsFrontBundle:Articles')->find($id);
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
         
    $dql   =   "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$entity->getCategorie()->getId()." ORDER BY a.date DESC";
    $entities = $em->createQuery($dql)->setFirstResult(0)->setMaxResults(9)->getResult();
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
        return $this->render('NewsFrontBundle:Articles:detail.html.twig', array(
            'entities' => $entities,
            'entity' => $entity,
            'archive' => $archive,
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
        ));
    }
    
           
    
     public function likeAction($id,Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
       $entity = $em->getRepository('NewsFrontBundle:Articles')->find($id);
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
         $entity->setGood( $entity->getGood()+1);
             $em->flush();
    $dql   =   "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$entity->getCategorie()->getId()." ORDER BY a.id DESC";
    $entities = $em->createQuery($dql)->setFirstResult(0)->setMaxResults(9)->getResult();
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
        return $this->render('NewsFrontBundle:Articles:detail.html.twig', array(
            'entities' => $entities,
            'entity' => $entity,
            'archive' => $archive,
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
        ));
    }
    
    
     public function dislikeAction($id,Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
       $entity = $em->getRepository('NewsFrontBundle:Articles')->find($id);
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
         $entity->setBad( $entity->getBad()+1);
             $em->flush();
    $dql   =   "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$entity->getCategorie()->getId()." ORDER BY a.id DESC";
    $entities = $em->createQuery($dql)->setFirstResult(0)->setMaxResults(10)->getResult();
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
        return $this->render('NewsFrontBundle:Articles:detail.html.twig', array(
            'entities' => $entities,
            'entity' => $entity,
            'archive' => $archive,
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
        ));
    }
    
  public function contactAction(Request $request)
    {
      $send="";
       $em = $this->getDoctrine()->getManager();
//*************************************************************************
    //*************************************************************************
    
    
     $entity= new Contacts();
       $request = $this->getRequest();
        $form = $this->createForm(new ContactsType(), $entity);
        $form->add('submit', 'submit', array('label' => 'Send'));
        $form->handleRequest($request);
   
      if ($entity->getfirst() != null || $entity->getLast() != null || $entity->getMail() != null
              || $entity->getSubject() != null|| $entity->getContenue() != null){
            $entity->setDate(new \Datetime());
            $entity->setLu(false);
            $em->persist($entity);
           
       $em->flush() ;
        
      $send="Your message was sent successfully .";
       
      }
      
     
       
      
        
    //*************************************************************************
    //*************************************************************************
    
    
    
       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsFrontBundle:Categories')->findAll();
     //  $entity = $em->getRepository('NewsFrontBundle:Articles')->find($id);
        // $dql   = "SELECT a FROM NewsFrontBundle:Articles a where a.categorie=".$id." ORDER BY a.date DESC";
        //   $most = $em->getRepository('NewsFrontBundle:Articles')->findBy(array(), array('good' => 'DESC'));
       //  $entity->setBad( $entity->getBad()+1);
           //  $em->flush();
   
    $dql2   = "SELECT a FROM NewsFrontBundle:Articles a  ";
    $archive = $em->createQuery($dql2)->setFirstResult(20)->setMaxResults(10)->getResult();

        $dql3   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.good DESC ";
    $most = $em->createQuery($dql3)->setFirstResult(0)->setMaxResults(10)->getResult();
     $dql4   = "SELECT a FROM NewsFrontBundle:Articles a ORDER BY a.id DESC ";
    $latest = $em->createQuery($dql4)->setFirstResult(0)->setMaxResults(5)->getResult();
 
    
        return $this->render('NewsFrontBundle:Articles:contact.html.twig', array(
           'send' => $send,
            'archive' => $archive,
            'form' => $form->createView(),
             'categories'=> $categories,
            'most'=> $most,
            'latest'=> $latest,
        ));
    }
    
  
}
