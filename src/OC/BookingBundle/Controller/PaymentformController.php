<?php
// src/BookingBundle/Controller/PaymentformController.php
namespace OC\BookingBundle\Controller;

use OC\BookingBundle\Entity\Payment;
use OC\BookingBundle\Entity\Day;
use OC\BookingBundle\Entity\Bookingform;
use OC\BookingBundle\Controller\Email;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class PaymentformController extends Controller

{
    public function paymentAction()
    {
        $session = $this->get('session');
        $idDay = $session->get('idDay');
        $reservedPlace = $session->get('reservedPlace');
        $totalPrice = $session->get('totalPrice');
        $ticketType = $session->get('ticketType');
        $totalVisitor = $session->get('totalVisitor');
        $bookingEmail = $session->get('bookingEmail');
        $priceStripe = $totalPrice * 100;
        $repository = $this->getDoctrine()
            ->getRepository(Day::class);
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
        $nom_visitors = $session->get('tableauNom');
        $totalPrice = $session->get('totalPrice');
        $idDay = $session->get('idDay');
        $bookingform = $session->get('idBooking');
        $repository = $this->getDoctrine()
            ->getRepository(Day::class);

        $entityDay = $repository->findOneById($idDay);
        $dateOfBooking = $entityDay->getDate();
        \Stripe\Stripe::setApiKey("sk_test_Fl54zfWhryvZ0caH73XVBY2X");

        $token = $_POST['stripeToken'];

        // Create a charge: this will charge the user's card
        try
        {
            $charge = \Stripe\Charge::create(array(
                "amount" => $session->get('totalPrice') * 100, // Amount in cents
                "currency" => "eur",
                "source" => $token,
                "description" => "Paiement Stripe - OpenClassrooms Exemple"
            ));

            // generate commande number
            function random_number()
            {
                $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';
                $longueurMax = strlen($caracteres);
                $chaineAleatoire = '';
                for ($i = 0;$i < 8;$i++)
                {
                    $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1) ];
                }
                return $chaineAleatoire;
            }

            $command_number = random_number();
            // command check
            $em = $this->getDoctrine()
                ->getManager();
            $bookingform->setValidatedOrder(true);

            // add command number on bookingform
            $existing_order = $bookingform->getOrderNumber();

            if ($existing_order == $command_number)
            {
                $command_number = random_number();
                $bookingform->setOrderNumber($command_number);
            }
            else
            {
                $bookingform->setOrderNumber($command_number);
            }

            // persist entity
            $em->persist($bookingform);
            $em->flush();
            // send confirmation mail
            $stripeEmail = $_POST['stripeEmail'];
            $mailer = $this->get('mailer');
            $message = (new \Swift_Message('Hello Email'));
            $data = $message->embed(\Swift_Image::fromPath('images/logo_44-resized.png'));
            $message->setFrom('alexhsave@gmail.com')
                ->setTo($stripeEmail)->setBody($this->renderView('Emails/confirmation.html.twig', array(
                'dateOfBooking' => $dateOfBooking,
                'imageSrc' => $data,
                'tableauNom' => $nom_visitors,
                'numReservation' => $command_number,
                'totalPrice' => $totalPrice,
            )) , 'text/html');
            $mailer->send($message);
            return $this->redirectToRoute("oc_booking_homepage");
        }

        catch(\Stripe\Error\Card $e)
        {

            $reservedPlace = $session->get('reservedPlace');
            $totalVisitor = $session->get('totalVisitor');
            $entityDay = $repository->findOneById($idDay);

            $initial_place = $reservedPlace - $totalVisitor;
            $entityDay->setPlace($initial_place);
            $em->persist($entityDay);
            $em->flush();

            $this->addFlash("error", "Erreur lors du paiement, veuillez réessayer.");
            return $this->redirectToRoute("oc_payment_form");

            // The card has been declined
            
        }
    }
}

