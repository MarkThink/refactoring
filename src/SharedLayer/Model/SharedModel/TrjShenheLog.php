<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjShenheLog
 */
class TrjShenheLog
{
    /**
     * @var integer
     */
    private $sid;

    /**
     * @var integer
     */
    private $infoId;

    /**
     * @var string
     */
    private $infoTable;

    /**
     * @var integer
     */
    private $shenType;

    /**
     * @var integer
     */
    private $shenStatus;

    /**
     * @var integer
     */
    private $shenReasonId;

    /**
     * @var string
     */
    private $shenReason;

    /**
     * @var integer
     */
    private $shenUid;

    /**
     * @var string
     */
    private $shenUsername;

    /**
     * @var integer
     */
    private $shenTime;

    /**
     * @var integer
     */
    private $isLast;


    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set infoId
     *
     * @param integer $infoId
     * @return TrjShenheLog
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return integer 
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set infoTable
     *
     * @param string $infoTable
     * @return TrjShenheLog
     */
    public function setInfoTable($infoTable)
    {
        $this->infoTable = $infoTable;

        return $this;
    }

    /**
     * Get infoTable
     *
     * @return string 
     */
    public function getInfoTable()
    {
        return $this->infoTable;
    }

    /**
     * Set shenType
     *
     * @param integer $shenType
     * @return TrjShenheLog
     */
    public function setShenType($shenType)
    {
        $this->shenType = $shenType;

        return $this;
    }

    /**
     * Get shenType
     *
     * @return integer 
     */
    public function getShenType()
    {
        return $this->shenType;
    }

    /**
     * Set shenStatus
     *
     * @param integer $shenStatus
     * @return TrjShenheLog
     */
    public function setShenStatus($shenStatus)
    {
        $this->shenStatus = $shenStatus;

        return $this;
    }

    /**
     * Get shenStatus
     *
     * @return integer 
     */
    public function getShenStatus()
    {
        return $this->shenStatus;
    }

    /**
     * Set shenReasonId
     *
     * @param integer $shenReasonId
     * @return TrjShenheLog
     */
    public function setShenReasonId($shenReasonId)
    {
        $this->shenReasonId = $shenReasonId;

        return $this;
    }

    /**
     * Get shenReasonId
     *
     * @return integer 
     */
    public function getShenReasonId()
    {
        return $this->shenReasonId;
    }

    /**
     * Set shenReason
     *
     * @param string $shenReason
     * @return TrjShenheLog
     */
    public function setShenReason($shenReason)
    {
        $this->shenReason = $shenReason;

        return $this;
    }

    /**
     * Get shenReason
     *
     * @return string 
     */
    public function getShenReason()
    {
        return $this->shenReason;
    }

    /**
     * Set shenUid
     *
     * @param integer $shenUid
     * @return TrjShenheLog
     */
    public function setShenUid($shenUid)
    {
        $this->shenUid = $shenUid;

        return $this;
    }

    /**
     * Get shenUid
     *
     * @return integer 
     */
    public function getShenUid()
    {
        return $this->shenUid;
    }

    /**
     * Set shenUsername
     *
     * @param string $shenUsername
     * @return TrjShenheLog
     */
    public function setShenUsername($shenUsername)
    {
        $this->shenUsername = $shenUsername;

        return $this;
    }

    /**
     * Get shenUsername
     *
     * @return string 
     */
    public function getShenUsername()
    {
        return $this->shenUsername;
    }

    /**
     * Set shenTime
     *
     * @param integer $shenTime
     * @return TrjShenheLog
     */
    public function setShenTime($shenTime)
    {
        $this->shenTime = $shenTime;

        return $this;
    }

    /**
     * Get shenTime
     *
     * @return integer 
     */
    public function getShenTime()
    {
        return $this->shenTime;
    }

    /**
     * Set isLast
     *
     * @param integer $isLast
     * @return TrjShenheLog
     */
    public function setIsLast($isLast)
    {
        $this->isLast = $isLast;

        return $this;
    }

    /**
     * Get isLast
     *
     * @return integer 
     */
    public function getIsLast()
    {
        return $this->isLast;
    }
}
