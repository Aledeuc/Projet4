<?php

// src/BookingBundle/DataFixtures/ORM/Fixtures.php

namespace BookingBundle\DataFixtures\ORM;

use OC\BookingBundle\Entity\Rate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $rate = new Rate();
        $rate->setPrice(8);
        $manager->persist($rate);

        $rate2 = new Rate();
        $rate2->setPrice(10);
        $manager->persist($rate2);

        $rate3 = new Rate();
        $rate3->setPrice(12);
        $manager->persist($rate3);

        $rate4 = new Rate();
        $rate4->setPrice(16);
        $manager->persist($rate4);

        $rate5 = new Rate();
        $rate5->setPrice(0);
        $manager->persist($rate5);

        $manager->flush();
    }
}
