<?php

namespace Lcb\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meuble
 */
class Meuble
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var integer
     */
    private $nbPlaques;


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
     * Set nom
     *
     * @param string $nom
     * @return Meuble
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
     * Set prix
     *
     * @param integer $prix
     * @return Meuble
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Meuble
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nbPlaques
     *
     * @param integer $nbPlaques
     * @return Meuble
     */
    public function setNbPlaques($nbPlaques)
    {
        $this->nbPlaques = $nbPlaques;

        return $this;
    }

    /**
     * Get nbPlaques
     *
     * @return integer 
     */
    public function getNbPlaques()
    {
        return $this->nbPlaques;
    }
}
