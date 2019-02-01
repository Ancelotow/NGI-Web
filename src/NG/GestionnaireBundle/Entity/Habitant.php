<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitant
 *
 * @ORM\Table(name="habitant")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\HabitantRepository")
 */
class Habitant
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \string
     *
     * @ORM\Column(name="dateEmmenagement", type="string", length=50)
     */
    private $dateEmmenagement;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="membreCS", type="boolean")
     */
    private $membreCS;

    /**
     * @var bool
     *
     * @ORM\Column(name="presidentCS", type="boolean")
     */
    private $presidentCS;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Lot")
     */
    private $lot;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Habitant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Habitant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateEmmenagement
     *
     * @param \DateTime $dateEmmenagement
     *
     * @return Habitant
     */
    public function setDateEmmenagement($dateEmmenagement)
    {
        $this->dateEmmenagement = $dateEmmenagement;

        return $this;
    }

    /**
     * Get dateEmmenagement
     *
     * @return \DateTime
     */
    public function getDateEmmenagement()
    {
        return $this->dateEmmenagement;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Habitant
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Habitant
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
     * Set membreCS
     *
     * @param boolean $membreCS
     *
     * @return Habitant
     */
    public function setMembreCS($membreCS)
    {
        $this->membreCS = $membreCS;

        return $this;
    }

    /**
     * Get membreCS
     *
     * @return bool
     */
    public function getMembreCS()
    {
        return $this->membreCS;
    }

    /**
     * Set presidentCS
     *
     * @param boolean $presidentCS
     *
     * @return Habitant
     */
    public function setPresidentCS($presidentCS)
    {
        $this->presidentCS = $presidentCS;

        return $this;
    }

    /**
     * Get presidentCS
     *
     * @return bool
     */
    public function getPresidentCS()
    {
        return $this->presidentCS;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Habitant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set lot
     *
     * @param \NG\GestionnaireBundle\Entity\Lot $lot
     *
     * @return Habitant
     */
    public function setLot(\NG\GestionnaireBundle\Entity\Lot $lot = null)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return \NG\GestionnaireBundle\Entity\Lot
     */
    public function getLot()
    {
        return $this->lot;
    }
}
