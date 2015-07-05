<?php

namespace Lcb\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 */
class Fiche
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
     * @var string
     */
    private $prenom;

    /**
     * @var \DateTime
     */
    private $ajout;

    /**
     * @var string
     */
    private $numéro;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $entreprise;

    /**
     * @var string
     */
    private $annotations;


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
     * @return Fiche
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
     * Set prenom
     *
     * @param string $prenom
     * @return Fiche
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ajout
     *
     * @param \DateTime $ajout
     * @return Fiche
     */
    public function setAjout($ajout)
    {
        $this->ajout = $ajout;

        return $this;
    }

    /**
     * Get ajout
     *
     * @return \DateTime 
     */
    public function getAjout()
    {
        return $this->ajout;
    }

    /**
     * Set numéro
     *
     * @param string $numéro
     * @return Fiche
     */
    public function setNuméro($numéro)
    {
        $this->numéro = $numéro;

        return $this;
    }

    /**
     * Get numéro
     *
     * @return string 
     */
    public function getNuméro()
    {
        return $this->numéro;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Fiche
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     * @return Fiche
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set annotations
     *
     * @param string $annotations
     * @return Fiche
     */
    public function setAnnotations($annotations)
    {
        $this->annotations = $annotations;

        return $this;
    }

    /**
     * Get annotations
     *
     * @return string 
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }
}
