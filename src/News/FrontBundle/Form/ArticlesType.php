<?php

namespace News\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenue')
             ->add('parg1')
                  ->add('parg2')
                   ->add('parg3')
                   ->add('parg4')
                   ->add('parg5')
          ->add('image','file', array(
                    'data_class' => null,
              'required' => false,
                ))
              ->add('image1','file', array(
                    'data_class' => null,
              'required' => false,
                ))
                 ->add('image2','file', array(
                    'data_class' => null,
              'required' => false,
                ))
                
                 ->add('image3','file', array(
                    'data_class' => null,
              'required' => false,
                ))
                
                 ->add('image4','file', array(
                    'data_class' => null,
              'required' => false,
                ))
                
                 ->add('image5','file', array(
                    'data_class' => null,
              'required' => false,
                ))
            ->add('video')
         
            ->add('categorie', 'entity', array(
                    'class' => 'NewsAdminBundle:Categories',
                    'property' => 'titre'))
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'News\AdminBundle\Entity\Articles'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'news_adminbundle_articles';
    }
}
