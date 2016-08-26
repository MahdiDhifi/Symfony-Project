<?php

namespace News\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use News\AdminBundle\Entity\Articles;
use News\AdminBundle\Entity\Categories;
use News\AdminBundle\Form\ArticlesType;

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
    public function listAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
         $dql   = "SELECT a FROM NewsAdminBundle:Articles a where a.categorie=".$id." ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
        return $this->render('NewsAdminBundle:Articles:list.html.twig', array(
            'entities' => $pagination,
             'categories'=> $categories,
            'cat'=>$id,
        ));
    }

    public function deleteAction($id,Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NewsAdminBundle:Articles')->find($id);
       $cat= $entity->getCategorie()->getId();
             $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }
        $em->remove($entity);
        $em->flush();
      // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
     $dql   = "SELECT a FROM NewsAdminBundle:Articles a where a.categorie=".$id." ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        3/*limit per page*/
    );
       return $this->render('NewsAdminBundle:Articles:list.html.twig', array('entities' => $pagination ,'cat'=>$cat,'categories'=>$categories));
    }

    public function editAction($id,Request $request) {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('NewsAdminBundle:Articles')->find($id);
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        $image=$news->getImage();
         $image1=$news->getImage1();
         $image2=$news->getImage2();
         $image3=$news->getImage3();
         $image4=$news->getImage4();
         $image5=$news->getImage5();
        if (!$news) {
            throw $this->createNotFoundException(
                    'Article does not exist' . $id
            );}
        $request = $this->getRequest();
        $form = $this->createForm(new ArticlesType(), $news);
        $form->add('submit', 'submit', array('label' => 'Update'));
        $form->handleRequest($request);

        if ($form->isValid()) {
             $id=$news->getCategorie()->getId();
             if ($news->getImage() != null){
              $news->upload();
             }
             else{
                 $news->setImage($image);
             }
             
                if ($news->getImage1() != null){
              $news->upload1();
             }
             else{
                 $news->setImage1($image1);
             }
             
                if ($news->getImage2() != null){
              $news->upload2();
             }
             else{
                 $news->setImage2($image2);
             }
             
             
                if ($news->getImage3() != null){
              $news->upload3();
             }
             else{
                 $news->setImage3($image3);
             }
             
                if ($news->getImage4() != null){
              $news->upload4();
             }
             else{
                 $news->setImage4($image4);
             }
             
             
                if ($news->getImage5() != null){
              $news->upload5();
             }
             else{
                 $news->setImage5($image5);
             }
              $news->setDate(new \Datetime());
            $em->flush();
           
             // $entities = $em->getRepository('NewsAdminBundle:Articles')->findBy(array(), array('id' => 'DESC'));
              $dql   = "SELECT a FROM NewsAdminBundle:Articles a where a.categorie=".$id." ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    ); 
            
            return $this->render('NewsAdminBundle:Articles:list.html.twig', array(
                   'entities' =>   $pagination,
                   'categories'=>$categories,
                    'cat'=>$id,
                   ));
        }

        return $this->render('NewsAdminBundle:Articles:edit.html.twig', array(
                    'entity' => $news,
                      'categories'=>$categories,
                    'form' => $form->createView()
        ));
    }
 public function addAction(Request $request) {
       $entity = new Articles();
        $em = $this->getDoctrine()->getEntityManager();
       $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        $request = $this->getRequest();
        $form = $this->createForm(new ArticlesType(), $entity);
        $form->add('submit', 'submit', array('label' => 'Create'));
        $form->handleRequest($request);
        if ($form->isValid()) {
           
           $id=$entity->getCategorie()->getId();
            $entity->setGood(0);
            $entity->setBad(0);
            $entity->upload();
            
            
            
             if ($entity->getImage1() != null){
              $entity->upload1();
             }
        
                if ($entity->getImage2() != null){
              $entity->upload2();
             }
   
                if ($entity->getImage3() != null){
              $entity->upload3();
             }
    
                if ($entity->getImage4() != null){
              $entity->upload4();
             }
   
                if ($entity->getImage5() != null){
              $entity->upload5();
             }
             
            $entity->setDate(new \Datetime());
            $em->persist($entity);
            $em->flush();
            // $entities = $em->getRepository('NewsAdminBundle:Articles')->findAll(array('id' => 'DEC'));
              
               $dql   = "SELECT a FROM NewsAdminBundle:Articles a where a.categorie=".$id." ORDER BY a.id DESC";
    $query = $em->createQuery($dql);
 $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
       $query,
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    ); 
           
             return $this->render('NewsAdminBundle:Articles:list.html.twig', array(
                    'entities' =>   $pagination ,
                 'categories'=>$categories,
                     'cat'=>$id, ));
        }
        return $this->render('NewsAdminBundle:Articles:add.html.twig', array(
                    'entity' => $entity,'categories'=>$categories,'form' => $form->createView()));
    }

     public function feedbackAction($id)
    {
        $oui=0;
        $non=0;
        $s=0;
        $em = $this->getDoctrine()->getManager();
         
        $entity = $em->getRepository('NewsAdminBundle:Articles')->find($id);     
         $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
           
                $s=$entity->getGood()+$entity->getBad();
                if($s != 0){
            $oui=$entity->getGood()/$s*100;
            $non=$entity->getBad()/$s*100;
              
            }
            
        
        return $this->render('NewsAdminBundle:Articles:feedback.html.twig', array(
            'entity' => $entity,
            'good' => $oui,
            'bad' => $non,
            'categories'=>$categories,
        ));
    }
    
     public function detailAction($id) {
     
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsAdminBundle:Articles')->find($id);
        $categories = $em->getRepository('NewsAdminBundle:Categories')->findAll();
        return $this->render('NewsAdminBundle:Articles:detail.html.twig', array(
                    'entity' => $entity,
            'categories'=>$categories,
                   
           ));
    }
    
}
