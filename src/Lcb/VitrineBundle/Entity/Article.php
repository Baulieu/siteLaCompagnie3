<?php

namespace Lcb\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{

    public function __construct()
    {
        $this->parties = ["", "", "", "", ""];
        $this->images = ["", "", "", "", "", ""];
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var array
     */
    private $parties;

    /**
     * @var array
     */
    private $images;


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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set parties
     *
     * @param array $parties
     * @return Article
     */
    public function setParties($parties)
    {
        $this->parties = $parties;

        return $this;
    }

    /**
     * Get parties
     *
     * @return array 
     */
    public function getParties()
    {
        return $this->parties;
    }

    /**
     * Set images
     *
     * @param array $images
     * @return Article
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array 
     */
    public function getImages()
    {
        return $this->images;
    }
}
