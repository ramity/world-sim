<?php

namespace PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillTree
 *
 * @ORM\Table(name="skill_tree")
 * @ORM\Entity(repositoryClass="PlayerBundle\Repository\SkillTreeRepository")
 */
class SkillTree
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
     * @ORM\Column(name="taming", type="string", length=255)
     */
    private $taming;

    /**
     * @var string
     *
     * @ORM\Column(name="artistic", type="string", length=255)
     */
    private $artistic;

    /**
     * @var string
     *
     * @ORM\Column(name="construction", type="string", length=255)
     */
    private $construction;

    /**
     * @var string
     *
     * @ORM\Column(name="cooking", type="string", length=255)
     */
    private $cooking;

    /**
     * @var string
     *
     * @ORM\Column(name="crafting", type="string", length=255)
     */
    private $crafting;

    /**
     * @var string
     *
     * @ORM\Column(name="farming", type="string", length=255)
     */
    private $farming;

    /**
     * @var string
     *
     * @ORM\Column(name="medicine", type="string", length=255)
     */
    private $medicine;

    /**
     * @var string
     *
     * @ORM\Column(name="chemistry", type="string", length=255)
     */
    private $chemistry;

    /**
     * @var string
     *
     * @ORM\Column(name="logic", type="string", length=255)
     */
    private $logic;

    /**
     * @var string
     *
     * @ORM\Column(name="melee", type="string", length=255)
     */
    private $melee;

    /**
     * @var string
     *
     * @ORM\Column(name="mining", type="string", length=255)
     */
    private $mining;

    /**
     * @var string
     *
     * @ORM\Column(name="shooting", type="string", length=255)
     */
    private $shooting;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="string", length=255)
     */
    private $social;

    /**
     * @var string
     *
     * @ORM\Column(name="agility", type="string", length=255)
     */
    private $agility;

    /**
     * @var string
     *
     * @ORM\Column(name="attack", type="string", length=255)
     */
    private $attack;

    /**
     * @var string
     *
     * @ORM\Column(name="constitution", type="string", length=255)
     */
    private $constitution;

    /**
     * @var string
     *
     * @ORM\Column(name="defense", type="string", length=255)
     */
    private $defense;

    /**
     * @var string
     *
     * @ORM\Column(name="fishing", type="string", length=255)
     */
    private $fishing;

    /**
     * @var string
     *
     * @ORM\Column(name="firemaking", type="string", length=255)
     */
    private $firemaking;

    /**
     * @var string
     *
     * @ORM\Column(name="hunter", type="string", length=255)
     */
    private $hunter;

    /**
     * @var string
     *
     * @ORM\Column(name="engineering", type="string", length=255)
     */
    private $engineering;

    /**
     * @var string
     *
     * @ORM\Column(name="magic", type="string", length=255)
     */
    private $magic;

    /**
     * @var string
     *
     * @ORM\Column(name="prayer", type="string", length=255)
     */
    private $prayer;

    /**
     * @var string
     *
     * @ORM\Column(name="ranged", type="string", length=255)
     */
    private $ranged;

    /**
     * @var string
     *
     * @ORM\Column(name="slayer", type="string", length=255)
     */
    private $slayer;

    /**
     * @var string
     *
     * @ORM\Column(name="smithing", type="string", length=255)
     */
    private $smithing;

    /**
     * @var string
     *
     * @ORM\Column(name="strength", type="string", length=255)
     */
    private $strength;

    /**
     * @var string
     *
     * @ORM\Column(name="summoning", type="string", length=255)
     */
    private $summoning;

    /**
     * @var string
     *
     * @ORM\Column(name="thieving", type="string", length=255)
     */
    private $thieving;

    /**
     * @var string
     *
     * @ORM\Column(name="woodcutting", type="string", length=255)
     */
    private $woodcutting;


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
     * Set taming
     *
     * @param string $taming
     *
     * @return SkillTree
     */
    public function setTaming($taming)
    {
        $this->taming = $taming;

        return $this;
    }

    /**
     * Get taming
     *
     * @return string
     */
    public function getTaming()
    {
        return $this->taming;
    }

    /**
     * Set artistic
     *
     * @param string $artistic
     *
     * @return SkillTree
     */
    public function setArtistic($artistic)
    {
        $this->artistic = $artistic;

        return $this;
    }

    /**
     * Get artistic
     *
     * @return string
     */
    public function getArtistic()
    {
        return $this->artistic;
    }

    /**
     * Set construction
     *
     * @param string $construction
     *
     * @return SkillTree
     */
    public function setConstruction($construction)
    {
        $this->construction = $construction;

        return $this;
    }

    /**
     * Get construction
     *
     * @return string
     */
    public function getConstruction()
    {
        return $this->construction;
    }

    /**
     * Set cooking
     *
     * @param string $cooking
     *
     * @return SkillTree
     */
    public function setCooking($cooking)
    {
        $this->cooking = $cooking;

        return $this;
    }

    /**
     * Get cooking
     *
     * @return string
     */
    public function getCooking()
    {
        return $this->cooking;
    }

    /**
     * Set crafting
     *
     * @param string $crafting
     *
     * @return SkillTree
     */
    public function setCrafting($crafting)
    {
        $this->crafting = $crafting;

        return $this;
    }

    /**
     * Get crafting
     *
     * @return string
     */
    public function getCrafting()
    {
        return $this->crafting;
    }

    /**
     * Set farming
     *
     * @param string $farming
     *
     * @return SkillTree
     */
    public function setFarming($farming)
    {
        $this->farming = $farming;

        return $this;
    }

    /**
     * Get farming
     *
     * @return string
     */
    public function getFarming()
    {
        return $this->farming;
    }

    /**
     * Set medicine
     *
     * @param string $medicine
     *
     * @return SkillTree
     */
    public function setMedicine($medicine)
    {
        $this->medicine = $medicine;

        return $this;
    }

    /**
     * Get medicine
     *
     * @return string
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * Set chemistry
     *
     * @param string $chemistry
     *
     * @return SkillTree
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;

        return $this;
    }

    /**
     * Get chemistry
     *
     * @return string
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * Set logic
     *
     * @param string $logic
     *
     * @return SkillTree
     */
    public function setLogic($logic)
    {
        $this->logic = $logic;

        return $this;
    }

    /**
     * Get logic
     *
     * @return string
     */
    public function getLogic()
    {
        return $this->logic;
    }

    /**
     * Set melee
     *
     * @param string $melee
     *
     * @return SkillTree
     */
    public function setMelee($melee)
    {
        $this->melee = $melee;

        return $this;
    }

    /**
     * Get melee
     *
     * @return string
     */
    public function getMelee()
    {
        return $this->melee;
    }

    /**
     * Set mining
     *
     * @param string $mining
     *
     * @return SkillTree
     */
    public function setMining($mining)
    {
        $this->mining = $mining;

        return $this;
    }

    /**
     * Get mining
     *
     * @return string
     */
    public function getMining()
    {
        return $this->mining;
    }

    /**
     * Set shooting
     *
     * @param string $shooting
     *
     * @return SkillTree
     */
    public function setShooting($shooting)
    {
        $this->shooting = $shooting;

        return $this;
    }

    /**
     * Get shooting
     *
     * @return string
     */
    public function getShooting()
    {
        return $this->shooting;
    }

    /**
     * Set social
     *
     * @param string $social
     *
     * @return SkillTree
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return string
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set agility
     *
     * @param string $agility
     *
     * @return SkillTree
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;

        return $this;
    }

    /**
     * Get agility
     *
     * @return string
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * Set attack
     *
     * @param string $attack
     *
     * @return SkillTree
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get attack
     *
     * @return string
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set constitution
     *
     * @param string $constitution
     *
     * @return SkillTree
     */
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;

        return $this;
    }

    /**
     * Get constitution
     *
     * @return string
     */
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * Set defense
     *
     * @param string $defense
     *
     * @return SkillTree
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return string
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set fishing
     *
     * @param string $fishing
     *
     * @return SkillTree
     */
    public function setFishing($fishing)
    {
        $this->fishing = $fishing;

        return $this;
    }

    /**
     * Get fishing
     *
     * @return string
     */
    public function getFishing()
    {
        return $this->fishing;
    }

    /**
     * Set firemaking
     *
     * @param string $firemaking
     *
     * @return SkillTree
     */
    public function setFiremaking($firemaking)
    {
        $this->firemaking = $firemaking;

        return $this;
    }

    /**
     * Get firemaking
     *
     * @return string
     */
    public function getFiremaking()
    {
        return $this->firemaking;
    }

    /**
     * Set hunter
     *
     * @param string $hunter
     *
     * @return SkillTree
     */
    public function setHunter($hunter)
    {
        $this->hunter = $hunter;

        return $this;
    }

    /**
     * Get hunter
     *
     * @return string
     */
    public function getHunter()
    {
        return $this->hunter;
    }

    /**
     * Set engineering
     *
     * @param string $engineering
     *
     * @return SkillTree
     */
    public function setEngineering($engineering)
    {
        $this->engineering = $engineering;

        return $this;
    }

    /**
     * Get engineering
     *
     * @return string
     */
    public function getEngineering()
    {
        return $this->engineering;
    }

    /**
     * Set magic
     *
     * @param string $magic
     *
     * @return SkillTree
     */
    public function setMagic($magic)
    {
        $this->magic = $magic;

        return $this;
    }

    /**
     * Get magic
     *
     * @return string
     */
    public function getMagic()
    {
        return $this->magic;
    }

    /**
     * Set prayer
     *
     * @param string $prayer
     *
     * @return SkillTree
     */
    public function setPrayer($prayer)
    {
        $this->prayer = $prayer;

        return $this;
    }

    /**
     * Get prayer
     *
     * @return string
     */
    public function getPrayer()
    {
        return $this->prayer;
    }

    /**
     * Set ranged
     *
     * @param string $ranged
     *
     * @return SkillTree
     */
    public function setRanged($ranged)
    {
        $this->ranged = $ranged;

        return $this;
    }

    /**
     * Get ranged
     *
     * @return string
     */
    public function getRanged()
    {
        return $this->ranged;
    }

    /**
     * Set slayer
     *
     * @param string $slayer
     *
     * @return SkillTree
     */
    public function setSlayer($slayer)
    {
        $this->slayer = $slayer;

        return $this;
    }

    /**
     * Get slayer
     *
     * @return string
     */
    public function getSlayer()
    {
        return $this->slayer;
    }

    /**
     * Set smithing
     *
     * @param string $smithing
     *
     * @return SkillTree
     */
    public function setSmithing($smithing)
    {
        $this->smithing = $smithing;

        return $this;
    }

    /**
     * Get smithing
     *
     * @return string
     */
    public function getSmithing()
    {
        return $this->smithing;
    }

    /**
     * Set strength
     *
     * @param string $strength
     *
     * @return SkillTree
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return string
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set summoning
     *
     * @param string $summoning
     *
     * @return SkillTree
     */
    public function setSummoning($summoning)
    {
        $this->summoning = $summoning;

        return $this;
    }

    /**
     * Get summoning
     *
     * @return string
     */
    public function getSummoning()
    {
        return $this->summoning;
    }

    /**
     * Set thieving
     *
     * @param string $thieving
     *
     * @return SkillTree
     */
    public function setThieving($thieving)
    {
        $this->thieving = $thieving;

        return $this;
    }

    /**
     * Get thieving
     *
     * @return string
     */
    public function getThieving()
    {
        return $this->thieving;
    }

    /**
     * Set woodcutting
     *
     * @param string $woodcutting
     *
     * @return SkillTree
     */
    public function setWoodcutting($woodcutting)
    {
        $this->woodcutting = $woodcutting;

        return $this;
    }

    /**
     * Get woodcutting
     *
     * @return string
     */
    public function getWoodcutting()
    {
        return $this->woodcutting;
    }
}

