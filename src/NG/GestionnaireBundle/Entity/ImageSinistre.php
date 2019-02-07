<?php

namespace NG\GestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageSinistre
 *
 * @ORM\Table(name="image_sinistre")
 * @ORM\Entity(repositoryClass="NG\GestionnaireBundle\Repository\ImageSinistreRepository")
 */
class ImageSinistre
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="NG\GestionnaireBundle\Entity\Sinistre")
     */
    private $sinistre;


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
     * Set url
     *
     * @param string $url
     *
     * @return ImageSinistre
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set sinistre
     *
     * @param \NG\GestionnaireBundle\Entity\Sinistre $sinistre
     *
     * @return ImageSinistre
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
}
