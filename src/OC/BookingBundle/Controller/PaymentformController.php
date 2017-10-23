<?php 

// src/BookingBundle/Controller/PaymentformController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Payment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PaymentformController extends Controller

{
    public function paymentAction ()
    {
        return $this->render('OCBookingBundle:Paymentform:payment.html.twig');

    }
}

