<?php 

// src/BookingBundle/Controller/BookingformController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Bookingform;
use OC\BookingBundle\Entity\Visitor;
use OC\BookingBundle\Entity\Day;
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

       $visitor = new Visitor();

       $visitor->setName('');
       $bookingform->getVisitors()->add($visitor);
       
        $form = $this->createForm(BookingformType::class, $bookingform );
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // Nb Visitor
            $html= file_get_contents('http://localhost:8888/web/app_dev.php/museedulouvre.fr/billeterie');
            $count = substr_count($html,'<li>');
            
            $bookingform->setNbVisitor($count);
            //$bookingform->getNbVisitor($count);
            $bookingform = $form->getData();

            // Vérification du nombre de place disponible pour la date choisit
            $day = new Day();
            $dateOfBooking = $bookingform->getBookingDate();
            $placeLibre = $day->getPlace();
            $day->setDate($dateOfBooking);

            $previsionPlace = $placeLibre + $count;

            if ( $previsionPlace >= 1000 ) 
            {
                 echo("réservation impossible")
            }
            else 
            {
                $placeLibre = $placeLibre + $count
            }
    

            // total Price
            $price = 0;
            for ($i = 0; $i == $count; $i++) {               
               $visitorprice = $visitor->computReducPrice();
               $price = $price + $visitorprice;
            }
            
            $bookingform->setTotalPrice($price);
            $em = $this->getDoctrine()->getManager();
            $em->persist($bookingform);
            $em->flush();
        }
            return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView(),
            ));
    }
}

