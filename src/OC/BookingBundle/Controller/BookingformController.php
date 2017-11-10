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
use Symfony\Component\HttpFoundation\Session\Session;



class BookingformController extends Controller

{
    public function formAction (Request $request)
    {
        $session = new Session();
        
        $bookingform = new Bookingform();

        $visitor = new Visitor();
        $em = $this->getDoctrine()->getManager();
        $visitor->setName('');
        $bookingform->getVisitors()->add($visitor);
       
        $form = $this->createForm(BookingformType::class, $bookingform);

            

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
            $existing_day = $repository->findOneByDate($dateOfBooking);
            
            // can't booking full ticket for current day after 14 pm
            // $today = date('d');
            // $hour = date('H');
            // var_dump($hour);
            // exit;
            // if ( $dateOfBooking == $today && $hour > 9)
            // {
            //     $form->add('ticketType',      ChoiceType::class, array(
            //         'choices'  => array(
            //             'Demi-journée' => 'half')
                        
            //         ) );
            //         echo('reservation impossible');
            // };




            if ( $existing_day == null )
            {
                $day->setDate($dateOfBooking);
                $place_check = $place_check + $total_visitor;
                
                $day->setPlace($place_check);
                $em->persist($day);
                $idDay = $day->getId();
                $reserved_places = $day->getPlace();
                
            }
            else 
            {
                $reserved_place = $existing_day->getPlace();
                $reserved_place = $reserved_place + $total_visitor;
                
                
                if ($reserved_place > 1000)
                {
                    $this->addFlash(
                        'notice',
                        'Vous ne pouvez plus réserver pour cette date.'
                    );
                    return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
                        'form' => $form->createView()
                    ));
                    
                }
                elseif ( $reserved_place == 1000)
                {
                    $existing_day->setPlace($reserved_place);
                    $idDay = $existing_day->getId();
                    $reserved_places = $reserved_place;                    
                    
                } 
                else 
                {
                    $existing_day->setPlace($reserved_place); 
                    $idDay = $existing_day->getId();
                    $reserved_places = $reserved_place;  
                                     
                }            
            }

            // total price
            $total_price= $bookingform->getTotalPrice();
            $tabl_visitors = $bookingform->getVisitors();
            $nom_visitors= []; 
            foreach ( $tabl_visitors as $visitor)
            {
                $visitor->computReducPrice($this->container);
                $total_price = $total_price + $visitor->computReducPrice($this->container);
                $nom_visitors[]= $visitor->getName();

            }
            $bookingform->setTotalPrice($total_price);
        

            // Form persist
            
            $em->persist($bookingform);
            $em->flush();


            // session for payment
            $session->set('idDay', $idDay);
            $session->set('reservedPlace', $reserved_places);
            $session->set('totalPrice', $total_price);
            $session->set('tableauNom', $nom_visitors);
            $ticketType= $bookingform->getTicketType();
            if ( $ticketType == 'full' )
                $ticketType = 'journée';
            else
                $ticketType = "demi-journée";

            $session->set('ticketType', $ticketType);
            $session->set('totalVisitor', $total_visitor);

            $bookingEmail= $bookingform->getBookingEmail();
            $session->set('bookingEmail', $bookingEmail);
            // return vers page de paiement
            return $this->redirectToRoute('oc_payment_form');
        }
            return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView()
            ));
    }
}

