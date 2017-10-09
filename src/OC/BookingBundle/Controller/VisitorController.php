<?php 

// src/BookingBundle/Controller/VisitorController.php

namespace OC\BookingBundle\Controller;

use BookingBundle\Entity\Visitor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class VisitorController extends Controller
{
    public function visitorAction (Request $request)
    {
       $form = $this->createFormBuilder($visitor)
            ->add('name',             TextType::class)
            ->add('firstName',        TextType::class)
            ->add('country',          TextType::class)
            ->add('birthDate',        DateType::class)
            ->add('reduce',           CheckboxType::class, array('label' => 'Réduction'))

            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

