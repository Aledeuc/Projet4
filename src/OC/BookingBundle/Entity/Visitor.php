<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitor
 *
 * @ORM\Table(name="visitor")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\VisitorRepository")
 */
class Visitor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_date", type="date", length=255)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket", type="string", length=255)
     */
    private $ticket;

    /**
     * @var string
     *
     * @ORM\Column(name="booking", type="string", length=255)
     */
    private $booking;

    /**
     * @var string
     *
     * @ORM\Column(name="admission_type", type="string", length=255)
     */
    private $admissionType;

    /**
     * @var string
     *
     * @ORM\Column(name="reduced_price", type="boolean", length=255)
     */
    private $reducedPrice;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Visitor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Visitor
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set birthDate
     *
     * @param string $birthDate
     *
     * @return Visitor
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set ticket
     *
     * @param string $ticket
     *
     * @return Visitor
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set booking
     *
     * @param string $booking
     *
     * @return Visitor
     */
    public function setBooking($booking)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return string
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set admissionType
     *
     * @param string $admissionType
     *
     * @return Visitor
     */
    public function setAdmissionType($admissionType)
    {
        $this->admissionType = $admissionType;

        return $this;
    }

    /**
     * Get admissionType
     *
     * @return string
     */
    public function getAdmissionType()
    {
        return $this->admissionType;
    }

    /**
     * Set reducedPrice
     *
     * @param string $reducedPrice
     *
     * @return Visitor
     */
    public function setReducedPrice($reducedPrice)
    {
        $this->reducedPrice = $reducedPrice;

        return $this;
    }

    /**
     * Get reducedPrice
     *
     * @return string
     */
    public function getReducedPrice()
    {
        return $this->reducedPrice;
    }
}

