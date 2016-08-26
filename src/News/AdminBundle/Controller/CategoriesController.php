<?php

namespace News\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use News\AdminBundle\Entity\Categories;
use News\AdminBundle\Form\CategoriesType;

/**
 * Categories controller.
 *
 */
class CategoriesController extends Controller
{

    /**
     * Lists all Categories entities.
     *
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NewsAdminBundle:Categories')->findAll();
 $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Categories:list.html.twig', array(
            'entities' => $entities,
            'categories'=>$categories,
        ));
    }
   public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NewsAdminBundle:Categories')->find($id);
       
            
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }
        $em->remove($entity);
        $em->flush();
        $entities = $em->getRepository('NewsAdminBundle:Categories')->findAll();
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
      return $this->render('NewsAdminBundle:Categories:list.html.twig', array('entities' => $entities,'categories'=>$categories ));
    }

    public function editAction($id) {
     
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('NewsAdminBundle:Categories')->find($id);
        if (!$news) {
            throw $this->createNotFoundException(
                    'category does not exist' . $id
            );
        }
        $request = $this->getRequest();
        $form = $this->createForm(new CategoriesType(), $news);
        $form->add('submit', 'submit', array('label' => 'Update'));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();
              $entities = $em->getRepository('NewsAdminBundle:Categories')->findAll();
               $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
               return $this->render('NewsAdminBundle:Categories:list.html.twig', array('entities' =>   $entities,'categories'=>$categories  ));
           
        }


            $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Categories:edit.html.twig', array(
                    'entity' => $news,
                    'categories'=>$categories,
                    'form' => $form->createView()
        ));
    }

    public function addAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = new Categories();
        $request = $this->getRequest();

        $form = $this->createForm(new CategoriesType(), $entity);
        $form->add('submit', 'submit', array('label' => 'Create'));
        $form->handleRequest($request);
        if ($form->isValid()) {
           

           
            $em->persist($entity);
            $em->flush();
             $entities = $em->getRepository('NewsAdminBundle:Categories')->findAll();
              $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
               return $this->render('NewsAdminBundle:Categories:list.html.twig', array(
                    'entities' =>  $entities,
                   'categories'=>$categories,
                   
           ));
        }
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Categories:add.html.twig', array(
                    'entity' => $entity,
                    'categories'=>$categories,
                    'form' => $form->createView()
        ));
    }

}
