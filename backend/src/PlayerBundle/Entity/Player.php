<?php

namespace PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="PlayerBundle\Repository\PlayerRepository")
 */
class Player
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
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime")
     */
    private $birthday;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer")
     */
    private $experience;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sshash", type="string", length=255, unique=true)
     */
    private $sshash;

    /**
     * @var int
     *
     * @ORM\Column(name="educationLevel", type="integer")
     */
    private $educationLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="armor", type="integer")
     */
    private $armor;

    /**
     * @var int
     *
     * @ORM\Column(name="health", type="integer")
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="shield", type="integer")
     */
    private $shield;

    /**
     * @var int
     *
     * @ORM\Column(name="money", type="integer")
     */
    private $money;

    /**
     * @var string
     *
     * @ORM\Column(name="abilities", type="string", length=255)
     */
    private $abilities;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="string", length=255)
     */
    private $actions;

    /**
     * @var string
     *
     * @ORM\Column(name="alignment", type="string", length=255)
     */
    private $alignment;

    /**
     * @var string
     *
     * @ORM\Column(name="assets", type="string", length=255)
     */
    private $assets;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="inventory", type="string", length=255)
     */
    private $inventory;

    /**
     * @var string
     *
     * @ORM\Column(name="modifiers", type="string", length=255)
     */
    private $modifiers;

    /**
     * @var string
     *
     * @ORM\Column(name="skillTree", type="string", length=255)
     */
    private $skillTree;

    /**
     * @var string
     *
     * @ORM\Column(name="traits", type="string", length=255)
     */
    private $traits;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="npc", type="string", length=255)
     */
    private $npc;


    public function getId()
    {
        return $this->id;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSshash($sshash)
    {
        $this->sshash = $sshash;

        return $this;
    }

    public function getSshash()
    {
        return $this->sshash;
    }

    public function setEducationLevel($educationLevel)
    {
        $this->educationLevel = $educationLevel;

        return $this;
    }

    public function getEducationLevel()
    {
        return $this->educationLevel;
    }

    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    public function getArmor()
    {
        return $this->armor;
    }

    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;

        return $this;
    }

    public function getAbilities()
    {
        return $this->abilities;
    }

    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function getAlignment()
    {
        return $this->alignment;
    }

    public function setAssets($assets)
    {
        $this->assets = $assets;

        return $this;
    }

    public function getAssets()
    {
        return $this->assets;
    }

    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setInventory($inventory)
    {
        $this->inventory = $inventory;

        return $this;
    }

    public function getInventory()
    {
        return $this->inventory;
    }

    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    public function getModifiers()
    {
        return $this->modifiers;
    }

    public function setSkillTree($skillTree)
    {
        $this->skillTree = $skillTree;

        return $this;
    }

    public function getSkillTree()
    {
        return $this->skillTree;
    }

    public function setTraits($traits)
    {
        $this->traits = $traits;

        return $this;
    }

    public function getTraits()
    {
        return $this->traits;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setNpc($npc)
    {
        $this->npc = $npc;

        return $this;
    }

    public function getNpc()
    {
        return $this->npc;
    }
}
