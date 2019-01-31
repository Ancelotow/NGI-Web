<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lot
 *
 * @ORM\Table(name="lot")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\LotRepository")
 */
class Lot
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
     * @var int
     *
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="etage", type="string")
     */
    private $etage;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float")
     */
    private $surface;

    /**
     * @var float
     *
     * @ORM\Column(name="carezze", type="float")
     */
    private $carezze;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Proprietaire")
     */
    private $proprietaire;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Copropriete")
     */
    private $copro;

    /**
     * @ORM\ManyToOne(targetEntity="NG\AdministrateurBundle\Entity\TypeLot")
     */
    private $typeLot;


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
     * Set num
     *
     * @param integer $num
     *
     * @return Lot
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set etage
     *
     * @param integer $etage
     *
     * @return Lot
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return int
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set surface
     *
     * @param string $surface
     *
     * @return Lot
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set carezze
     *
     * @param string $carezze
     *
     * @return Lot
     */
    public function setCarezze($carezze)
    {
        $this->carezze = $carezze;

        return $this;
    }

    /**
     * Get carezze
     *
     * @return string
     */
    public function getCarezze()
    {
        return $this->carezze;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Lot
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set proprietaire
     *
     * @param \NG\GestionnaireBundle\Entity\Proprietaire $proprietaire
     *
     * @return Lot
     */
    public function setProprietaire(\NG\GestionnaireBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \NG\GestionnaireBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set typeLot
     *
     * @param \NG\AdministrateurBundle\Entity\TypeLot $typeLot
     *
     * @return Lot
     */
    public function setTypeLot(\NG\AdministrateurBundle\Entity\TypeLot $typeLot = null)
    {
        $this->typeLot = $typeLot;

        return $this;
    }

    /**
     * Get typeLot
     *
     * @return \NG\AdministrateurBundle\Entity\TypeLot
     */
    public function getTypeLot()
    {
        return $this->typeLot;
    }

    /**
     * Set copro
     *
     * @param \NG\GestionnaireBundle\Entity\Copropriete $copro
     *
     * @return Lot
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
