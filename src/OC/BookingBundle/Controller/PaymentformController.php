<?php 

// src/BookingBundle/Controller/PaymentformController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Payment;
use OC\BookingBundle\Entity\Day;
use OC\BookingBundle\Controller\Email;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;



class PaymentformController extends Controller

{
    
    public function paymentAction ()
    {
        $session = $this->get('session');
        $idDay = $session->get('idDay');
        $reservedPlace = $session->get('reservedPlace');
        $totalPrice = $session->get('totalPrice');
        $ticketType = $session->get('ticketType');
        $totalVisitor = $session->get('totalVisitor');
        $bookingEmail= $session->get('bookingEmail');

        $priceStripe = $totalPrice * 100;
       

        $repository = $this->getDoctrine()->getRepository(Day::class);
        $entityDay = $repository->findOneById($idDay);
        $dateOfBooking = $entityDay->getDate();

        return $this->render('OCBookingBundle:Paymentform:payment.html.twig', array(
                'totalPrice' => $totalPrice,
                'ticketType' => $ticketType,
                'totalVisitor' => $totalVisitor,
                'priceStripe' => $priceStripe,
                'dateOfBooking' => $dateOfBooking,
                'bookingEmail' => $bookingEmail,
        ));
    }

   
    public function checkoutAction(Request $request)
    {
        $session = $this->get('session');
        $nom_visitors= $session->get('tableauNom');
        $totalPrice = $session->get('totalPrice');
        $idDay = $session->get('idDay');
        $repository = $this->getDoctrine()->getRepository(Day::class);
        $entityDay = $repository->findOneById($idDay);
        $dateOfBooking = $entityDay->getDate();

        \Stripe\Stripe::setApiKey("sk_test_Fl54zfWhryvZ0caH73XVBY2X");
        
                // Get the credit card details submitted by the form
                $token = $_POST['stripeToken'];
        
                // Create a charge: this will charge the user's card
                try 
                {
                    $charge = \Stripe\Charge::create(array(
                        "amount" => $session->get('totalPrice')*100, // Amount in cents
                        "currency" => "eur",
                        "source" => $token,
                        "description" => "Paiement Stripe - OpenClassrooms Exemple"
                    ));  

                    $stripeEmail= $_POST['stripeEmail'];
                    $mailer = $this->get('mailer');
                    
                    $message = (new \Swift_Message('Hello Email'));
                    $data = $message->embed(\Swift_Image::fromPath('images/logo_44-resized.png'));
var_dump($data);
                    $message      
                            ->setFrom('alexhsave@gmail.com')
                            ->setTo($stripeEmail)
                            ->setBody(
                                $this->renderView( 
                                    'Emails/confirmation.html.twig', array(  
                                        'dateOfBooking' =>$dateOfBooking,
                                        'imageSrc' => $data,
                                    )),
                                'text/html'
                            );
                          
                        
                        
                        $mailer->send($message);
                        
                            
                    $this->addFlash("success","Votre réservation à bien été prise en compte");
                    return $this->redirectToRoute("oc_booking_homepage");

                } 
                    catch(\Stripe\Error\Card $e) 
                {
        
                    $this->addFlash("error","Erreur lors du paiement, veuillez réessayer.");
                    return $this->redirectToRoute("oc_payment_form");
                    // The card has been declined
                }
    }

}