<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Bookingform
 *
 * @ORM\Table(name="bookingform")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\BookingformRepository")
 */
class Bookingform
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
     * @var \DateTime
     *
     * @ORM\Column(name="booking_date", type="datetime")
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
     * @ORM\Column(name="ticket_type", type="string", length=255)
     */
    private $ticketType;

    /**
     * @var string
     *
     * @ORM\Column(name="booking_email", type="string", length=255)
     */
    private $bookingEmail;

    /**
     * @var Visitor
     * 
     * @Assert\Valid()
     * @ORM\ManyToMany(targetEntity="OC\BookingBundle\Entity\Visitor",  cascade={"persist"})
     */
    private $visitors;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visitors = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bookingDate
     *
     * @param \DateTime $bookingDate
     *
     * @return Bookingform
     */
    public function setBookingDate($bookingDate)
    {
        $this->bookingDate = $bookingDate;

        return $this;
    }

    /**
     * Get bookingDate
     *
     * @return \DateTime
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
     * @return Bookingform
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
     * @return Bookingform
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
     * @return Bookingform
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

    /**
     * Add visitor
     *
     * @param \OC\BookingBundle\Entity\Visitor $visitor
     *
     * @return Bookingform
     */
    public function addVisitor(\OC\BookingBundle\Entity\Visitor $visitor)
    {
        $this->visitors[] = $visitor;

        return $this;
    }

    /**
     * Remove visitor
     *
     * @param \OC\BookingBundle\Entity\Visitor $visitor
     */
    public function removeVisitor(\OC\BookingBundle\Entity\Visitor $visitor)
    {
        $this->visitors->removeElement($visitor);
    }

    /**
     * Get visitors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitors()
    {
        return $this->visitors;
    }
}
