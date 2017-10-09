<?php
// src/OC/BookingBundle/Controller/BookingformController.php

namespace OC\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BookingformController extends Controller
{
  public function formAction()
  {

    $builder 
      ->add('name',      CollectionType::class)
      ->add('firstname',        CollectionType::class)
      
      ->add('save',             SubmitType::class, array('label' => 'Envoyer')
    

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
      'form' => $form->createView(),
    ));
  }
}