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

    # Version Anglaise

    public function indexEnAction()
    {
        $content = $this->get('templating')->render('OCBookingBundle:Home:indexEn.html.twig');

        return new Response($content);
    }


    // Recupère paramètre POST : $request->request
}