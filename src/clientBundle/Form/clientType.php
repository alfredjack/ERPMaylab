<?php

namespace clientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class clientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomclient')
            ->add('codeclient')
            ->add('etat')
            ->add('adresse')
            ->add('ville')
            ->add('email')
            ->add('web')
            ->add('telephone')
            ->add('assujettiatva')
            ->add('fax')
            ->add('formejuridique')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'clientBundle\Entity\client'
        ));
    }
}
