<?php

namespace News\AdminBundle\Form;

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
            ->add('date')
            ->add('lu')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'News\AdminBundle\Entity\Contacts'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'news_adminbundle_contacts';
    }
}
