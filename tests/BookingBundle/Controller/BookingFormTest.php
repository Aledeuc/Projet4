<?php

// tests/AppBundle/Controller/PostControllerTest.php

namespace Tests\BookingBundle\Controller;

use OC\BookingBundle\Entity\Bookingform;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingformControllerTest extends WebTestCase
{
    public function testShowForm()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/museedulouvre.fr/billeterie');
        $this->assertGreaterThan(0,$crawler->filter('html:contains("Date")')->count());
    }

}
