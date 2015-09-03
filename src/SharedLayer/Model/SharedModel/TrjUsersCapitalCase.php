<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersCapitalCase
 */
class TrjUsersCapitalCase
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
    private $settleId;

    /**
     * @var integer
     */
    private $tzTime;

    /**
     * @var integer
     */
    private $tzMoney;

    /**
     * @var string
     */
    private $tzOrgName;

    /**
     * @var string
     */
    private $tzReason;

    /**
     * @var string
     */
    private $certFile;

    /**
     * @var string
     */
    private $isCase;

    /**
     * @var string
     */
    private $caseRid;

    /**
     * @var string
     */
    private $caseResult;

    /**
     * @var integer
     */
    private $submitTime;

    /**
     * @var integer
     */
    private $verifyTime;

    /**
     * @var integer
     */
    private $verifyUserid;

    /**
     * @var string
     */
    private $verifyUsername;


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
     * @return TrjUsersCapitalCase
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
     * Set settleId
     *
     * @param integer $settleId
     * @return TrjUsersCapitalCase
     */
    public function setSettleId($settleId)
    {
        $this->settleId = $settleId;

        return $this;
    }

    /**
     * Get settleId
     *
     * @return integer 
     */
    public function getSettleId()
    {
        return $this->settleId;
    }

    /**
     * Set tzTime
     *
     * @param integer $tzTime
     * @return TrjUsersCapitalCase
     */
    public function setTzTime($tzTime)
    {
        $this->tzTime = $tzTime;

        return $this;
    }

    /**
     * Get tzTime
     *
     * @return integer 
     */
    public function getTzTime()
    {
        return $this->tzTime;
    }

    /**
     * Set tzMoney
     *
     * @param integer $tzMoney
     * @return TrjUsersCapitalCase
     */
    public function setTzMoney($tzMoney)
    {
        $this->tzMoney = $tzMoney;

        return $this;
    }

    /**
     * Get tzMoney
     *
     * @return integer 
     */
    public function getTzMoney()
    {
        return $this->tzMoney;
    }

    /**
     * Set tzOrgName
     *
     * @param string $tzOrgName
     * @return TrjUsersCapitalCase
     */
    public function setTzOrgName($tzOrgName)
    {
        $this->tzOrgName = $tzOrgName;

        return $this;
    }

    /**
     * Get tzOrgName
     *
     * @return string 
     */
    public function getTzOrgName()
    {
        return $this->tzOrgName;
    }

    /**
     * Set tzReason
     *
     * @param string $tzReason
     * @return TrjUsersCapitalCase
     */
    public function setTzReason($tzReason)
    {
        $this->tzReason = $tzReason;

        return $this;
    }

    /**
     * Get tzReason
     *
     * @return string 
     */
    public function getTzReason()
    {
        return $this->tzReason;
    }

    /**
     * Set certFile
     *
     * @param string $certFile
     * @return TrjUsersCapitalCase
     */
    public function setCertFile($certFile)
    {
        $this->certFile = $certFile;

        return $this;
    }

    /**
     * Get certFile
     *
     * @return string 
     */
    public function getCertFile()
    {
        return $this->certFile;
    }

    /**
     * Set isCase
     *
     * @param string $isCase
     * @return TrjUsersCapitalCase
     */
    public function setIsCase($isCase)
    {
        $this->isCase = $isCase;

        return $this;
    }

    /**
     * Get isCase
     *
     * @return string 
     */
    public function getIsCase()
    {
        return $this->isCase;
    }

    /**
     * Set caseRid
     *
     * @param string $caseRid
     * @return TrjUsersCapitalCase
     */
    public function setCaseRid($caseRid)
    {
        $this->caseRid = $caseRid;

        return $this;
    }

    /**
     * Get caseRid
     *
     * @return string 
     */
    public function getCaseRid()
    {
        return $this->caseRid;
    }

    /**
     * Set caseResult
     *
     * @param string $caseResult
     * @return TrjUsersCapitalCase
     */
    public function setCaseResult($caseResult)
    {
        $this->caseResult = $caseResult;

        return $this;
    }

    /**
     * Get caseResult
     *
     * @return string 
     */
    public function getCaseResult()
    {
        return $this->caseResult;
    }

    /**
     * Set submitTime
     *
     * @param integer $submitTime
     * @return TrjUsersCapitalCase
     */
    public function setSubmitTime($submitTime)
    {
        $this->submitTime = $submitTime;

        return $this;
    }

    /**
     * Get submitTime
     *
     * @return integer 
     */
    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     * @return TrjUsersCapitalCase
     */
    public function setVerifyTime($verifyTime)
    {
        $this->verifyTime = $verifyTime;

        return $this;
    }

    /**
     * Get verifyTime
     *
     * @return integer 
     */
    public function getVerifyTime()
    {
        return $this->verifyTime;
    }

    /**
     * Set verifyUserid
     *
     * @param integer $verifyUserid
     * @return TrjUsersCapitalCase
     */
    public function setVerifyUserid($verifyUserid)
    {
        $this->verifyUserid = $verifyUserid;

        return $this;
    }

    /**
     * Get verifyUserid
     *
     * @return integer 
     */
    public function getVerifyUserid()
    {
        return $this->verifyUserid;
    }

    /**
     * Set verifyUsername
     *
     * @param string $verifyUsername
     * @return TrjUsersCapitalCase
     */
    public function setVerifyUsername($verifyUsername)
    {
        $this->verifyUsername = $verifyUsername;

        return $this;
    }

    /**
     * Get verifyUsername
     *
     * @return string 
     */
    public function getVerifyUsername()
    {
        return $this->verifyUsername;
    }
}
