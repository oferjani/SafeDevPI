<?php

namespace RefugeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refugee
 *
 * @ORM\Table(name="refugee")
 * @ORM\Entity(repositoryClass="RefugeeBundle\Repository\RefugeeRepository")
 */
class Refugee
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
     * @var
     * @ORM\ManyToOne(targetEntity="Benevole")
     * @ORM\JoinColumn(name="benevole_id",referencedColumnName="id")
     */
    private $benevole;
    /**
     * @var string
     *
     * @ORM\Column(name="refFirstName", type="string", length=255 , nullable=true)
     */
    private $refFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="refLastName", type="string", length=255 , nullable=true)
     */
    private $refLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;


    /**
     * @var int
     *
     * @ORM\Column(name="phoneNumber", type="integer",nullable=true)
     */
    private $phoneNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="needs", type="string", length=255)
     */
    private $needs;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVolunteer", type="boolean",nullable=true)
     */
    private $isVolunteer;

    /**
     * @var bool
     *
     * @ORM\Column(name="readyToJoin", type="boolean",nullable=true)
     */
    private $readyToJoin;


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
     * Set refFirstName
     *
     * @param string $refFirstName
     *
     * @return Refugee
     */
    public function setRefFirstName($refFirstName)
    {
        $this->refFirstName = $refFirstName;

        return $this;
    }

    /**
     * Get refFirstName
     *
     * @return string
     */
    public function getRefFirstName()
    {
        return $this->refFirstName;
    }

    /**
     * Set refLastName
     *
     * @param string $refLastName
     *
     * @return Refugee
     */
    public function setRefLastName($refLastName)
    {
        $this->refLastName = $refLastName;

        return $this;
    }

    /**
     * Get refLastName
     *
     * @return string
     */
    public function getRefLastName()
    {
        return $this->refLastName;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Refugee
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Refugee
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Refugee
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set needs
     *
     * @param string $needs
     *
     * @return Refugee
     */
    public function setNeeds($needs)
    {
        $this->needs = $needs;

        return $this;
    }

    /**
     * Get needs
     *
     * @return string
     */
    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Refugee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Refugee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Refugee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Refugee
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return int
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set isVolunteer
     *
     * @param boolean $isVolunteer
     *
     * @return Refugee
     */
    public function setIsVolunteer($isVolunteer)
    {
        $this->isVolunteer = $isVolunteer;

        return $this;
    }

    /**
     * Get isVolunteer
     *
     * @return bool
     */
    public function getIsVolunteer()
    {
        return $this->isVolunteer;
    }

    /**
     * Set readyToJoin
     *
     * @param boolean $readyToJoin
     *
     * @return Refugee
     */
    public function setReadyToJoin($readyToJoin)
    {
        $this->readyToJoin = $readyToJoin;

        return $this;
    }

    /**
     * Get readyToJoin
     *
     * @return bool
     */
    public function getReadyToJoin()
    {
        return $this->readyToJoin;
    }
    /**
     * @return mixed
     */
    public function getBenevole()
    {
        return $this->benevole;
    }

    /**
     * @return mixed $benevole
     */
    public function setBenevole($benevole)
    {
        $this->benevole = $benevole;

        return $this;
    }
}

