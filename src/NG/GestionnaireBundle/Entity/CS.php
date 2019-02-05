<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CS
 *
 * @ORM\Table(name="c_s")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\CSRepository")
 */
class CS
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
     * @ORM\Column(name="ref", type="string", length=50)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=100)
     */
    private $pdf;

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
     * @return CS
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
     * Set date
     *
     * @param string $date
     *
     * @return CS
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
     * @return CS
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
     * Set copro
     *
     * @param \NG\GestionnaireBundle\Entity\Copropriete $copro
     *
     * @return CS
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
