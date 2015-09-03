<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTravelRaffleResult
 */
class TrjTravelRaffleResult
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
    private $userType;

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
     * @return TrjTravelRaffleResult
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
     * Set userType
     *
     * @param integer $userType
     * @return TrjTravelRaffleResult
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set raffleNumber
     *
     * @param integer $raffleNumber
     * @return TrjTravelRaffleResult
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
     * @return TrjTravelRaffleResult
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
