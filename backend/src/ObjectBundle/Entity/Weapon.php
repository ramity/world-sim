<?php

namespace ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weapon
 *
 * @ORM\Table(name="weapon")
 * @ORM\Entity(repositoryClass="ObjectBundle\Repository\WeaponRepository")
 */
class Weapon
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
     * @var int
     *
     * @ORM\Column(name="damage", type="integer")
     */
    private $damage;

    /**
     * @var string
     *
     * @ORM\Column(name="damageDrop", type="string", length=255)
     */
    private $damageDrop;

    /**
     * @var string
     *
     * @ORM\Column(name="bulletDrop", type="string", length=255)
     */
    private $bulletDrop;

    /**
     * @var int
     *
     * @ORM\Column(name="rateOfFire", type="integer")
     */
    private $rateOfFire;

    /**
     * @var int
     *
     * @ORM\Column(name="reloadTime", type="integer")
     */
    private $reloadTime;

    /**
     * @var string
     *
     * @ORM\Column(name="stanceModifier", type="string", length=255)
     */
    private $stanceModifier;

    /**
     * @var int
     *
     * @ORM\Column(name="xSpread", type="integer")
     */
    private $xSpread;

    /**
     * @var int
     *
     * @ORM\Column(name="ySpread", type="integer")
     */
    private $ySpread;

    /**
     * @var int
     *
     * @ORM\Column(name="ammoCapacity", type="integer")
     */
    private $ammoCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="compatibleWeaponAttachments", type="string", length=255)
     */
    private $compatibleWeaponAttachments;

    /**
     * @var int
     *
     * @ORM\Column(name="mobilityModifier", type="integer")
     */
    private $mobilityModifier;

    /**
     * @var string
     *
     * @ORM\Column(name="adsModifier", type="string", length=255)
     */
    private $adsModifier;


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
     * @return Weapon
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
     * Set damage
     *
     * @param integer $damage
     *
     * @return Weapon
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set damageDrop
     *
     * @param string $damageDrop
     *
     * @return Weapon
     */
    public function setDamageDrop($damageDrop)
    {
        $this->damageDrop = $damageDrop;

        return $this;
    }

    /**
     * Get damageDrop
     *
     * @return string
     */
    public function getDamageDrop()
    {
        return $this->damageDrop;
    }

    /**
     * Set bulletDrop
     *
     * @param string $bulletDrop
     *
     * @return Weapon
     */
    public function setBulletDrop($bulletDrop)
    {
        $this->bulletDrop = $bulletDrop;

        return $this;
    }

    /**
     * Get bulletDrop
     *
     * @return string
     */
    public function getBulletDrop()
    {
        return $this->bulletDrop;
    }

    /**
     * Set rateOfFire
     *
     * @param integer $rateOfFire
     *
     * @return Weapon
     */
    public function setRateOfFire($rateOfFire)
    {
        $this->rateOfFire = $rateOfFire;

        return $this;
    }

    /**
     * Get rateOfFire
     *
     * @return int
     */
    public function getRateOfFire()
    {
        return $this->rateOfFire;
    }

    /**
     * Set reloadTime
     *
     * @param integer $reloadTime
     *
     * @return Weapon
     */
    public function setReloadTime($reloadTime)
    {
        $this->reloadTime = $reloadTime;

        return $this;
    }

    /**
     * Get reloadTime
     *
     * @return int
     */
    public function getReloadTime()
    {
        return $this->reloadTime;
    }

    /**
     * Set stanceModifier
     *
     * @param string $stanceModifier
     *
     * @return Weapon
     */
    public function setStanceModifier($stanceModifier)
    {
        $this->stanceModifier = $stanceModifier;

        return $this;
    }

    /**
     * Get stanceModifier
     *
     * @return string
     */
    public function getStanceModifier()
    {
        return $this->stanceModifier;
    }

    /**
     * Set xSpread
     *
     * @param integer $xSpread
     *
     * @return Weapon
     */
    public function setXSpread($xSpread)
    {
        $this->xSpread = $xSpread;

        return $this;
    }

    /**
     * Get xSpread
     *
     * @return int
     */
    public function getXSpread()
    {
        return $this->xSpread;
    }

    /**
     * Set ySpread
     *
     * @param integer $ySpread
     *
     * @return Weapon
     */
    public function setYSpread($ySpread)
    {
        $this->ySpread = $ySpread;

        return $this;
    }

    /**
     * Get ySpread
     *
     * @return int
     */
    public function getYSpread()
    {
        return $this->ySpread;
    }

    /**
     * Set ammoCapacity
     *
     * @param integer $ammoCapacity
     *
     * @return Weapon
     */
    public function setAmmoCapacity($ammoCapacity)
    {
        $this->ammoCapacity = $ammoCapacity;

        return $this;
    }

    /**
     * Get ammoCapacity
     *
     * @return int
     */
    public function getAmmoCapacity()
    {
        return $this->ammoCapacity;
    }

    /**
     * Set compatibleWeaponAttachments
     *
     * @param string $compatibleWeaponAttachments
     *
     * @return Weapon
     */
    public function setCompatibleWeaponAttachments($compatibleWeaponAttachments)
    {
        $this->compatibleWeaponAttachments = $compatibleWeaponAttachments;

        return $this;
    }

    /**
     * Get compatibleWeaponAttachments
     *
     * @return string
     */
    public function getCompatibleWeaponAttachments()
    {
        return $this->compatibleWeaponAttachments;
    }

    /**
     * Set mobilityModifier
     *
     * @param integer $mobilityModifier
     *
     * @return Weapon
     */
    public function setMobilityModifier($mobilityModifier)
    {
        $this->mobilityModifier = $mobilityModifier;

        return $this;
    }

    /**
     * Get mobilityModifier
     *
     * @return int
     */
    public function getMobilityModifier()
    {
        return $this->mobilityModifier;
    }

    /**
     * Set adsModifier
     *
     * @param string $adsModifier
     *
     * @return Weapon
     */
    public function setAdsModifier($adsModifier)
    {
        $this->adsModifier = $adsModifier;

        return $this;
    }

    /**
     * Get adsModifier
     *
     * @return string
     */
    public function getAdsModifier()
    {
        return $this->adsModifier;
    }
}

