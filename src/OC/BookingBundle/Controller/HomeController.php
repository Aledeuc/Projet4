<?php

// src/OC/BookingBundle/Controller/HomeController.php 


namespace OC\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCBookingBundle:Home:index.html.twig');

    }

}