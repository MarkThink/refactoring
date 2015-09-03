<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityFilmRaffle
 */
class TrjActivityFilmRaffle
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
    private $raffleNumber;

    /**
     * @var integer
     */
    private $raffleTime;


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
     * @return TrjActivityFilmRaffle
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
     * Set raffleNumber
     *
     * @param integer $raffleNumber
     * @return TrjActivityFilmRaffle
     */
    public function setRaffleNumber($raffleNumber)
    {
        $this->raffleNumber = $raffleNumber;

        return $this;
    }

    /**
     * Get raffleNumber
     *
     * @return integer 
     */
    public function getRaffleNumber()
    {
        return $this->raffleNumber;
    }

    /**
     * Set raffleTime
     *
     * @param integer $raffleTime
     * @return TrjActivityFilmRaffle
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
}
