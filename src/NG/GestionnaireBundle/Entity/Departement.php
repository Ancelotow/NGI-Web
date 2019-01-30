<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\DepartementRepository")
 */
class Departement
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=2)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Region")
     */
    private $region;

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Departement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Departement
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
     * Set region
     *
     * @param \NG\GestionnaireBundle\Entity\Region $region
     *
     * @return Departement
     */
    public function setRegion(\NG\GestionnaireBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \NG\GestionnaireBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDept()
    {
        return $this->code." ".$this->getNom();
    }
}
