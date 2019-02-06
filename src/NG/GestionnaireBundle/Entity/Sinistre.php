<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sinistre
 *
 * @ORM\Table(name="sinistre")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\SinistreRepository")
 */
class Sinistre
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
     * @ORM\Column(name="code", type="string", length=100)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=150)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Lot")
     */
    private $lot;

    /**
     * @ORM\ManyToMany(targetEntity="NG\AdministrateurBundle\Entity\Entreprise")
     */
    private $entreprise;


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
     * Set code
     *
     * @param string $code
     *
     * @return Sinistre
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Sinistre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Sinistre
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
     * Constructor
     */
    public function __construct()
    {
        $this->entreprise = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set lot
     *
     * @param \NG\GestionnaireBundle\Entity\Lot $lot
     *
     * @return Sinistre
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

    /**
     * Add entreprise
     *
     * @param \NG\AdministrateurBundle\Entity\Entreprise $entreprise
     *
     * @return Sinistre
     */
    public function addEntreprise(\NG\AdministrateurBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise[] = $entreprise;

        return $this;
    }

    /**
     * Remove entreprise
     *
     * @param \NG\AdministrateurBundle\Entity\Entreprise $entreprise
     */
    public function removeEntreprise(\NG\AdministrateurBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise->removeElement($entreprise);
    }

    /**
     * Get entreprise
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
