<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersPublishTj
 */
class TrjUsersPublishTj
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var integer
     */
    private $userNature;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var integer
     */
    private $registerDatetime;

    /**
     * @var integer
     */
    private $xmPublishNum;

    /**
     * @var integer
     */
    private $xmPublishTNum;

    /**
     * @var integer
     */
    private $xmPublishWNum;

    /**
     * @var integer
     */
    private $zjPublishNum;

    /**
     * @var integer
     */
    private $zjPublishTNum;

    /**
     * @var integer
     */
    private $zjPublishWNum;

    /**
     * @var integer
     */
    private $historyPublishNum;

    /**
     * @var integer
     */
    private $loginNum;

    /**
     * @var integer
     */
    private $publishNumber;

    /**
     * @var string
     */
    private $source;


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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersPublishTj
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersPublishTj
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
     * Set userName
     *
     * @param string $userName
     * @return TrjUsersPublishTj
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userNature
     *
     * @param integer $userNature
     * @return TrjUsersPublishTj
     */
    public function setUserNature($userNature)
    {
        $this->userNature = $userNature;

        return $this;
    }

    /**
     * Get userNature
     *
     * @return integer 
     */
    public function getUserNature()
    {
        return $this->userNature;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return TrjUsersPublishTj
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
     * Set registerDatetime
     *
     * @param integer $registerDatetime
     * @return TrjUsersPublishTj
     */
    public function setRegisterDatetime($registerDatetime)
    {
        $this->registerDatetime = $registerDatetime;

        return $this;
    }

    /**
     * Get registerDatetime
     *
     * @return integer 
     */
    public function getRegisterDatetime()
    {
        return $this->registerDatetime;
    }

    /**
     * Set xmPublishNum
     *
     * @param integer $xmPublishNum
     * @return TrjUsersPublishTj
     */
    public function setXmPublishNum($xmPublishNum)
    {
        $this->xmPublishNum = $xmPublishNum;

        return $this;
    }

    /**
     * Get xmPublishNum
     *
     * @return integer 
     */
    public function getXmPublishNum()
    {
        return $this->xmPublishNum;
    }

    /**
     * Set xmPublishTNum
     *
     * @param integer $xmPublishTNum
     * @return TrjUsersPublishTj
     */
    public function setXmPublishTNum($xmPublishTNum)
    {
        $this->xmPublishTNum = $xmPublishTNum;

        return $this;
    }

    /**
     * Get xmPublishTNum
     *
     * @return integer 
     */
    public function getXmPublishTNum()
    {
        return $this->xmPublishTNum;
    }

    /**
     * Set xmPublishWNum
     *
     * @param integer $xmPublishWNum
     * @return TrjUsersPublishTj
     */
    public function setXmPublishWNum($xmPublishWNum)
    {
        $this->xmPublishWNum = $xmPublishWNum;

        return $this;
    }

    /**
     * Get xmPublishWNum
     *
     * @return integer 
     */
    public function getXmPublishWNum()
    {
        return $this->xmPublishWNum;
    }

    /**
     * Set zjPublishNum
     *
     * @param integer $zjPublishNum
     * @return TrjUsersPublishTj
     */
    public function setZjPublishNum($zjPublishNum)
    {
        $this->zjPublishNum = $zjPublishNum;

        return $this;
    }

    /**
     * Get zjPublishNum
     *
     * @return integer 
     */
    public function getZjPublishNum()
    {
        return $this->zjPublishNum;
    }

    /**
     * Set zjPublishTNum
     *
     * @param integer $zjPublishTNum
     * @return TrjUsersPublishTj
     */
    public function setZjPublishTNum($zjPublishTNum)
    {
        $this->zjPublishTNum = $zjPublishTNum;

        return $this;
    }

    /**
     * Get zjPublishTNum
     *
     * @return integer 
     */
    public function getZjPublishTNum()
    {
        return $this->zjPublishTNum;
    }

    /**
     * Set zjPublishWNum
     *
     * @param integer $zjPublishWNum
     * @return TrjUsersPublishTj
     */
    public function setZjPublishWNum($zjPublishWNum)
    {
        $this->zjPublishWNum = $zjPublishWNum;

        return $this;
    }

    /**
     * Get zjPublishWNum
     *
     * @return integer 
     */
    public function getZjPublishWNum()
    {
        return $this->zjPublishWNum;
    }

    /**
     * Set historyPublishNum
     *
     * @param integer $historyPublishNum
     * @return TrjUsersPublishTj
     */
    public function setHistoryPublishNum($historyPublishNum)
    {
        $this->historyPublishNum = $historyPublishNum;

        return $this;
    }

    /**
     * Get historyPublishNum
     *
     * @return integer 
     */
    public function getHistoryPublishNum()
    {
        return $this->historyPublishNum;
    }

    /**
     * Set loginNum
     *
     * @param integer $loginNum
     * @return TrjUsersPublishTj
     */
    public function setLoginNum($loginNum)
    {
        $this->loginNum = $loginNum;

        return $this;
    }

    /**
     * Get loginNum
     *
     * @return integer 
     */
    public function getLoginNum()
    {
        return $this->loginNum;
    }

    /**
     * Set publishNumber
     *
     * @param integer $publishNumber
     * @return TrjUsersPublishTj
     */
    public function setPublishNumber($publishNumber)
    {
        $this->publishNumber = $publishNumber;

        return $this;
    }

    /**
     * Get publishNumber
     *
     * @return integer 
     */
    public function getPublishNumber()
    {
        return $this->publishNumber;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return TrjUsersPublishTj
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }
}
