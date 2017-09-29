<?php

namespace OC\BookingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Admission
 *
 * @ORM\Table(name="admission")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\AdmissionRepository")
 */
class Admission
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
     * @ORM\Column(name="bookingDate", type="datetime")
     */
    private $bookingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="nbVisitor", type="string", length=255)
     */
    private $nbVisitor;

    /**
     * @var string
     *
     * @ORM\Column(name="bookingType", type="text")
     */
    private $bookingType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="text", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text")
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reduce", type="string", length=255)
     */
    private $reduce;

    public function __construct()
    {
        $this->bookingDate = new \Datetime();
        $this->categories  = new ArrayCollection();
        $this->applications = new ArrayCollection();
    }

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
     * @param \DateTime $bookingDate
     *
     * @return Admission
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
     * @return Admission
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
     * Set bookingType
     *
     * @param string $bookingType
     *
     * @return Admission
     */
    public function setBookingType($bookingType)
    {
        $this->bookingType = $bookingType;

        return $this;
    }

    /**
     * Get bookingType
     *
     * @return string
     */
    public function getBookingType()
    {
        return $this->bookingType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Admission
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
     * @return Admission
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
     * Set country
     *
     * @param string $country
     *
     * @return Admission
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Admission
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set reduce
     *
     * @param string $reduce
     *
     * @return Admission
     */
    public function setReduce($reduce)
    {
        $this->reduce = $reduce;

        return $this;
    }

    /**
     * Get reduce
     *
     * @return string
     */
    public function getReduce()
    {
        return $this->reduce;
    }
}

