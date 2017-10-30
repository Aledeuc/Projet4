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
       $em = $this->getDoctrine()->getManager();
       $visitor->setName('');
       $bookingform->getVisitors()->add($visitor);
       
        $form = $this->createForm(BookingformType::class, $bookingform );
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // Nb Visitor
            $total_visitor = $bookingform->getVisitors()->count();
            $bookingform->setNbVisitor($total_visitor);
            $bookingform = $form->getData();

            // remaining entry check
            $day = new Day();
            
            $dateOfBooking = $bookingform->getBookingDate();
            $place_check = $day->getPlace(); // recup nombre de place


            $repository = $this->getDoctrine()->getRepository(Day::class);
            $day_repository = $repository->findOneByDate($dateOfBooking);

            var_dump($day_repository);   

            if ( $day_repository == null )
            {
                $day->setDate($dateOfBooking);
                $place_check = $place_check + $total_visitor;
                $day->setPlace($place_check);
                $day->setFull(false);
                $em->persist($day);
            } else 
            {
                $reserved_place = $day_repository->getPlace();
                $reserved_place = $reserved_place + $total_visitor;
                $day_full_check = $day_repository->getFull();
 var_dump($reserved_place);
                if ($day_full_check == true )
                    echo(' Réservation impossible à cette date');
                elseif ($reserved_place > 1000)
                    echo(' Réservation impossible à cette date');
                    elseif ( $reserved_place == 1000)
                        {
                            $day_repository->setPlace($reserved_place);
                            $day_repository->setFull(new true);
                        } else 
                        {
                            $day_repository->setPlace($reserved_place); 
                        }            
            }
           
            var_dump($day);
            
           
            // total price
            $total_price= $bookingform->getTotalPrice();
            $tabl_visitors = $bookingform->getVisitors();
            foreach ( $tabl_visitors as $visitor)
            {
                $visitor->computReducPrice($this->container);
            
                $total_price = $total_price + $visitor->computReducPrice($this->container);
            }
            $bookingform->setTotalPrice($total_price);
        

            // Form persist
            
            $em->persist($bookingform);
            $em->flush();
        }
            return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView(),
            ));
    }
}

