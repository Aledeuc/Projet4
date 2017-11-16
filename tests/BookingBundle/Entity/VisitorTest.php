<?php

namespace Tests\BookingBundle\Entity;

use OC\BookingBundle\Entity\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testcomputReducPrice()
    {
        $visitor = new Visitor('1', 'Bond', 'James', '1989-06-10', 'France', 'False');
        $result = $visitor->computReducPrice();
        $this->assertSame(16, $result);
    }
}

