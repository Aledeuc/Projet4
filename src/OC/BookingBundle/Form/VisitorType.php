<?php

// src/BookingBundle/Form/VisitorType.php

namespace OC\BookingBundle\Form;

use BookingBundle\Entity\Visitor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class VisitorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name',       TextType::class, array(
            'label'    => 'Nom'))
        ->add('firstname',      TextType::class, array(
            'label'    => 'Prénom'))
        ->add('birthdate',      DateType::class, array(
            'label'    => 'Date de naissance'))
        ->add('country',      TextType::class, array(
            'label'    => 'Pays'))
        ->add('reducedPrice',      CheckboxType::class, array(
            'value'    => '1',
            'label'    => 'Tarif réduit',
            'required' => false,
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\BookingBundle\Entity\Visitor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_bookingbundle_visitor';
    }


}
