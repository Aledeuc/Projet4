<?php
// src/OC/BookingBundle/Controller/AdmissionController.php

namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Admission;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdmissionController extends Controller
{
  public function formAction()
  {
    // On crée un objet Advert
    $admission = new Admission();

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $admission);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('bookingDate',      DateType::class)
      ->add('nbVisitor',        TextType::class)
      ->add('bookingType',      ChoiceType::class, array(
          'choices' => array(
              'Journée' => 'day',
              'Demi-journée' => 'half',
          ),
        ))
      ->add('name',             TextType::class)
      ->add('firstName',        TextType::class)
      ->add('country',          TextType::class)
      ->add('birthDate',        DateType::class)
      ->add('reduce',           CheckboxType::class)
      ->add('save',             SubmitType::class)
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('OCBookingBundle:Admission:form.html.twig', array(
      'form' => $form->createView(),
    ));
  }
}