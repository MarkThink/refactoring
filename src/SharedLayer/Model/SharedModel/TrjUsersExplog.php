<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersExplog
 */
class TrjUsersExplog
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
    private $ruleId;

    /**
     * @var integer
     */
    private $expStatus;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var integer
     */
    private $createTime;

    /**
     * @var integer
     */
    private $createDate;

    /**
     * @var integer
     */
    private $expTotal;

    /**
     * @var integer
     */
    private $expOriginal;

    /**
     * @var integer
     */
    private $expVip;

    /**
     * @var string
     */
    private $checkCode;


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
     * @return TrjUsersExplog
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
     * Set ruleId
     *
     * @param integer $ruleId
     * @return TrjUsersExplog
     */
    public function setRuleId($ruleId)
    {
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * Get ruleId
     *
     * @return integer 
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * Set expStatus
     *
     * @param integer $expStatus
     * @return TrjUsersExplog
     */
    public function setExpStatus($expStatus)
    {
        $this->expStatus = $expStatus;

        return $this;
    }

    /**
     * Get expStatus
     *
     * @return integer 
     */
    public function getExpStatus()
    {
        return $this->expStatus;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjUsersExplog
     */
    public function setCreateId($createId)
    {
        $this->createId = $createId;

        return $this;
    }

    /**
     * Get createId
     *
     * @return integer 
     */
    public function getCreateId()
    {
        return $this->createId;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     * @return TrjUsersExplog
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return TrjUsersExplog
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return integer 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set expTotal
     *
     * @param integer $expTotal
     * @return TrjUsersExplog
     */
    public function setExpTotal($expTotal)
    {
        $this->expTotal = $expTotal;

        return $this;
    }

    /**
     * Get expTotal
     *
     * @return integer 
     */
    public function getExpTotal()
    {
        return $this->expTotal;
    }

    /**
     * Set expOriginal
     *
     * @param integer $expOriginal
     * @return TrjUsersExplog
     */
    public function setExpOriginal($expOriginal)
    {
        $this->expOriginal = $expOriginal;

        return $this;
    }

    /**
     * Get expOriginal
     *
     * @return integer 
     */
    public function getExpOriginal()
    {
        return $this->expOriginal;
    }

    /**
     * Set expVip
     *
     * @param integer $expVip
     * @return TrjUsersExplog
     */
    public function setExpVip($expVip)
    {
        $this->expVip = $expVip;

        return $this;
    }

    /**
     * Get expVip
     *
     * @return integer 
     */
    public function getExpVip()
    {
        return $this->expVip;
    }

    /**
     * Set checkCode
     *
     * @param string $checkCode
     * @return TrjUsersExplog
     */
    public function setCheckCode($checkCode)
    {
        $this->checkCode = $checkCode;

        return $this;
    }

    /**
     * Get checkCode
     *
     * @return string 
     */
    public function getCheckCode()
    {
        return $this->checkCode;
    }
}
