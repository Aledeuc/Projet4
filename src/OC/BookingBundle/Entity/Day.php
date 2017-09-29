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
     * @ORM\Column(name="date", type="datetime", unique=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var bool
     *
     * @ORM\Column(name="complet", type="boolean")
     */
    private $complet;


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
     * @param \DateTime $date
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
     * @return \DateTime
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
     * Set complet
     *
     * @param boolean $complet
     *
     * @return Day
     */
    public function setComplet($complet)
    {
        $this->complet = $complet;

        return $this;
    }

    /**
     * Get complet
     *
     * @return bool
     */
    public function getComplet()
    {
        return $this->complet;
    }
}

