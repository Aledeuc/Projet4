<?php 

// src/BookingBundle/Controller/BookingformController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Bookingform;
use OC\BookingBundle\Form\VisitorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookingformController extends Controller

{
    public function formAction (Request $request)
    {
       $bookingform = new Bookingform();


       $builder = $this->createFormBuilder($bookingform);

        $builder
            ->add('bookingDate',      DateType::class)
            ->add('nbVisitor',        TextType::class)
            ->add('ticketType',      ChoiceType::class, array(
                'choices'  => array(
                    'Journée' => 'full',
                    'Demi-journée' => 'half',
                )))
            ->add('bookingemail',   TextType::class)
               
        // Add Visitor collection

            ->add('visitors', CollectionType::class, array(
                'entry_type'   => VisitorType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ))

            ->add('save', SubmitType::class, array('label' => 'Réserver'))
            ;
            


        $form = $builder->getForm();

        $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid()) {
      
            $bookingform = $form->getData();
  
            $em = $this->getDoctrine()->getManager();
            $em->persist($bookingform);
            $em->flush();
  
            //  return $this->redirectToRoute('task_success');
          }
        
         
        return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView(),

          ));
    }
}

