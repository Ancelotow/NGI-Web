<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use NG\AdministrateurBundle\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="NG\AdministrateurBundle\Entity\Utilisateur")
     */
    protected $utilisateur;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set utilisateur
     *
     * @param \NG\AdministrateurBundle\Entity\Utilisateur $utilisateur
     *
     * @return User
     */
    public function setUtilisateur(\NG\AdministrateurBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \NG\AdministrateurBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function getNom(){
        $nom = $this->utilisateur->getNom();
        $sexe = null;
        if($this->utilisateur->getSexe() == 1){
            $sexe = "M.";
        }
        else{
            $sexe = "Mme.";
        }
        return $sexe." ".$nom;
    }

    public function getPrenom(){
        return $this->utilisateur->getPrenom();
    }

    public function getTel(){
        return $this->utilisateur->getTel();
    }

    public function getDDN(){
        return $this->utilisateur->getDateNaissance();
    }

    public function getPoste(){
        return $this->utilisateur->getPoste()->getNom();
    }

}
