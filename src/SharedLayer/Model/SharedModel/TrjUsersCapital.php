<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersCapital
 */
class TrjUsersCapital
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
    private $type;

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
     * @var integer
     */
    private $registerAddress;

    /**
     * @var string
     */
    private $registerAddressDetail;

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
    private $tzIndustryParent;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var string
     */
    private $tzIndustryKeyword;

    /**
     * @var integer
     */
    private $manageFunds;

    /**
     * @var string
     */
    private $businessLicense;

    /**
     * @var string
     */
    private $businessLicenseCode;

    /**
     * @var string
     */
    private $warrantPic;

    /**
     * @var string
     */
    private $tzRound;

    /**
     * @var integer
     */
    private $tzCompanyNum;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $banner;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $agreementImage;

    /**
     * @var string
     */
    private $agreementFile;

    /**
     * @var string
     */
    private $legalPerson;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var string
     */
    private $bankAccount;

    /**
     * @var string
     */
    private $bankCertFile;

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
    private $checkTime;

    /**
     * @var string
     */
    private $checkAdminUsername;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $previlegeLevel;

    /**
     * @var integer
     */
    private $dayInterview;

    /**
     * @var integer
     */
    private $monthInterview;

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
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersCapital
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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersCapital
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set orgName
     *
     * @param string $orgName
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * @param integer $registerAddress
     * @return TrjUsersCapital
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->registerAddress = $registerAddress;

        return $this;
    }

    /**
     * Get registerAddress
     *
     * @return integer 
     */
    public function getRegisterAddress()
    {
        return $this->registerAddress;
    }

    /**
     * Set registerAddressDetail
     *
     * @param string $registerAddressDetail
     * @return TrjUsersCapital
     */
    public function setRegisterAddressDetail($registerAddressDetail)
    {
        $this->registerAddressDetail = $registerAddressDetail;

        return $this;
    }

    /**
     * Get registerAddressDetail
     *
     * @return string 
     */
    public function getRegisterAddressDetail()
    {
        return $this->registerAddressDetail;
    }

    /**
     * Set orgType
     *
     * @param integer $orgType
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * Set tzIndustryParent
     *
     * @param string $tzIndustryParent
     * @return TrjUsersCapital
     */
    public function setTzIndustryParent($tzIndustryParent)
    {
        $this->tzIndustryParent = $tzIndustryParent;

        return $this;
    }

    /**
     * Get tzIndustryParent
     *
     * @return string 
     */
    public function getTzIndustryParent()
    {
        return $this->tzIndustryParent;
    }

    /**
     * Set tzArea
     *
     * @param string $tzArea
     * @return TrjUsersCapital
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
     * Set tzIndustryKeyword
     *
     * @param string $tzIndustryKeyword
     * @return TrjUsersCapital
     */
    public function setTzIndustryKeyword($tzIndustryKeyword)
    {
        $this->tzIndustryKeyword = $tzIndustryKeyword;

        return $this;
    }

    /**
     * Get tzIndustryKeyword
     *
     * @return string 
     */
    public function getTzIndustryKeyword()
    {
        return $this->tzIndustryKeyword;
    }

    /**
     * Set manageFunds
     *
     * @param integer $manageFunds
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * Set businessLicenseCode
     *
     * @param string $businessLicenseCode
     * @return TrjUsersCapital
     */
    public function setBusinessLicenseCode($businessLicenseCode)
    {
        $this->businessLicenseCode = $businessLicenseCode;

        return $this;
    }

    /**
     * Get businessLicenseCode
     *
     * @return string 
     */
    public function getBusinessLicenseCode()
    {
        return $this->businessLicenseCode;
    }

    /**
     * Set warrantPic
     *
     * @param string $warrantPic
     * @return TrjUsersCapital
     */
    public function setWarrantPic($warrantPic)
    {
        $this->warrantPic = $warrantPic;

        return $this;
    }

    /**
     * Get warrantPic
     *
     * @return string 
     */
    public function getWarrantPic()
    {
        return $this->warrantPic;
    }

    /**
     * Set tzRound
     *
     * @param string $tzRound
     * @return TrjUsersCapital
     */
    public function setTzRound($tzRound)
    {
        $this->tzRound = $tzRound;

        return $this;
    }

    /**
     * Get tzRound
     *
     * @return string 
     */
    public function getTzRound()
    {
        return $this->tzRound;
    }

    /**
     * Set tzCompanyNum
     *
     * @param integer $tzCompanyNum
     * @return TrjUsersCapital
     */
    public function setTzCompanyNum($tzCompanyNum)
    {
        $this->tzCompanyNum = $tzCompanyNum;

        return $this;
    }

    /**
     * Get tzCompanyNum
     *
     * @return integer 
     */
    public function getTzCompanyNum()
    {
        return $this->tzCompanyNum;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return TrjUsersCapital
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return TrjUsersCapital
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return TrjUsersCapital
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return TrjUsersCapital
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set agreementImage
     *
     * @param string $agreementImage
     * @return TrjUsersCapital
     */
    public function setAgreementImage($agreementImage)
    {
        $this->agreementImage = $agreementImage;

        return $this;
    }

    /**
     * Get agreementImage
     *
     * @return string 
     */
    public function getAgreementImage()
    {
        return $this->agreementImage;
    }

    /**
     * Set agreementFile
     *
     * @param string $agreementFile
     * @return TrjUsersCapital
     */
    public function setAgreementFile($agreementFile)
    {
        $this->agreementFile = $agreementFile;

        return $this;
    }

    /**
     * Get agreementFile
     *
     * @return string 
     */
    public function getAgreementFile()
    {
        return $this->agreementFile;
    }

    /**
     * Set legalPerson
     *
     * @param string $legalPerson
     * @return TrjUsersCapital
     */
    public function setLegalPerson($legalPerson)
    {
        $this->legalPerson = $legalPerson;

        return $this;
    }

    /**
     * Get legalPerson
     *
     * @return string 
     */
    public function getLegalPerson()
    {
        return $this->legalPerson;
    }

    /**
     * Set bank
     *
     * @param string $bank
     * @return TrjUsersCapital
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set bankAccount
     *
     * @param string $bankAccount
     * @return TrjUsersCapital
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return string 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set bankCertFile
     *
     * @param string $bankCertFile
     * @return TrjUsersCapital
     */
    public function setBankCertFile($bankCertFile)
    {
        $this->bankCertFile = $bankCertFile;

        return $this;
    }

    /**
     * Get bankCertFile
     *
     * @return string 
     */
    public function getBankCertFile()
    {
        return $this->bankCertFile;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     * @return TrjUsersCapital
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
     * @return TrjUsersCapital
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
     * Set checkTime
     *
     * @param integer $checkTime
     * @return TrjUsersCapital
     */
    public function setCheckTime($checkTime)
    {
        $this->checkTime = $checkTime;

        return $this;
    }

    /**
     * Get checkTime
     *
     * @return integer 
     */
    public function getCheckTime()
    {
        return $this->checkTime;
    }

    /**
     * Set checkAdminUsername
     *
     * @param string $checkAdminUsername
     * @return TrjUsersCapital
     */
    public function setCheckAdminUsername($checkAdminUsername)
    {
        $this->checkAdminUsername = $checkAdminUsername;

        return $this;
    }

    /**
     * Get checkAdminUsername
     *
     * @return string 
     */
    public function getCheckAdminUsername()
    {
        return $this->checkAdminUsername;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersCapital
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
     * Set status
     *
     * @param integer $status
     * @return TrjUsersCapital
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
     * Set previlegeLevel
     *
     * @param integer $previlegeLevel
     * @return TrjUsersCapital
     */
    public function setPrevilegeLevel($previlegeLevel)
    {
        $this->previlegeLevel = $previlegeLevel;

        return $this;
    }

    /**
     * Get previlegeLevel
     *
     * @return integer 
     */
    public function getPrevilegeLevel()
    {
        return $this->previlegeLevel;
    }

    /**
     * Set dayInterview
     *
     * @param integer $dayInterview
     * @return TrjUsersCapital
     */
    public function setDayInterview($dayInterview)
    {
        $this->dayInterview = $dayInterview;

        return $this;
    }

    /**
     * Get dayInterview
     *
     * @return integer 
     */
    public function getDayInterview()
    {
        return $this->dayInterview;
    }

    /**
     * Set monthInterview
     *
     * @param integer $monthInterview
     * @return TrjUsersCapital
     */
    public function setMonthInterview($monthInterview)
    {
        $this->monthInterview = $monthInterview;

        return $this;
    }

    /**
     * Get monthInterview
     *
     * @return integer 
     */
    public function getMonthInterview()
    {
        return $this->monthInterview;
    }

    /**
     * Set isTransform
     *
     * @param integer $isTransform
     * @return TrjUsersCapital
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
