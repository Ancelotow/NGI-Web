<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Copropriete
 *
 * @ORM\Table(name="copropriete")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\CoproprieteRepository")
 */
class Copropriete
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
     * @ORM\Column(name="code", type="string", length=10)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=150)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="lattitude", type="string", length=50)
     */
    private $lattitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=50)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=300)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Ville")
     */
    private $ville;


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
     * @return Copropriete
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Copropriete
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param \NG\GestionnaireBundle\Entity\Ville $ville
     *
     * @return Copropriete
     */
    public function setVille(\NG\GestionnaireBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \NG\GestionnaireBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set lattitude
     *
     * @param float $lattitude
     *
     * @return Copropriete
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude
     *
     * @return float
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Copropriete
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Copropriete
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
