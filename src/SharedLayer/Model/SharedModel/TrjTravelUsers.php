<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTravelUsers
 */
class TrjTravelUsers
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
     * @var integer
     */
    private $isInvest;

    /**
     * @var integer
     */
    private $xmId;

    /**
     * @var integer
     */
    private $investTime;

    /**
     * @var integer
     */
    private $isTravelReg;

    /**
     * @var integer
     */
    private $userType;


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
     * @return TrjTravelUsers
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
     * @return TrjTravelUsers
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
     * @return TrjTravelUsers
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
     * @return TrjTravelUsers
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
     * Set isInvest
     *
     * @param integer $isInvest
     * @return TrjTravelUsers
     */
    public function setIsInvest($isInvest)
    {
        $this->isInvest = $isInvest;

        return $this;
    }

    /**
     * Get isInvest
     *
     * @return integer 
     */
    public function getIsInvest()
    {
        return $this->isInvest;
    }

    /**
     * Set xmId
     *
     * @param integer $xmId
     * @return TrjTravelUsers
     */
    public function setXmId($xmId)
    {
        $this->xmId = $xmId;

        return $this;
    }

    /**
     * Get xmId
     *
     * @return integer 
     */
    public function getXmId()
    {
        return $this->xmId;
    }

    /**
     * Set investTime
     *
     * @param integer $investTime
     * @return TrjTravelUsers
     */
    public function setInvestTime($investTime)
    {
        $this->investTime = $investTime;

        return $this;
    }

    /**
     * Get investTime
     *
     * @return integer 
     */
    public function getInvestTime()
    {
        return $this->investTime;
    }

    /**
     * Set isTravelReg
     *
     * @param integer $isTravelReg
     * @return TrjTravelUsers
     */
    public function setIsTravelReg($isTravelReg)
    {
        $this->isTravelReg = $isTravelReg;

        return $this;
    }

    /**
     * Get isTravelReg
     *
     * @return integer 
     */
    public function getIsTravelReg()
    {
        return $this->isTravelReg;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return TrjTravelUsers
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
}
