<?php

namespace News\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first')
            ->add('last')
            ->add('mail')
            ->add('subject')
            ->add('contenue')
          
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'News\FrontBundle\Entity\Contacts'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'news_frontbundle_contacts';
    }
}
