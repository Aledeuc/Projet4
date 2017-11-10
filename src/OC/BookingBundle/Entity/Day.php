<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table(name="day")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\DayRepository")
 */
class Day
{

    /**
    * @ORM\OneToMany(targetEntity="OC\BookingBundle\Entity\Bookingform", mappedBy="day")
    */
    private $bookingforms; 

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
     * @ORM\Column(name="date", type="date", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;


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
     * Set date
     *
     * @param string $date
     *
     * @return Day
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Day
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bookingforms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bookingform
     *
     * @param \OC\BookingBundle\Entity\Bookingform $bookingform
     *
     * @return Day
     */
    public function addBookingform(\OC\BookingBundle\Entity\Bookingform $bookingform)
    {
        $this->bookingforms[] = $bookingform;

        return $this;
    }

    /**
     * Remove bookingform
     *
     * @param \OC\BookingBundle\Entity\Bookingform $bookingform
     */
    public function removeBookingform(\OC\BookingBundle\Entity\Bookingform $bookingform)
    {
        $this->bookingforms->removeElement($bookingform);
    }

    /**
     * Get bookingforms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBookingforms()
    {
        return $this->bookingforms;
    }
}
