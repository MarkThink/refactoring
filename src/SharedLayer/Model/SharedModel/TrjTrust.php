<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTrust
 */
class TrjTrust
{
    /**
     * @var integer
     */
    private $totId;

    /**
     * @var string
     */
    private $totTitle;

    /**
     * @var string
     */
    private $totIssuingScale;

    /**
     * @var string
     */
    private $totInvestStart;

    /**
     * @var integer
     */
    private $totCycle;

    /**
     * @var string
     */
    private $totRevenue;

    /**
     * @var integer
     */
    private $totOrg;

    /**
     * @var integer
     */
    private $totType;

    /**
     * @var integer
     */
    private $totInvestType;

    /**
     * @var integer
     */
    private $totSaleState;

    /**
     * @var integer
     */
    private $totInvestmentWay;

    /**
     * @var integer
     */
    private $totRevenueType;

    /**
     * @var integer
     */
    private $totRevenueAlloc;

    /**
     * @var string
     */
    private $totPublishArea;

    /**
     * @var string
     */
    private $totPublishDate;

    /**
     * @var integer
     */
    private $totViewNum;

    /**
     * @var integer
     */
    private $totOrderNum;

    /**
     * @var integer
     */
    private $totFollowNum;

    /**
     * @var integer
     */
    private $totStatus;

    /**
     * @var integer
     */
    private $provinceId;

    /**
     * @var integer
     */
    private $cityId;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var string
     */
    private $member;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var integer
     */
    private $etime;

    /**
     * @var string
     */
    private $ip;


    /**
     * Get totId
     *
     * @return integer 
     */
    public function getTotId()
    {
        return $this->totId;
    }

    /**
     * Set totTitle
     *
     * @param string $totTitle
     * @return TrjTrust
     */
    public function setTotTitle($totTitle)
    {
        $this->totTitle = $totTitle;

        return $this;
    }

    /**
     * Get totTitle
     *
     * @return string 
     */
    public function getTotTitle()
    {
        return $this->totTitle;
    }

    /**
     * Set totIssuingScale
     *
     * @param string $totIssuingScale
     * @return TrjTrust
     */
    public function setTotIssuingScale($totIssuingScale)
    {
        $this->totIssuingScale = $totIssuingScale;

        return $this;
    }

    /**
     * Get totIssuingScale
     *
     * @return string 
     */
    public function getTotIssuingScale()
    {
        return $this->totIssuingScale;
    }

    /**
     * Set totInvestStart
     *
     * @param string $totInvestStart
     * @return TrjTrust
     */
    public function setTotInvestStart($totInvestStart)
    {
        $this->totInvestStart = $totInvestStart;

        return $this;
    }

    /**
     * Get totInvestStart
     *
     * @return string 
     */
    public function getTotInvestStart()
    {
        return $this->totInvestStart;
    }

    /**
     * Set totCycle
     *
     * @param integer $totCycle
     * @return TrjTrust
     */
    public function setTotCycle($totCycle)
    {
        $this->totCycle = $totCycle;

        return $this;
    }

    /**
     * Get totCycle
     *
     * @return integer 
     */
    public function getTotCycle()
    {
        return $this->totCycle;
    }

    /**
     * Set totRevenue
     *
     * @param string $totRevenue
     * @return TrjTrust
     */
    public function setTotRevenue($totRevenue)
    {
        $this->totRevenue = $totRevenue;

        return $this;
    }

    /**
     * Get totRevenue
     *
     * @return string 
     */
    public function getTotRevenue()
    {
        return $this->totRevenue;
    }

    /**
     * Set totOrg
     *
     * @param integer $totOrg
     * @return TrjTrust
     */
    public function setTotOrg($totOrg)
    {
        $this->totOrg = $totOrg;

        return $this;
    }

    /**
     * Get totOrg
     *
     * @return integer 
     */
    public function getTotOrg()
    {
        return $this->totOrg;
    }

    /**
     * Set totType
     *
     * @param integer $totType
     * @return TrjTrust
     */
    public function setTotType($totType)
    {
        $this->totType = $totType;

        return $this;
    }

    /**
     * Get totType
     *
     * @return integer 
     */
    public function getTotType()
    {
        return $this->totType;
    }

    /**
     * Set totInvestType
     *
     * @param integer $totInvestType
     * @return TrjTrust
     */
    public function setTotInvestType($totInvestType)
    {
        $this->totInvestType = $totInvestType;

        return $this;
    }

    /**
     * Get totInvestType
     *
     * @return integer 
     */
    public function getTotInvestType()
    {
        return $this->totInvestType;
    }

    /**
     * Set totSaleState
     *
     * @param integer $totSaleState
     * @return TrjTrust
     */
    public function setTotSaleState($totSaleState)
    {
        $this->totSaleState = $totSaleState;

        return $this;
    }

    /**
     * Get totSaleState
     *
     * @return integer 
     */
    public function getTotSaleState()
    {
        return $this->totSaleState;
    }

    /**
     * Set totInvestmentWay
     *
     * @param integer $totInvestmentWay
     * @return TrjTrust
     */
    public function setTotInvestmentWay($totInvestmentWay)
    {
        $this->totInvestmentWay = $totInvestmentWay;

        return $this;
    }

    /**
     * Get totInvestmentWay
     *
     * @return integer 
     */
    public function getTotInvestmentWay()
    {
        return $this->totInvestmentWay;
    }

    /**
     * Set totRevenueType
     *
     * @param integer $totRevenueType
     * @return TrjTrust
     */
    public function setTotRevenueType($totRevenueType)
    {
        $this->totRevenueType = $totRevenueType;

        return $this;
    }

    /**
     * Get totRevenueType
     *
     * @return integer 
     */
    public function getTotRevenueType()
    {
        return $this->totRevenueType;
    }

    /**
     * Set totRevenueAlloc
     *
     * @param integer $totRevenueAlloc
     * @return TrjTrust
     */
    public function setTotRevenueAlloc($totRevenueAlloc)
    {
        $this->totRevenueAlloc = $totRevenueAlloc;

        return $this;
    }

    /**
     * Get totRevenueAlloc
     *
     * @return integer 
     */
    public function getTotRevenueAlloc()
    {
        return $this->totRevenueAlloc;
    }

    /**
     * Set totPublishArea
     *
     * @param string $totPublishArea
     * @return TrjTrust
     */
    public function setTotPublishArea($totPublishArea)
    {
        $this->totPublishArea = $totPublishArea;

        return $this;
    }

    /**
     * Get totPublishArea
     *
     * @return string 
     */
    public function getTotPublishArea()
    {
        return $this->totPublishArea;
    }

    /**
     * Set totPublishDate
     *
     * @param string $totPublishDate
     * @return TrjTrust
     */
    public function setTotPublishDate($totPublishDate)
    {
        $this->totPublishDate = $totPublishDate;

        return $this;
    }

    /**
     * Get totPublishDate
     *
     * @return string 
     */
    public function getTotPublishDate()
    {
        return $this->totPublishDate;
    }

    /**
     * Set totViewNum
     *
     * @param integer $totViewNum
     * @return TrjTrust
     */
    public function setTotViewNum($totViewNum)
    {
        $this->totViewNum = $totViewNum;

        return $this;
    }

    /**
     * Get totViewNum
     *
     * @return integer 
     */
    public function getTotViewNum()
    {
        return $this->totViewNum;
    }

    /**
     * Set totOrderNum
     *
     * @param integer $totOrderNum
     * @return TrjTrust
     */
    public function setTotOrderNum($totOrderNum)
    {
        $this->totOrderNum = $totOrderNum;

        return $this;
    }

    /**
     * Get totOrderNum
     *
     * @return integer 
     */
    public function getTotOrderNum()
    {
        return $this->totOrderNum;
    }

    /**
     * Set totFollowNum
     *
     * @param integer $totFollowNum
     * @return TrjTrust
     */
    public function setTotFollowNum($totFollowNum)
    {
        $this->totFollowNum = $totFollowNum;

        return $this;
    }

    /**
     * Get totFollowNum
     *
     * @return integer 
     */
    public function getTotFollowNum()
    {
        return $this->totFollowNum;
    }

    /**
     * Set totStatus
     *
     * @param integer $totStatus
     * @return TrjTrust
     */
    public function setTotStatus($totStatus)
    {
        $this->totStatus = $totStatus;

        return $this;
    }

    /**
     * Get totStatus
     *
     * @return integer 
     */
    public function getTotStatus()
    {
        return $this->totStatus;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjTrust
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return TrjTrust
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return TrjTrust
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjTrust
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set member
     *
     * @param string $member
     * @return TrjTrust
     */
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return string 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjTrust
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set etime
     *
     * @param integer $etime
     * @return TrjTrust
     */
    public function setEtime($etime)
    {
        $this->etime = $etime;

        return $this;
    }

    /**
     * Get etime
     *
     * @return integer 
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjTrust
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }
}
