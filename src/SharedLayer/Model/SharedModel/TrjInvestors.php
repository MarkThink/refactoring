<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjInvestors
 */
class TrjInvestors
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $trueName;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var string
     */
    private $firstPy;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $companyJob;

    /**
     * @var string
     */
    private $introd;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $posterUid;

    /**
     * @var string
     */
    private $posterUsername;

    /**
     * @var integer
     */
    private $hitnum;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $isTuisong;

    /**
     * @var integer
     */
    private $isExe;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trueName
     *
     * @param string $trueName
     * @return TrjInvestors
     */
    public function setTrueName($trueName)
    {
        $this->trueName = $trueName;

        return $this;
    }

    /**
     * Get trueName
     *
     * @return string 
     */
    public function getTrueName()
    {
        return $this->trueName;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjInvestors
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set firstPy
     *
     * @param string $firstPy
     * @return TrjInvestors
     */
    public function setFirstPy($firstPy)
    {
        $this->firstPy = $firstPy;

        return $this;
    }

    /**
     * Get firstPy
     *
     * @return string 
     */
    public function getFirstPy()
    {
        return $this->firstPy;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrjInvestors
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return TrjInvestors
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyJob
     *
     * @param string $companyJob
     * @return TrjInvestors
     */
    public function setCompanyJob($companyJob)
    {
        $this->companyJob = $companyJob;

        return $this;
    }

    /**
     * Get companyJob
     *
     * @return string 
     */
    public function getCompanyJob()
    {
        return $this->companyJob;
    }

    /**
     * Set introd
     *
     * @param string $introd
     * @return TrjInvestors
     */
    public function setIntrod($introd)
    {
        $this->introd = $introd;

        return $this;
    }

    /**
     * Get introd
     *
     * @return string 
     */
    public function getIntrod()
    {
        return $this->introd;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjInvestors
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
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjInvestors
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set posterUid
     *
     * @param integer $posterUid
     * @return TrjInvestors
     */
    public function setPosterUid($posterUid)
    {
        $this->posterUid = $posterUid;

        return $this;
    }

    /**
     * Get posterUid
     *
     * @return integer 
     */
    public function getPosterUid()
    {
        return $this->posterUid;
    }

    /**
     * Set posterUsername
     *
     * @param string $posterUsername
     * @return TrjInvestors
     */
    public function setPosterUsername($posterUsername)
    {
        $this->posterUsername = $posterUsername;

        return $this;
    }

    /**
     * Get posterUsername
     *
     * @return string 
     */
    public function getPosterUsername()
    {
        return $this->posterUsername;
    }

    /**
     * Set hitnum
     *
     * @param integer $hitnum
     * @return TrjInvestors
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
     * Set status
     *
     * @param integer $status
     * @return TrjInvestors
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isTuisong
     *
     * @param integer $isTuisong
     * @return TrjInvestors
     */
    public function setIsTuisong($isTuisong)
    {
        $this->isTuisong = $isTuisong;

        return $this;
    }

    /**
     * Get isTuisong
     *
     * @return integer 
     */
    public function getIsTuisong()
    {
        return $this->isTuisong;
    }

    /**
     * Set isExe
     *
     * @param integer $isExe
     * @return TrjInvestors
     */
    public function setIsExe($isExe)
    {
        $this->isExe = $isExe;

        return $this;
    }

    /**
     * Get isExe
     *
     * @return integer 
     */
    public function getIsExe()
    {
        return $this->isExe;
    }

    /**
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjInvestors
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
     * @return TrjInvestors
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
     * @return TrjInvestors
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
}
