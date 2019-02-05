<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AG
 *
 * @ORM\Table(name="a_g")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\AGRepository")
 */
class AG
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
     * @ORM\Column(name="ref", type="string", length=100)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="nbDecision", type="integer")
     */
    private $nbDecision;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255)
     */
    private $pdf;

    /**
     * @ORM\ManyToMany(targetEntity="NG\GestionnaireBundle\Entity\Habitant", cascade={"persist"})
     */
    private $habitants;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Copropriete")
     */
    private $copro;


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
     * Set ref
     *
     * @param string $ref
     *
     * @return AG
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set nbDecision
     *
     * @param string $nbDecision
     *
     * @return AG
     */
    public function setNbDecision($nbDecision)
    {
        $this->nbDecision = $nbDecision;

        return $this;
    }

    /**
     * Get nbDecision
     *
     * @return string
     */
    public function getNbDecision()
    {
        return $this->nbDecision;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return AG
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
     * Set pdf
     *
     * @param string $pdf
     *
     * @return AG
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add habitant
     *
     * @param \NG\GestionnaireBundle\Entity\Habitant $habitant
     *
     * @return AG
     */
    public function addHabitant(\NG\GestionnaireBundle\Entity\Habitant $habitant)
    {
        $this->habitants[] = $habitant;

        return $this;
    }

    /**
     * Remove habitant
     *
     * @param \NG\GestionnaireBundle\Entity\Habitant $habitant
     */
    public function removeHabitant(\NG\GestionnaireBundle\Entity\Habitant $habitant)
    {
        $this->habitants->removeElement($habitant);
    }

    /**
     * Get habitants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitants()
    {
        return $this->habitants;
    }

    /**
     * Set copro
     *
     * @param \NG\GestionnaireBundle\Entity\Copropriete $copro
     *
     * @return AG
     */
    public function setCopro(\NG\GestionnaireBundle\Entity\Copropriete $copro = null)
    {
        $this->copro = $copro;

        return $this;
    }

    /**
     * Get copro
     *
     * @return \NG\GestionnaireBundle\Entity\Copropriete
     */
    public function getCopro()
    {
        return $this->copro;
    }
}
