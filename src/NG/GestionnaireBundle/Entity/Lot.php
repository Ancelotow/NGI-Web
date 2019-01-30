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
     * @var int
     *
     * @ORM\Column(name="etage", type="integer")
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
}

