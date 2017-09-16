<?php

namespace PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traits
 *
 * @ORM\Table(name="traits")
 * @ORM\Entity(repositoryClass="PlayerBundle\Repository\TraitsRepository")
 */
class Traits
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
     * @var int
     *
     * @ORM\Column(name="inteligence", type="integer")
     */
    private $inteligence;

    /**
     * @var int
     *
     * @ORM\Column(name="dexerity", type="integer")
     */
    private $dexerity;

    /**
     * @var int
     *
     * @ORM\Column(name="wisdom", type="integer")
     */
    private $wisdom;

    /**
     * @var int
     *
     * @ORM\Column(name="charisma", type="integer")
     */
    private $charisma;

    /**
     * @var int
     *
     * @ORM\Column(name="luck", type="integer")
     */
    private $luck;

    /**
     * @var int
     *
     * @ORM\Column(name="perception", type="integer")
     */
    private $perception;


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
     * Set inteligence
     *
     * @param integer $inteligence
     *
     * @return Traits
     */
    public function setInteligence($inteligence)
    {
        $this->inteligence = $inteligence;

        return $this;
    }

    /**
     * Get inteligence
     *
     * @return int
     */
    public function getInteligence()
    {
        return $this->inteligence;
    }

    /**
     * Set dexerity
     *
     * @param integer $dexerity
     *
     * @return Traits
     */
    public function setDexerity($dexerity)
    {
        $this->dexerity = $dexerity;

        return $this;
    }

    /**
     * Get dexerity
     *
     * @return int
     */
    public function getDexerity()
    {
        return $this->dexerity;
    }

    /**
     * Set wisdom
     *
     * @param integer $wisdom
     *
     * @return Traits
     */
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;

        return $this;
    }

    /**
     * Get wisdom
     *
     * @return int
     */
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * Set charisma
     *
     * @param integer $charisma
     *
     * @return Traits
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;

        return $this;
    }

    /**
     * Get charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * Set luck
     *
     * @param integer $luck
     *
     * @return Traits
     */
    public function setLuck($luck)
    {
        $this->luck = $luck;

        return $this;
    }

    /**
     * Get luck
     *
     * @return int
     */
    public function getLuck()
    {
        return $this->luck;
    }

    /**
     * Set perception
     *
     * @param integer $perception
     *
     * @return Traits
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;

        return $this;
    }

    /**
     * Get perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->perception;
    }
}

