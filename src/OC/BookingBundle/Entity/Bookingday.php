<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookingday
 *
 * @ORM\Table(name="bookingday")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\BookingdayRepository")
 */
class Bookingday
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
     * @ORM\Column(name="booking_date", type="string", length=255)
     */
    private $bookingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_visitor", type="string", length=255)
     */
    private $nbVisitor;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_type", type="text")
     */
    private $ticketType;

    /**
     * @var string
     *
     * @ORM\Column(name="booking_email", type="string", length=255)
     */
    private $bookingEmail;


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
     * Set bookingDate
     *
     * @param string $bookingDate
     *
     * @return Bookingday
     */
    public function setBookingDate($bookingDate)
    {
        $this->bookingDate = $bookingDate;

        return $this;
    }

    /**
     * Get bookingDate
     *
     * @return string
     */
    public function getBookingDate()
    {
        return $this->bookingDate;
    }

    /**
     * Set nbVisitor
     *
     * @param string $nbVisitor
     *
     * @return Bookingday
     */
    public function setNbVisitor($nbVisitor)
    {
        $this->nbVisitor = $nbVisitor;

        return $this;
    }

    /**
     * Get nbVisitor
     *
     * @return string
     */
    public function getNbVisitor()
    {
        return $this->nbVisitor;
    }

    /**
     * Set ticketType
     *
     * @param string $ticketType
     *
     * @return Bookingday
     */
    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Get ticketType
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Set bookingEmail
     *
     * @param string $bookingEmail
     *
     * @return Bookingday
     */
    public function setBookingEmail($bookingEmail)
    {
        $this->bookingEmail = $bookingEmail;

        return $this;
    }

    /**
     * Get bookingEmail
     *
     * @return string
     */
    public function getBookingEmail()
    {
        return $this->bookingEmail;
    }
}

