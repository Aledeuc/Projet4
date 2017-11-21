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
    public function formAction(Request $request)
    {
        $session = new Session();
        $bookingform = new Bookingform();
        $visitor = new Visitor();
        $em = $this->getDoctrine()->getManager();
        $visitor->setName('');
        $bookingform->getVisitors()->add($visitor);
        $form = $this->createForm(BookingformType::class , $bookingform);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // Nb Visitor
            $total_visitor = $bookingform->getVisitors()->count();
            $bookingform->setNbVisitor($total_visitor);
            $bookingform = $form->getData();
            // remaining entry check
            $day = new Day();
            $idDay = 0 ;
            $dateOfBooking = $bookingform->getBookingDate();
            $place_check = $day->getPlace(); // recup nombre de place
            $repository = $this->getDoctrine()->getRepository(Day::class);
            $existing_day = $repository->findOneByDate($dateOfBooking);
            $type_ticket = $bookingform->getTicketType();
            //can't booking full ticket for current day after 14 pm
            $today = date('Y-m-d');
            $hour = date('H');
            $day_selected = $dateOfBooking->format('Y-m-d');
            if (($day_selected == $today) && ($hour > 9) && ($type_ticket == 'full'))
            {
                $this->addFlash('notice', 'Après 14h vous ne pouvez commander que des billets pour la demi-journée.');
                return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
                    'form' => $form->createView()
                ));
            };
            if ($existing_day == null)
            {
                $day->setDate($dateOfBooking);
                $place_check = $place_check + $total_visitor;
                $day->setPlace($place_check);
                $reserved_places = $day->getPlace();
                $em->persist($day);
                $coucou='coucou';
                $em->flush();
                $idDay = $day->getId();   
            }
            else
            {
                $reserved_place = $existing_day->getPlace();
                $reserved_place = $reserved_place + $total_visitor;
                if ($reserved_place > 1000)
                {
                    $this->addFlash('notice', 'Vous ne pouvez plus réserver pour cette date.');
                    return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
                        'form' => $form->createView()
                    ));
                }
                elseif ($reserved_place == 1000)
                {
                    $existing_day->setPlace($reserved_place);
                    $reserved_places = $reserved_place;
                    $em->persist($existing_day);
                    $idDay = $existing_day->getId();
                }
                else
                {
                    $existing_day->setPlace($reserved_place);
                    $reserved_places = $reserved_place;
                    $em->persist($existing_day);
                    $idDay = $existing_day->getId();
                }
            };
            // total price
            $total_price = $bookingform->getTotalPrice();
            $tabl_visitors = $bookingform->getVisitors();
            $nom_visitors = [];
            foreach ($tabl_visitors as $visitor)
            {
                $visitor->computReducPrice($this->container);
                $total_price = $total_price + $visitor->computReducPrice($this->container);
                $nameVisitor=$visitor->getName();
                $firstnameVisitor =$visitor->getFirstname();
                $nameTableau = $nameVisitor .' '. $firstnameVisitor;
                $nom_visitors[] = $nameTableau ;
            };
            $bookingform->setTotalPrice($total_price);
            // Form persist
            $em->persist($bookingform);
            $em->flush();
            // session for payment
            $session->set('idDay', $idDay);
            $session->set('idBooking', $bookingform);
            $session->set('reservedPlace', $reserved_places);
            $session->set('totalPrice', $total_price);
            $session->set('tableauNom', $nom_visitors);
            $ticketType = $bookingform->getTicketType();
            if ($ticketType == 'full') $ticketType = 'journée';
            else $ticketType = "demi-journée";
            $session->set('ticketType', $ticketType);
            $session->set('totalVisitor', $total_visitor);
            $bookingEmail = $bookingform->getBookingEmail();
            $session->set('bookingEmail', $bookingEmail);
            // return vers page de paiement
            return $this->redirectToRoute('oc_payment_form');
        }
        return $this->render('OCBookingBundle:Bookingform:form.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
