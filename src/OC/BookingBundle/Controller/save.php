<?php
// src/OC/BookingBundle/Controller/Booking.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Booking;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BookingController extends Controller
{
    public function formAction(Request $request)
   {

    // On crée un object Booking
    $booking = new Booking();

    // On crée le FormBuilder grâe au service form factory
    $form = $this->get('form.factory')->createBuilder(FormType::class, $booking)
    ->add('Nom',   TextType::class)
    ->add('Email',  EmailType::class)
    ->add('Telephone',   NumberType::class)
    ->add('Message', TextareaType::class)
    ->add('Envoyer', SubmitType::class)
    ->getForm()
    ;

    if ($request->isMethod('POST')) {
        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();
            
// envoie du mail
        $message = (new \Swift_Message('Hello Email'))
                    ->setFrom ($form->getData()->getEmail())
                    ->setTo('ahirschmuller@outlook.com')
                    ->setBody(
                        $this->renderView(
                            // app/Resources/views/Emails/registration.html.twig
                            'Emails/registration.html.twig',
                            array('name' => $name)
                        ),
                        'text/html'
                    )
                    /*
                     * If you also want to include a plaintext version of the message
                    ->addPart(
                        $this->renderView(
                            'Emails/registration.txt.twig',
                            array('name' => $name)
                        ),
                        'text/plain'
                    )
                    */
                ;
            
                $mailer->send($message);
            
                // or, you can also fetch the mailer service this way
                // $this->get('mailer')->send($message);
            
           
            



            $request->getSession()->getFlashBag()->add('notice', 'Mail envoyé.');

            return $this->redirectToRoute('booking', array('id' => $booking->getId()));
        }
    }
    // On passe la méthode createView() du formulaire à la vue pour qu'elle affiche le formulaire toute seule
       return $this->render('OCBookingBundle:Booking:form.html.twig', array(
           'form' => $form->createView(),
       ));
   } 

}

public function __construct()
{
    $this->bookingDate = new \Datetime();
    $this->categories  = new ArrayCollection();
    $this->applications = new ArrayCollection();
}
