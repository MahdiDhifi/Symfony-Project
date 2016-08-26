<?php

namespace News\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use News\AdminBundle\Entity\Contacts;
use News\AdminBundle\Entity\Categories;
use News\AdminBundle\Form\ContactsType;

/**
 * Contacts controller.
 *
 */
class ContactsController extends Controller
{

    /**
     * Lists all Contacts entities.
     *
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('NewsAdminBundle:Contacts')->findBy(array(), array('id' => 'DESC'));
          $dql   = "SELECT a FROM NewsAdminBundle:Contacts a ORDER BY a.date DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
        $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Contacts:list.html.twig', array(
            'entities' => $pagination,
             'categories' => $categories,
        ));
    }
   
    
    public function deleteAction($id,Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NewsAdminBundle:Contacts')->find($id);
      
            
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }
        $em->remove($entity);
        $em->flush();
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        //  $entities = $em->getRepository('NewsAdminBundle:Contacts')->findBy(array(), array('id' => 'DESC'));
      $dql   = "SELECT a FROM NewsAdminBundle:Contacts a ORDER BY a.date DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
         
         return $this->render('NewsAdminBundle:Contacts:list.html.twig', array('entities' =>  $pagination , 'categories' => $categories, ));
    }
    
         public function readAction($id) {
     
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsAdminBundle:Contacts')->find($id);
        if ($entity){
        $entity->setLu(TRUE);
            $em->flush();
         }
          $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Contacts:read.html.twig', array(
                    'entity' => $entity,
              'categories' => $categories,
                   
           ));
    }

}
