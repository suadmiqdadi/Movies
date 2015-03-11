<?php

namespace Project\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 */
class Actor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var integer
     */
    private $movies_id;

    /**
     * @var string
     */
    private $genre;


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
     * Set name
     *
     * @param string $name
     * @return Actor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Actor
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set movies_id
     *
     * @param integer $moviesId
     * @return Actor
     */
    public function setMoviesId($moviesId)
    {
        $this->movies_id = $moviesId;

        return $this;
    }

    /**
     * Get movies_id
     *
     * @return integer 
     */
    public function getMoviesId()
    {
        return $this->movies_id;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Actor
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }
	
	public function __toString()
{
    return $this->name;
}
}
