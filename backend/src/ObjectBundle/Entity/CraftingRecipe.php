<?php

namespace ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraftingRecipe
 *
 * @ORM\Table(name="crafting_recipe")
 * @ORM\Entity(repositoryClass="ObjectBundle\Repository\CraftingRecipeRepository")
 */
class CraftingRecipe
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
     * @ORM\Column(name="slot1", type="string", length=255)
     */
    private $slot1;

    /**
     * @var string
     *
     * @ORM\Column(name="slot2", type="string", length=255)
     */
    private $slot2;

    /**
     * @var string
     *
     * @ORM\Column(name="slot3", type="string", length=255)
     */
    private $slot3;

    /**
     * @var string
     *
     * @ORM\Column(name="slot4", type="string", length=255)
     */
    private $slot4;

    /**
     * @var string
     *
     * @ORM\Column(name="slot5", type="string", length=255)
     */
    private $slot5;

    /**
     * @var string
     *
     * @ORM\Column(name="slot6", type="string", length=255)
     */
    private $slot6;

    /**
     * @var string
     *
     * @ORM\Column(name="slot7", type="string", length=255)
     */
    private $slot7;

    /**
     * @var string
     *
     * @ORM\Column(name="slot8", type="string", length=255)
     */
    private $slot8;

    /**
     * @var string
     *
     * @ORM\Column(name="slot9", type="string", length=255)
     */
    private $slot9;


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
     * Set slot1
     *
     * @param string $slot1
     *
     * @return CraftingRecipe
     */
    public function setSlot1($slot1)
    {
        $this->slot1 = $slot1;

        return $this;
    }

    /**
     * Get slot1
     *
     * @return string
     */
    public function getSlot1()
    {
        return $this->slot1;
    }

    /**
     * Set slot2
     *
     * @param string $slot2
     *
     * @return CraftingRecipe
     */
    public function setSlot2($slot2)
    {
        $this->slot2 = $slot2;

        return $this;
    }

    /**
     * Get slot2
     *
     * @return string
     */
    public function getSlot2()
    {
        return $this->slot2;
    }

    /**
     * Set slot3
     *
     * @param string $slot3
     *
     * @return CraftingRecipe
     */
    public function setSlot3($slot3)
    {
        $this->slot3 = $slot3;

        return $this;
    }

    /**
     * Get slot3
     *
     * @return string
     */
    public function getSlot3()
    {
        return $this->slot3;
    }

    /**
     * Set slot4
     *
     * @param string $slot4
     *
     * @return CraftingRecipe
     */
    public function setSlot4($slot4)
    {
        $this->slot4 = $slot4;

        return $this;
    }

    /**
     * Get slot4
     *
     * @return string
     */
    public function getSlot4()
    {
        return $this->slot4;
    }

    /**
     * Set slot5
     *
     * @param string $slot5
     *
     * @return CraftingRecipe
     */
    public function setSlot5($slot5)
    {
        $this->slot5 = $slot5;

        return $this;
    }

    /**
     * Get slot5
     *
     * @return string
     */
    public function getSlot5()
    {
        return $this->slot5;
    }

    /**
     * Set slot6
     *
     * @param string $slot6
     *
     * @return CraftingRecipe
     */
    public function setSlot6($slot6)
    {
        $this->slot6 = $slot6;

        return $this;
    }

    /**
     * Get slot6
     *
     * @return string
     */
    public function getSlot6()
    {
        return $this->slot6;
    }

    /**
     * Set slot7
     *
     * @param string $slot7
     *
     * @return CraftingRecipe
     */
    public function setSlot7($slot7)
    {
        $this->slot7 = $slot7;

        return $this;
    }

    /**
     * Get slot7
     *
     * @return string
     */
    public function getSlot7()
    {
        return $this->slot7;
    }

    /**
     * Set slot8
     *
     * @param string $slot8
     *
     * @return CraftingRecipe
     */
    public function setSlot8($slot8)
    {
        $this->slot8 = $slot8;

        return $this;
    }

    /**
     * Get slot8
     *
     * @return string
     */
    public function getSlot8()
    {
        return $this->slot8;
    }

    /**
     * Set slot9
     *
     * @param string $slot9
     *
     * @return CraftingRecipe
     */
    public function setSlot9($slot9)
    {
        $this->slot9 = $slot9;

        return $this;
    }

    /**
     * Get slot9
     *
     * @return string
     */
    public function getSlot9()
    {
        return $this->slot9;
    }
}

