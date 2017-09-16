<?php

namespace ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="ObjectBundle\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="weapon", type="string", length=255)
     */
    private $weapon;

    /**
     * @var string
     *
     * @ORM\Column(name="consumable", type="string", length=255)
     */
    private $consumable;

    /**
     * @var string
     *
     * @ORM\Column(name="weaponAttachment", type="string", length=255)
     */
    private $weaponAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="equipment", type="string", length=255)
     */
    private $equipment;

    /**
     * @var string
     *
     * @ORM\Column(name="gear", type="string", length=255)
     */
    private $gear;

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
     * Set name
     *
     * @param string $name
     *
     * @return Item
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
     * Set weapon
     *
     * @param string $weapon
     *
     * @return Item
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get weapon
     *
     * @return string
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set consumable
     *
     * @param string $consumable
     *
     * @return Item
     */
    public function setConsumable($consumable)
    {
        $this->consumable = $consumable;

        return $this;
    }

    /**
     * Get consumable
     *
     * @return string
     */
    public function getConsumable()
    {
        return $this->consumable;
    }

    /**
     * Set weaponAttachment
     *
     * @param string $weaponAttachment
     *
     * @return Item
     */
    public function setWeaponAttachment($weaponAttachment)
    {
        $this->weaponAttachment = $weaponAttachment;

        return $this;
    }

    /**
     * Get weaponAttachment
     *
     * @return string
     */
    public function getWeaponAttachment()
    {
        return $this->weaponAttachment;
    }

    /**
     * Set equipment
     *
     * @param string $equipment
     *
     * @return Item
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return string
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set gear
     *
     * @param string $gear
     *
     * @return Item
     */
    public function setGear($gear)
    {
        $this->gear = $gear;

        return $this;
    }

    /**
     * Get gear
     *
     * @return string
     */
    public function getGear()
    {
        return $this->gear;
    }
}
