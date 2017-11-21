<?php

namespace Tests\BookingBundle\Entity;

use OC\BookingBundle\Entity\Visitor;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VisitorTest extends WebTestCase
{
    public function testcomputReducPrice()
    {
        $date = new \DateTime('1989-06-10');
        $visitor = new Visitor();
        $visitor->setName('Bond');
        $visitor->setFirstname('James');
        $visitor->setBirthdate($date);
        $visitor->setCountry('France');
        $visitor->setReducedPrice(False);

        $client=static::createClient();
        $container = $client->getContainer();
        $result = $visitor->computReducPrice($container);
        $this->assertSame(16, $result);
    }
}

