<?php 

// src/BookingBundle/Controller/BookingdayController.php

namespace OC\BookingBundle\Controller;

use BookingBundle\Entity\Bookingday;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookingdayController extends Controller
{
    public function bookingdayAction (Request $request)
    {
       $form = $this->createFormBuilder($bookingday)
            ->add('bookingDate',      DateType::class)
            ->add('nbVisitor',        TextType::class)
            ->add('bookingType',      ChoiceType::class, array(
                'entry_options' =>  array(
                    'choices' => array(
                        'Journée' => 'day',
                        'Demi-journée' => 'half',
                    ),
                ),
                ))

            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

