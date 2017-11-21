<?php

// tests/BookingBundle/Form/Type/BookingformTypeTest.php

namespace Tests\BookingBundle\Form\Type;

use OC\BookingBundle\Form\BookingformType;
use OC\BookingBundle\Entity\Bookingform;
use OC\BookingBundle\Entity\Visitor;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BookingformTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $date = new \DateTime('2018-06-10');
        $birth_date = new \DateTime('1989-06-10');    
        $bookingform = new Bookingform();
        $bookingform->setBookingDate($date);
        $bookingform->setTicketType('full');
        $bookingform->setBookingEmail('Po3tik@hotmail.fr');
        $visitor = new Visitor();
        $visitor->setName('Bond');
        $visitor->setFirstname('Jales');
        $visitor->setBirthdate($birth_date);
        $visitor->setCountry('France');
        $visitor->setReducedPrice(true); 
        $bookingform->getVisitors()->add($visitor);
        $form = $this->factory->create(BookingformType::class);
        $form->submit($bookingform);
        $this->assertSame(true, $form->isSubmitted() && $form->isValid());
    }
}