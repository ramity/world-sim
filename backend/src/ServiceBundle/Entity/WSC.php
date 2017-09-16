<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WSC
 *
 * @ORM\Table(name="w_s_c")
 * @ORM\Entity(repositoryClass="ObjectBundle\Repository\WSCRepository")
 */
class WSC
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqueHash", type="string", length=255, unique=true)
     */
    private $uniqueHash;

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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WSC
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set uniqueHash
     *
     * @param string $uniqueHash
     *
     * @return WSC
     */
    public function setUniqueHash($uniqueHash)
    {
        $this->uniqueHash = $uniqueHash;

        return $this;
    }

    /**
     * Get uniqueHash
     *
     * @return string
     */
    public function getUniqueHash()
    {
        return $this->uniqueHash;
    }
}
