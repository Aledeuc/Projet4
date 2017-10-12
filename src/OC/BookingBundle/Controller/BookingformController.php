<?php 

// src/BookingBundle/Controller/BookingformController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Bookingform;
use OC\BookingBundle\Entity\Visitor;
use OC\BookingBundle\Form\BookingformType;
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

        $form = $this->createForm(BookingformType::class, $bookingform );
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $bookingform = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($bookingform);
            $em->flush();
        }
            return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView(),
            ));
    }
}

