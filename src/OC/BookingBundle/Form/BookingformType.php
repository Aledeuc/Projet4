<?php

namespace OC\BookingBundle\Form;

use BookingBundle\Entity\Bookingform;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookingformType extends AbstractType
{
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bookingDate',      DateType::class)
            ->add('nbVisitor',        TextType::class)
            ->add('ticketType',      ChoiceType::class, array(
                'choices'  => array(
                    'Journée' => 'full',
                    'Demi-journée' => 'half',
                )))
            ->add('bookingemail',   TextType::class)

            ->add('visitors', CollectionType::class, array(
                'entry_type' => VisitorType::class,
                'entry_options' => array('label' => false),
                'allow_add' => true,
            ))

           

            ->add('save', SubmitType::class, array('label' => 'Réserver'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\BookingBundle\Entity\Bookingform'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_bookingbundle_bookingform';
    }


}
