<?php

namespace NG\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeLot
 *
 * @ORM\Table(name="type_lot")
 * @ORM\Entity(repositoryClass="NG\AdministrateurBundle\Repository\TypeLotRepository")
 */
class TypeLot
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;


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
     * @return TypeLot
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
}

