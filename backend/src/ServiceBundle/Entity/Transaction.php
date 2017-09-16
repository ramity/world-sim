<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="ServiceBundle\Repository\TransactionRepository")
 */
class Transaction
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
     * @ORM\Column(name="fromWallet", type="string", length=255)
     */
    private $fromWallet;

    /**
     * @var string
     *
     * @ORM\Column(name="toWallet", type="string", length=255)
     */
    private $toWallet;

    /**
     * @var string
     *
     * @ORM\Column(name="WSC", type="string", length=255)
     */
    private $WSC;

    /**
     * @ManyToMany(targetEntity="ObjectBundle", inversedBy="users")
     */
    private $items;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;


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
     * Set fromWallet
     *
     * @param string $fromWallet
     *
     * @return Transaction
     */
    public function setFromWallet($fromWallet)
    {
        $this->fromWallet = $fromWallet;

        return $this;
    }

    /**
     * Get fromWallet
     *
     * @return string
     */
    public function getFromWallet()
    {
        return $this->fromWallet;
    }

    /**
     * Set toWallet
     *
     * @param string $toWallet
     *
     * @return Transaction
     */
    public function setToWallet($toWallet)
    {
        $this->toWallet = $toWallet;

        return $this;
    }

    /**
     * Get toWallet
     *
     * @return string
     */
    public function getToWallet()
    {
        return $this->toWallet;
    }

    /**
     * Set WSC
     *
     * @param string $WSC
     *
     * @return Transaction
     */
    public function setWSC($WSC)
    {
        $this->WSC = $WSC;

        return $this;
    }

    /**
     * Get WSC
     *
     * @return string
     */
    public function getWSC()
    {
        return $this->WSC;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Transaction
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}
