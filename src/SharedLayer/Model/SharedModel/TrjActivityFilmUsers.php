<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityFilmUsers
 */
class TrjActivityFilmUsers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $isRaffle;

    /**
     * @var integer
     */
    private $raffleId;

    /**
     * @var integer
     */
    private $raffleTime;

    /**
     * @var string
     */
    private $itemText;

    /**
     * @var integer
     */
    private $ticketId;


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
     * Set userId
     *
     * @param integer $userId
     * @return TrjActivityFilmUsers
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set isRaffle
     *
     * @param integer $isRaffle
     * @return TrjActivityFilmUsers
     */
    public function setIsRaffle($isRaffle)
    {
        $this->isRaffle = $isRaffle;

        return $this;
    }

    /**
     * Get isRaffle
     *
     * @return integer 
     */
    public function getIsRaffle()
    {
        return $this->isRaffle;
    }

    /**
     * Set raffleId
     *
     * @param integer $raffleId
     * @return TrjActivityFilmUsers
     */
    public function setRaffleId($raffleId)
    {
        $this->raffleId = $raffleId;

        return $this;
    }

    /**
     * Get raffleId
     *
     * @return integer 
     */
    public function getRaffleId()
    {
        return $this->raffleId;
    }

    /**
     * Set raffleTime
     *
     * @param integer $raffleTime
     * @return TrjActivityFilmUsers
     */
    public function setRaffleTime($raffleTime)
    {
        $this->raffleTime = $raffleTime;

        return $this;
    }

    /**
     * Get raffleTime
     *
     * @return integer 
     */
    public function getRaffleTime()
    {
        return $this->raffleTime;
    }

    /**
     * Set itemText
     *
     * @param string $itemText
     * @return TrjActivityFilmUsers
     */
    public function setItemText($itemText)
    {
        $this->itemText = $itemText;

        return $this;
    }

    /**
     * Get itemText
     *
     * @return string 
     */
    public function getItemText()
    {
        return $this->itemText;
    }

    /**
     * Set ticketId
     *
     * @param integer $ticketId
     * @return TrjActivityFilmUsers
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return integer 
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }
}
