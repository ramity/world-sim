<?php

namespace ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeaponAttachment
 *
 * @ORM\Table(name="weapon_attachment")
 * @ORM\Entity(repositoryClass="ObjectBundle\Repository\WeaponAttachmentRepository")
 */
class WeaponAttachment
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
     * @ORM\Column(name="newDamage", type="integer")
     */
    private $newDamage;

    /**
     * @var string
     *
     * @ORM\Column(name="newDamageDrop", type="string", length=255)
     */
    private $newDamageDrop;

    /**
     * @var string
     *
     * @ORM\Column(name="newBulletDrop", type="string", length=255)
     */
    private $newBulletDrop;

    /**
     * @var int
     *
     * @ORM\Column(name="newRateOfFire", type="integer")
     */
    private $newRateOfFire;

    /**
     * @var int
     *
     * @ORM\Column(name="newReloadTime", type="integer")
     */
    private $newReloadTime;

    /**
     * @var string
     *
     * @ORM\Column(name="newStanceModifier", type="string", length=255)
     */
    private $newStanceModifier;

    /**
     * @var int
     *
     * @ORM\Column(name="newXSpread", type="integer")
     */
    private $newXSpread;

    /**
     * @var int
     *
     * @ORM\Column(name="newYSpread", type="integer")
     */
    private $newYSpread;

    /**
     * @var int
     *
     * @ORM\Column(name="newAmmoCapacity", type="integer")
     */
    private $newAmmoCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="newCompatibleWeaponAttachments", type="string", length=255)
     */
    private $newCompatibleWeaponAttachments;

    /**
     * @var int
     *
     * @ORM\Column(name="newMobilityModifier", type="integer")
     */
    private $newMobilityModifier;

    /**
     * @var string
     *
     * @ORM\Column(name="newAdsModifier", type="string", length=255)
     */
    private $newAdsModifier;


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
     * Set newDamage
     *
     * @param integer $newDamage
     *
     * @return WeaponAttachment
     */
    public function setNewDamage($newDamage)
    {
        $this->newDamage = $newDamage;

        return $this;
    }

    /**
     * Get newDamage
     *
     * @return int
     */
    public function getNewDamage()
    {
        return $this->newDamage;
    }

    /**
     * Set newDamageDrop
     *
     * @param string $newDamageDrop
     *
     * @return WeaponAttachment
     */
    public function setNewDamageDrop($newDamageDrop)
    {
        $this->newDamageDrop = $newDamageDrop;

        return $this;
    }

    /**
     * Get newDamageDrop
     *
     * @return string
     */
    public function getNewDamageDrop()
    {
        return $this->newDamageDrop;
    }

    /**
     * Set newBulletDrop
     *
     * @param string $newBulletDrop
     *
     * @return WeaponAttachment
     */
    public function setNewBulletDrop($newBulletDrop)
    {
        $this->newBulletDrop = $newBulletDrop;

        return $this;
    }

    /**
     * Get newBulletDrop
     *
     * @return string
     */
    public function getNewBulletDrop()
    {
        return $this->newBulletDrop;
    }

    /**
     * Set newRateOfFire
     *
     * @param integer $newRateOfFire
     *
     * @return WeaponAttachment
     */
    public function setNewRateOfFire($newRateOfFire)
    {
        $this->newRateOfFire = $newRateOfFire;

        return $this;
    }

    /**
     * Get newRateOfFire
     *
     * @return int
     */
    public function getNewRateOfFire()
    {
        return $this->newRateOfFire;
    }

    /**
     * Set newReloadTime
     *
     * @param integer $newReloadTime
     *
     * @return WeaponAttachment
     */
    public function setNewReloadTime($newReloadTime)
    {
        $this->newReloadTime = $newReloadTime;

        return $this;
    }

    /**
     * Get newReloadTime
     *
     * @return int
     */
    public function getNewReloadTime()
    {
        return $this->newReloadTime;
    }

    /**
     * Set newStanceModifier
     *
     * @param string $newStanceModifier
     *
     * @return WeaponAttachment
     */
    public function setNewStanceModifier($newStanceModifier)
    {
        $this->newStanceModifier = $newStanceModifier;

        return $this;
    }

    /**
     * Get newStanceModifier
     *
     * @return string
     */
    public function getNewStanceModifier()
    {
        return $this->newStanceModifier;
    }

    /**
     * Set newXSpread
     *
     * @param integer $newXSpread
     *
     * @return WeaponAttachment
     */
    public function setNewXSpread($newXSpread)
    {
        $this->newXSpread = $newXSpread;

        return $this;
    }

    /**
     * Get newXSpread
     *
     * @return int
     */
    public function getNewXSpread()
    {
        return $this->newXSpread;
    }

    /**
     * Set newYSpread
     *
     * @param integer $newYSpread
     *
     * @return WeaponAttachment
     */
    public function setNewYSpread($newYSpread)
    {
        $this->newYSpread = $newYSpread;

        return $this;
    }

    /**
     * Get newYSpread
     *
     * @return int
     */
    public function getNewYSpread()
    {
        return $this->newYSpread;
    }

    /**
     * Set newAmmoCapacity
     *
     * @param integer $newAmmoCapacity
     *
     * @return WeaponAttachment
     */
    public function setNewAmmoCapacity($newAmmoCapacity)
    {
        $this->newAmmoCapacity = $newAmmoCapacity;

        return $this;
    }

    /**
     * Get newAmmoCapacity
     *
     * @return int
     */
    public function getNewAmmoCapacity()
    {
        return $this->newAmmoCapacity;
    }

    /**
     * Set newCompatibleWeaponAttachments
     *
     * @param string $newCompatibleWeaponAttachments
     *
     * @return WeaponAttachment
     */
    public function setNewCompatibleWeaponAttachments($newCompatibleWeaponAttachments)
    {
        $this->newCompatibleWeaponAttachments = $newCompatibleWeaponAttachments;

        return $this;
    }

    /**
     * Get newCompatibleWeaponAttachments
     *
     * @return string
     */
    public function getNewCompatibleWeaponAttachments()
    {
        return $this->newCompatibleWeaponAttachments;
    }

    /**
     * Set newMobilityModifier
     *
     * @param integer $newMobilityModifier
     *
     * @return WeaponAttachment
     */
    public function setNewMobilityModifier($newMobilityModifier)
    {
        $this->newMobilityModifier = $newMobilityModifier;

        return $this;
    }

    /**
     * Get newMobilityModifier
     *
     * @return int
     */
    public function getNewMobilityModifier()
    {
        return $this->newMobilityModifier;
    }

    /**
     * Set newAdsModifier
     *
     * @param string $newAdsModifier
     *
     * @return WeaponAttachment
     */
    public function setNewAdsModifier($newAdsModifier)
    {
        $this->newAdsModifier = $newAdsModifier;

        return $this;
    }

    /**
     * Get newAdsModifier
     *
     * @return string
     */
    public function getNewAdsModifier()
    {
        return $this->newAdsModifier;
    }
}

