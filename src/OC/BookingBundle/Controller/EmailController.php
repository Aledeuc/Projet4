<?php

// src/OC/BookingBundle/Controller/EmailController.php 


namespace OC\BookingBundle\Controller;

class EmailController extends Controller

{
    public function ConfirmationAction()
    {
        $contenu = $this->renderView('OCBookingBundle:Welcome:email.txt.twig', array(
            'var1'=> $var1,
            'var2'=> $var2
        ));

        mail('moi@openclassrooms.com', 'Reservation OK', $contenu);
    }


}