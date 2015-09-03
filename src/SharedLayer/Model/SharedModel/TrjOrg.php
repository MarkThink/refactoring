<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrg
 */
class TrjOrg
{
    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var integer
     */
    private $orgType;

    /**
     * @var string
     */
    private $orgName;

    /**
     * @var string
     */
    private $orgCname;

    /**
     * @var string
     */
    private $orgEnname;

    /**
     * @var string
     */
    private $orgLocation;

    /**
     * @var string
     */
    private $orgReglocation;

    /**
     * @var string
     */
    private $orgRegcapital;

    /**
     * @var integer
     */
    private $orgCat;

    /**
     * @var string
     */
    private $orgRegyear;

    /**
     * @var string
     */
    private $orgUrl;

    /**
     * @var string
     */
    private $orgLogo;

    /**
     * @var string
     */
    private $orgOverview;

    /**
     * @var integer
     */
    private $orgSort;

    /**
     * @var integer
     */
    private $orgStatus;

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
    private $isListed;

    /**
     * @var string
     */
    private $tzIndustry;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var string
     */
    private $tzPeriod;

    /**
     * @var string
     */
    private $tzNature;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var integer
     */
    private $etime;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $hitnum;

    /**
     * @var integer
     */
    private $dateStart;


    /**
     * Get orgId
     *
     * @return integer 
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Set orgType
     *
     * @param integer $orgType
     * @return TrjOrg
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
     * Set orgName
     *
     * @param string $orgName
     * @return TrjOrg
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
     * Set orgCname
     *
     * @param string $orgCname
     * @return TrjOrg
     */
    public function setOrgCname($orgCname)
    {
        $this->orgCname = $orgCname;

        return $this;
    }

    /**
     * Get orgCname
     *
     * @return string 
     */
    public function getOrgCname()
    {
        return $this->orgCname;
    }

    /**
     * Set orgEnname
     *
     * @param string $orgEnname
     * @return TrjOrg
     */
    public function setOrgEnname($orgEnname)
    {
        $this->orgEnname = $orgEnname;

        return $this;
    }

    /**
     * Get orgEnname
     *
     * @return string 
     */
    public function getOrgEnname()
    {
        return $this->orgEnname;
    }

    /**
     * Set orgLocation
     *
     * @param string $orgLocation
     * @return TrjOrg
     */
    public function setOrgLocation($orgLocation)
    {
        $this->orgLocation = $orgLocation;

        return $this;
    }

    /**
     * Get orgLocation
     *
     * @return string 
     */
    public function getOrgLocation()
    {
        return $this->orgLocation;
    }

    /**
     * Set orgReglocation
     *
     * @param string $orgReglocation
     * @return TrjOrg
     */
    public function setOrgReglocation($orgReglocation)
    {
        $this->orgReglocation = $orgReglocation;

        return $this;
    }

    /**
     * Get orgReglocation
     *
     * @return string 
     */
    public function getOrgReglocation()
    {
        return $this->orgReglocation;
    }

    /**
     * Set orgRegcapital
     *
     * @param string $orgRegcapital
     * @return TrjOrg
     */
    public function setOrgRegcapital($orgRegcapital)
    {
        $this->orgRegcapital = $orgRegcapital;

        return $this;
    }

    /**
     * Get orgRegcapital
     *
     * @return string 
     */
    public function getOrgRegcapital()
    {
        return $this->orgRegcapital;
    }

    /**
     * Set orgCat
     *
     * @param integer $orgCat
     * @return TrjOrg
     */
    public function setOrgCat($orgCat)
    {
        $this->orgCat = $orgCat;

        return $this;
    }

    /**
     * Get orgCat
     *
     * @return integer 
     */
    public function getOrgCat()
    {
        return $this->orgCat;
    }

    /**
     * Set orgRegyear
     *
     * @param string $orgRegyear
     * @return TrjOrg
     */
    public function setOrgRegyear($orgRegyear)
    {
        $this->orgRegyear = $orgRegyear;

        return $this;
    }

    /**
     * Get orgRegyear
     *
     * @return string 
     */
    public function getOrgRegyear()
    {
        return $this->orgRegyear;
    }

    /**
     * Set orgUrl
     *
     * @param string $orgUrl
     * @return TrjOrg
     */
    public function setOrgUrl($orgUrl)
    {
        $this->orgUrl = $orgUrl;

        return $this;
    }

    /**
     * Get orgUrl
     *
     * @return string 
     */
    public function getOrgUrl()
    {
        return $this->orgUrl;
    }

    /**
     * Set orgLogo
     *
     * @param string $orgLogo
     * @return TrjOrg
     */
    public function setOrgLogo($orgLogo)
    {
        $this->orgLogo = $orgLogo;

        return $this;
    }

    /**
     * Get orgLogo
     *
     * @return string 
     */
    public function getOrgLogo()
    {
        return $this->orgLogo;
    }

    /**
     * Set orgOverview
     *
     * @param string $orgOverview
     * @return TrjOrg
     */
    public function setOrgOverview($orgOverview)
    {
        $this->orgOverview = $orgOverview;

        return $this;
    }

    /**
     * Get orgOverview
     *
     * @return string 
     */
    public function getOrgOverview()
    {
        return $this->orgOverview;
    }

    /**
     * Set orgSort
     *
     * @param integer $orgSort
     * @return TrjOrg
     */
    public function setOrgSort($orgSort)
    {
        $this->orgSort = $orgSort;

        return $this;
    }

    /**
     * Get orgSort
     *
     * @return integer 
     */
    public function getOrgSort()
    {
        return $this->orgSort;
    }

    /**
     * Set orgStatus
     *
     * @param integer $orgStatus
     * @return TrjOrg
     */
    public function setOrgStatus($orgStatus)
    {
        $this->orgStatus = $orgStatus;

        return $this;
    }

    /**
     * Get orgStatus
     *
     * @return integer 
     */
    public function getOrgStatus()
    {
        return $this->orgStatus;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjOrg
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
     * @return TrjOrg
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
     * Set isListed
     *
     * @param integer $isListed
     * @return TrjOrg
     */
    public function setIsListed($isListed)
    {
        $this->isListed = $isListed;

        return $this;
    }

    /**
     * Get isListed
     *
     * @return integer 
     */
    public function getIsListed()
    {
        return $this->isListed;
    }

    /**
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjOrg
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
     * @return TrjOrg
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
     * Set tzPeriod
     *
     * @param string $tzPeriod
     * @return TrjOrg
     */
    public function setTzPeriod($tzPeriod)
    {
        $this->tzPeriod = $tzPeriod;

        return $this;
    }

    /**
     * Get tzPeriod
     *
     * @return string 
     */
    public function getTzPeriod()
    {
        return $this->tzPeriod;
    }

    /**
     * Set tzNature
     *
     * @param string $tzNature
     * @return TrjOrg
     */
    public function setTzNature($tzNature)
    {
        $this->tzNature = $tzNature;

        return $this;
    }

    /**
     * Get tzNature
     *
     * @return string 
     */
    public function getTzNature()
    {
        return $this->tzNature;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjOrg
     */
    public function setCommentNum($commentNum)
    {
        $this->commentNum = $commentNum;

        return $this;
    }

    /**
     * Get commentNum
     *
     * @return integer 
     */
    public function getCommentNum()
    {
        return $this->commentNum;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjOrg
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
     * @return TrjOrg
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjOrg
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjOrg
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set hitnum
     *
     * @param integer $hitnum
     * @return TrjOrg
     */
    public function setHitnum($hitnum)
    {
        $this->hitnum = $hitnum;

        return $this;
    }

    /**
     * Get hitnum
     *
     * @return integer 
     */
    public function getHitnum()
    {
        return $this->hitnum;
    }

    /**
     * Set dateStart
     *
     * @param integer $dateStart
     * @return TrjOrg
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return integer 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }
}
