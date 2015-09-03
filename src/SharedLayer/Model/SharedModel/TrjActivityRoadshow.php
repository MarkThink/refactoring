<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityRoadshow
 */
class TrjActivityRoadshow
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
     * @var string
     */
    private $projectName;

    /**
     * @var string
     */
    private $abstract;

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
     * @var string
     */
    private $contactAddress;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var integer
     */
    private $rongziLunci;

    /**
     * @var integer
     */
    private $itemStatus;

    /**
     * @var integer
     */
    private $companyScale;

    /**
     * @var string
     */
    private $projectUrl;

    /**
     * @var string
     */
    private $projectWeibo;

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
    private $job;

    /**
     * @var string
     */
    private $successCase;

    /**
     * @var string
     */
    private $itemDoc;

    /**
     * @var integer
     */
    private $isNew;

    /**
     * @var integer
     */
    private $isWap;

    /**
     * @var integer
     */
    private $roadshowType;


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
     * @return TrjActivityRoadshow
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
     * @return TrjActivityRoadshow
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
     * Set projectName
     *
     * @param string $projectName
     * @return TrjActivityRoadshow
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set abstract
     *
     * @param string $abstract
     * @return TrjActivityRoadshow
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    /**
     * Get abstract
     *
     * @return string 
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjActivityRoadshow
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
     * @return TrjActivityRoadshow
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
     * @return TrjActivityRoadshow
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
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return TrjActivityRoadshow
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string 
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjActivityRoadshow
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;

        return $this;
    }

    /**
     * Get industryId
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrjActivityRoadshow
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
     * Set rongziLunci
     *
     * @param integer $rongziLunci
     * @return TrjActivityRoadshow
     */
    public function setRongziLunci($rongziLunci)
    {
        $this->rongziLunci = $rongziLunci;

        return $this;
    }

    /**
     * Get rongziLunci
     *
     * @return integer 
     */
    public function getRongziLunci()
    {
        return $this->rongziLunci;
    }

    /**
     * Set itemStatus
     *
     * @param integer $itemStatus
     * @return TrjActivityRoadshow
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * Get itemStatus
     *
     * @return integer 
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * Set companyScale
     *
     * @param integer $companyScale
     * @return TrjActivityRoadshow
     */
    public function setCompanyScale($companyScale)
    {
        $this->companyScale = $companyScale;

        return $this;
    }

    /**
     * Get companyScale
     *
     * @return integer 
     */
    public function getCompanyScale()
    {
        return $this->companyScale;
    }

    /**
     * Set projectUrl
     *
     * @param string $projectUrl
     * @return TrjActivityRoadshow
     */
    public function setProjectUrl($projectUrl)
    {
        $this->projectUrl = $projectUrl;

        return $this;
    }

    /**
     * Get projectUrl
     *
     * @return string 
     */
    public function getProjectUrl()
    {
        return $this->projectUrl;
    }

    /**
     * Set projectWeibo
     *
     * @param string $projectWeibo
     * @return TrjActivityRoadshow
     */
    public function setProjectWeibo($projectWeibo)
    {
        $this->projectWeibo = $projectWeibo;

        return $this;
    }

    /**
     * Get projectWeibo
     *
     * @return string 
     */
    public function getProjectWeibo()
    {
        return $this->projectWeibo;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjActivityRoadshow
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
     * @return TrjActivityRoadshow
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
     * Set job
     *
     * @param string $job
     * @return TrjActivityRoadshow
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set successCase
     *
     * @param string $successCase
     * @return TrjActivityRoadshow
     */
    public function setSuccessCase($successCase)
    {
        $this->successCase = $successCase;

        return $this;
    }

    /**
     * Get successCase
     *
     * @return string 
     */
    public function getSuccessCase()
    {
        return $this->successCase;
    }

    /**
     * Set itemDoc
     *
     * @param string $itemDoc
     * @return TrjActivityRoadshow
     */
    public function setItemDoc($itemDoc)
    {
        $this->itemDoc = $itemDoc;

        return $this;
    }

    /**
     * Get itemDoc
     *
     * @return string 
     */
    public function getItemDoc()
    {
        return $this->itemDoc;
    }

    /**
     * Set isNew
     *
     * @param integer $isNew
     * @return TrjActivityRoadshow
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return integer 
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set isWap
     *
     * @param integer $isWap
     * @return TrjActivityRoadshow
     */
    public function setIsWap($isWap)
    {
        $this->isWap = $isWap;

        return $this;
    }

    /**
     * Get isWap
     *
     * @return integer 
     */
    public function getIsWap()
    {
        return $this->isWap;
    }

    /**
     * Set roadshowType
     *
     * @param integer $roadshowType
     * @return TrjActivityRoadshow
     */
    public function setRoadshowType($roadshowType)
    {
        $this->roadshowType = $roadshowType;

        return $this;
    }

    /**
     * Get roadshowType
     *
     * @return integer 
     */
    public function getRoadshowType()
    {
        return $this->roadshowType;
    }
}
