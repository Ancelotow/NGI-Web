<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SinEnt
 *
 * @ORM\Table(name="sin_ent")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\SinEntRepository")
 */
class SinEnt
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
     * @var float
     *
     * @ORM\Column(name="cout", type="float", length=255)
     */
    private $cout;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Sinistre")
     */
    private $sinistre;

    /**
     * @ORM\ManyToOne(targetEntity="NG\AdministrateurBundle\Entity\Entreprise")
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
     * Set cout
     *
     * @param string $cout
     *
     * @return SinEnt
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set sinistre
     *
     * @param \NG\GestionnaireBundle\Entity\Sinistre $sinistre
     *
     * @return SinEnt
     */
    public function setSinistre(\NG\GestionnaireBundle\Entity\Sinistre $sinistre = null)
    {
        $this->sinistre = $sinistre;

        return $this;
    }

    /**
     * Get sinistre
     *
     * @return \NG\GestionnaireBundle\Entity\Sinistre
     */
    public function getSinistre()
    {
        return $this->sinistre;
    }

    /**
     * Set entreprise
     *
     * @param \NG\AdministrateurBundle\Entity\Entreprise $entreprise
     *
     * @return SinEnt
     */
    public function setEntreprise(\NG\AdministrateurBundle\Entity\Entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \NG\AdministrateurBundle\Entity\Entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
