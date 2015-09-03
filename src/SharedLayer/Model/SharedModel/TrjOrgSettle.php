<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrgSettle
 */
class TrjOrgSettle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $orgName;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $orgSummary;

    /**
     * @var string
     */
    private $registerAddress;

    /**
     * @var integer
     */
    private $orgType;

    /**
     * @var string
     */
    private $tzIndustry;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var integer
     */
    private $manageFunds;

    /**
     * @var string
     */
    private $businessLicense;

    /**
     * @var integer
     */
    private $updateTime;

    /**
     * @var integer
     */
    private $applyTime;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $isTransform;


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
     * Set orgName
     *
     * @param string $orgName
     * @return TrjOrgSettle
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;

        return $this;
    }

    /**
     * Get orgName
     *
     * @return string 
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjOrgSettle
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjOrgSettle
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set orgSummary
     *
     * @param string $orgSummary
     * @return TrjOrgSettle
     */
    public function setOrgSummary($orgSummary)
    {
        $this->orgSummary = $orgSummary;

        return $this;
    }

    /**
     * Get orgSummary
     *
     * @return string 
     */
    public function getOrgSummary()
    {
        return $this->orgSummary;
    }

    /**
     * Set registerAddress
     *
     * @param string $registerAddress
     * @return TrjOrgSettle
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->registerAddress = $registerAddress;

        return $this;
    }

    /**
     * Get registerAddress
     *
     * @return string 
     */
    public function getRegisterAddress()
    {
        return $this->registerAddress;
    }

    /**
     * Set orgType
     *
     * @param integer $orgType
     * @return TrjOrgSettle
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;

        return $this;
    }

    /**
     * Get orgType
     *
     * @return integer 
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjOrgSettle
     */
    public function setTzIndustry($tzIndustry)
    {
        $this->tzIndustry = $tzIndustry;

        return $this;
    }

    /**
     * Get tzIndustry
     *
     * @return string 
     */
    public function getTzIndustry()
    {
        return $this->tzIndustry;
    }

    /**
     * Set tzArea
     *
     * @param string $tzArea
     * @return TrjOrgSettle
     */
    public function setTzArea($tzArea)
    {
        $this->tzArea = $tzArea;

        return $this;
    }

    /**
     * Get tzArea
     *
     * @return string 
     */
    public function getTzArea()
    {
        return $this->tzArea;
    }

    /**
     * Set manageFunds
     *
     * @param integer $manageFunds
     * @return TrjOrgSettle
     */
    public function setManageFunds($manageFunds)
    {
        $this->manageFunds = $manageFunds;

        return $this;
    }

    /**
     * Get manageFunds
     *
     * @return integer 
     */
    public function getManageFunds()
    {
        return $this->manageFunds;
    }

    /**
     * Set businessLicense
     *
     * @param string $businessLicense
     * @return TrjOrgSettle
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->businessLicense = $businessLicense;

        return $this;
    }

    /**
     * Get businessLicense
     *
     * @return string 
     */
    public function getBusinessLicense()
    {
        return $this->businessLicense;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     * @return TrjOrgSettle
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return integer 
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set applyTime
     *
     * @param integer $applyTime
     * @return TrjOrgSettle
     */
    public function setApplyTime($applyTime)
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * Get applyTime
     *
     * @return integer 
     */
    public function getApplyTime()
    {
        return $this->applyTime;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjOrgSettle
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set isTransform
     *
     * @param integer $isTransform
     * @return TrjOrgSettle
     */
    public function setIsTransform($isTransform)
    {
        $this->isTransform = $isTransform;

        return $this;
    }

    /**
     * Get isTransform
     *
     * @return integer 
     */
    public function getIsTransform()
    {
        return $this->isTransform;
    }
}
