<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsers
 */
class TrjUsers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $siteId;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $emailTrue;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var string
     */
    private $passwdPlaintext;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var integer
     */
    private $contactSex;

    /**
     * @var integer
     */
    private $contactJob;

    /**
     * @var string
     */
    private $contactJobName;

    /**
     * @var string
     */
    private $contactAddress;

    /**
     * @var string
     */
    private $phoneCr;

    /**
     * @var string
     */
    private $phoneQh;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $phoneFjh;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var integer
     */
    private $mobileTrue;

    /**
     * @var string
     */
    private $company;

    /**
     * @var integer
     */
    private $companyTrue;

    /**
     * @var integer
     */
    private $countryId;

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
    private $industryId;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $faxCr;

    /**
     * @var string
     */
    private $faxQh;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $qq;

    /**
     * @var integer
     */
    private $loginNum;

    /**
     * @var integer
     */
    private $businesscardNum;

    /**
     * @var integer
     */
    private $zjxmNum;

    /**
     * @var integer
     */
    private $validZjxmNum;

    /**
     * @var integer
     */
    private $hitNum;

    /**
     * @var integer
     */
    private $hitYestodayNum;

    /**
     * @var integer
     */
    private $hitTodayNum;

    /**
     * @var integer
     */
    private $hitFlag;

    /**
     * @var integer
     */
    private $followNum;

    /**
     * @var integer
     */
    private $fansNum;

    /**
     * @var integer
     */
    private $guestNum;

    /**
     * @var integer
     */
    private $askNum;

    /**
     * @var integer
     */
    private $collectNum;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $deliverNum;

    /**
     * @var integer
     */
    private $viewZjxmNum;

    /**
     * @var integer
     */
    private $viewBusinesscardNum;

    /**
     * @var integer
     */
    private $messageNum;

    /**
     * @var integer
     */
    private $reportNum;

    /**
     * @var integer
     */
    private $toreportNum;

    /**
     * @var integer
     */
    private $validMessageNum;

    /**
     * @var integer
     */
    private $viewRefuseNum;

    /**
     * @var integer
     */
    private $publishFlag;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $lastDatetime;

    /**
     * @var integer
     */
    private $lastIp;

    /**
     * @var integer
     */
    private $registerDatetime;

    /**
     * @var integer
     */
    private $registerIp;

    /**
     * @var string
     */
    private $securityCode;

    /**
     * @var integer
     */
    private $userRank;

    /**
     * @var integer
     */
    private $userLevel;

    /**
     * @var integer
     */
    private $userLevelStart;

    /**
     * @var integer
     */
    private $userLevelEnd;

    /**
     * @var integer
     */
    private $userLevelUpdated;

    /**
     * @var integer
     */
    private $userLevelTry;

    /**
     * @var string
     */
    private $userLogo;

    /**
     * @var string
     */
    private $userCredit;

    /**
     * @var integer
     */
    private $maxPublishNum;

    /**
     * @var integer
     */
    private $maxDeliverNum;

    /**
     * @var integer
     */
    private $maxCommentNum;

    /**
     * @var integer
     */
    private $maxRefreshNum;

    /**
     * @var integer
     */
    private $maxEntrustRefreshNum;

    /**
     * @var integer
     */
    private $maxMadeselNum;

    /**
     * @var integer
     */
    private $maxSendmsgNum;

    /**
     * @var integer
     */
    private $maxFriendNum;

    /**
     * @var integer
     */
    private $maxFollowNum;

    /**
     * @var integer
     */
    private $maxBusinesscardViewnum;

    /**
     * @var integer
     */
    private $isVipIdent;

    /**
     * @var integer
     */
    private $isVipHomepage;

    /**
     * @var integer
     */
    private $isDeliverTop;

    /**
     * @var integer
     */
    private $isPrivacySet;

    /**
     * @var integer
     */
    private $isImport;

    /**
     * @var integer
     */
    private $isOrder;

    /**
     * @var integer
     */
    private $isLimitBusinesscard;

    /**
     * @var integer
     */
    private $limitDatetime;

    /**
     * @var integer
     */
    private $fromId;

    /**
     * @var integer
     */
    private $isCredit;

    /**
     * @var integer
     */
    private $initial;

    /**
     * @var integer
     */
    private $initialSteptwo;

    /**
     * @var integer
     */
    private $isGuide;

    /**
     * @var integer
     */
    private $fundsBody;

    /**
     * @var integer
     */
    private $infoPercent;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var string
     */
    private $companyAnonym;

    /**
     * @var string
     */
    private $iAreaName;

    /**
     * @var integer
     */
    private $lastFeedId;

    /**
     * @var integer
     */
    private $lastFeedTime;

    /**
     * @var integer
     */
    private $sendEmailType;

    /**
     * @var integer
     */
    private $lastEmailTime;

    /**
     * @var integer
     */
    private $allowUserLogo;

    /**
     * @var string
     */
    private $goodPercent;

    /**
     * @var integer
     */
    private $userQuality;

    /**
     * @var integer
     */
    private $infoPercentSort;

    /**
     * @var integer
     */
    private $setPersonPulse;

    /**
     * @var integer
     */
    private $setMailRemind;


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
     * Set siteId
     *
     * @param integer $siteId
     * @return TrjUsers
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return TrjUsers
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
     * Set type
     *
     * @param integer $type
     * @return TrjUsers
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
     * Set email
     *
     * @param string $email
     * @return TrjUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailTrue
     *
     * @param integer $emailTrue
     * @return TrjUsers
     */
    public function setEmailTrue($emailTrue)
    {
        $this->emailTrue = $emailTrue;

        return $this;
    }

    /**
     * Get emailTrue
     *
     * @return integer 
     */
    public function getEmailTrue()
    {
        return $this->emailTrue;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjUsers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return TrjUsers
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set passwdPlaintext
     *
     * @param string $passwdPlaintext
     * @return TrjUsers
     */
    public function setPasswdPlaintext($passwdPlaintext)
    {
        $this->passwdPlaintext = $passwdPlaintext;

        return $this;
    }

    /**
     * Get passwdPlaintext
     *
     * @return string 
     */
    public function getPasswdPlaintext()
    {
        return $this->passwdPlaintext;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjUsers
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
     * Set contactSex
     *
     * @param integer $contactSex
     * @return TrjUsers
     */
    public function setContactSex($contactSex)
    {
        $this->contactSex = $contactSex;

        return $this;
    }

    /**
     * Get contactSex
     *
     * @return integer 
     */
    public function getContactSex()
    {
        return $this->contactSex;
    }

    /**
     * Set contactJob
     *
     * @param integer $contactJob
     * @return TrjUsers
     */
    public function setContactJob($contactJob)
    {
        $this->contactJob = $contactJob;

        return $this;
    }

    /**
     * Get contactJob
     *
     * @return integer 
     */
    public function getContactJob()
    {
        return $this->contactJob;
    }

    /**
     * Set contactJobName
     *
     * @param string $contactJobName
     * @return TrjUsers
     */
    public function setContactJobName($contactJobName)
    {
        $this->contactJobName = $contactJobName;

        return $this;
    }

    /**
     * Get contactJobName
     *
     * @return string 
     */
    public function getContactJobName()
    {
        return $this->contactJobName;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return TrjUsers
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
     * Set phoneCr
     *
     * @param string $phoneCr
     * @return TrjUsers
     */
    public function setPhoneCr($phoneCr)
    {
        $this->phoneCr = $phoneCr;

        return $this;
    }

    /**
     * Get phoneCr
     *
     * @return string 
     */
    public function getPhoneCr()
    {
        return $this->phoneCr;
    }

    /**
     * Set phoneQh
     *
     * @param string $phoneQh
     * @return TrjUsers
     */
    public function setPhoneQh($phoneQh)
    {
        $this->phoneQh = $phoneQh;

        return $this;
    }

    /**
     * Get phoneQh
     *
     * @return string 
     */
    public function getPhoneQh()
    {
        return $this->phoneQh;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return TrjUsers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneFjh
     *
     * @param string $phoneFjh
     * @return TrjUsers
     */
    public function setPhoneFjh($phoneFjh)
    {
        $this->phoneFjh = $phoneFjh;

        return $this;
    }

    /**
     * Get phoneFjh
     *
     * @return string 
     */
    public function getPhoneFjh()
    {
        return $this->phoneFjh;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjUsers
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
     * Set mobileTrue
     *
     * @param integer $mobileTrue
     * @return TrjUsers
     */
    public function setMobileTrue($mobileTrue)
    {
        $this->mobileTrue = $mobileTrue;

        return $this;
    }

    /**
     * Get mobileTrue
     *
     * @return integer 
     */
    public function getMobileTrue()
    {
        return $this->mobileTrue;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return TrjUsers
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set companyTrue
     *
     * @param integer $companyTrue
     * @return TrjUsers
     */
    public function setCompanyTrue($companyTrue)
    {
        $this->companyTrue = $companyTrue;

        return $this;
    }

    /**
     * Get companyTrue
     *
     * @return integer 
     */
    public function getCompanyTrue()
    {
        return $this->companyTrue;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return TrjUsers
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjUsers
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
     * @return TrjUsers
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
     * @return TrjUsers
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
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjUsers
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
     * Set postalCode
     *
     * @param string $postalCode
     * @return TrjUsers
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set faxCr
     *
     * @param string $faxCr
     * @return TrjUsers
     */
    public function setFaxCr($faxCr)
    {
        $this->faxCr = $faxCr;

        return $this;
    }

    /**
     * Get faxCr
     *
     * @return string 
     */
    public function getFaxCr()
    {
        return $this->faxCr;
    }

    /**
     * Set faxQh
     *
     * @param string $faxQh
     * @return TrjUsers
     */
    public function setFaxQh($faxQh)
    {
        $this->faxQh = $faxQh;

        return $this;
    }

    /**
     * Get faxQh
     *
     * @return string 
     */
    public function getFaxQh()
    {
        return $this->faxQh;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return TrjUsers
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set qq
     *
     * @param string $qq
     * @return TrjUsers
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string 
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set loginNum
     *
     * @param integer $loginNum
     * @return TrjUsers
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
     * Set businesscardNum
     *
     * @param integer $businesscardNum
     * @return TrjUsers
     */
    public function setBusinesscardNum($businesscardNum)
    {
        $this->businesscardNum = $businesscardNum;

        return $this;
    }

    /**
     * Get businesscardNum
     *
     * @return integer 
     */
    public function getBusinesscardNum()
    {
        return $this->businesscardNum;
    }

    /**
     * Set zjxmNum
     *
     * @param integer $zjxmNum
     * @return TrjUsers
     */
    public function setZjxmNum($zjxmNum)
    {
        $this->zjxmNum = $zjxmNum;

        return $this;
    }

    /**
     * Get zjxmNum
     *
     * @return integer 
     */
    public function getZjxmNum()
    {
        return $this->zjxmNum;
    }

    /**
     * Set validZjxmNum
     *
     * @param integer $validZjxmNum
     * @return TrjUsers
     */
    public function setValidZjxmNum($validZjxmNum)
    {
        $this->validZjxmNum = $validZjxmNum;

        return $this;
    }

    /**
     * Get validZjxmNum
     *
     * @return integer 
     */
    public function getValidZjxmNum()
    {
        return $this->validZjxmNum;
    }

    /**
     * Set hitNum
     *
     * @param integer $hitNum
     * @return TrjUsers
     */
    public function setHitNum($hitNum)
    {
        $this->hitNum = $hitNum;

        return $this;
    }

    /**
     * Get hitNum
     *
     * @return integer 
     */
    public function getHitNum()
    {
        return $this->hitNum;
    }

    /**
     * Set hitYestodayNum
     *
     * @param integer $hitYestodayNum
     * @return TrjUsers
     */
    public function setHitYestodayNum($hitYestodayNum)
    {
        $this->hitYestodayNum = $hitYestodayNum;

        return $this;
    }

    /**
     * Get hitYestodayNum
     *
     * @return integer 
     */
    public function getHitYestodayNum()
    {
        return $this->hitYestodayNum;
    }

    /**
     * Set hitTodayNum
     *
     * @param integer $hitTodayNum
     * @return TrjUsers
     */
    public function setHitTodayNum($hitTodayNum)
    {
        $this->hitTodayNum = $hitTodayNum;

        return $this;
    }

    /**
     * Get hitTodayNum
     *
     * @return integer 
     */
    public function getHitTodayNum()
    {
        return $this->hitTodayNum;
    }

    /**
     * Set hitFlag
     *
     * @param integer $hitFlag
     * @return TrjUsers
     */
    public function setHitFlag($hitFlag)
    {
        $this->hitFlag = $hitFlag;

        return $this;
    }

    /**
     * Get hitFlag
     *
     * @return integer 
     */
    public function getHitFlag()
    {
        return $this->hitFlag;
    }

    /**
     * Set followNum
     *
     * @param integer $followNum
     * @return TrjUsers
     */
    public function setFollowNum($followNum)
    {
        $this->followNum = $followNum;

        return $this;
    }

    /**
     * Get followNum
     *
     * @return integer 
     */
    public function getFollowNum()
    {
        return $this->followNum;
    }

    /**
     * Set fansNum
     *
     * @param integer $fansNum
     * @return TrjUsers
     */
    public function setFansNum($fansNum)
    {
        $this->fansNum = $fansNum;

        return $this;
    }

    /**
     * Get fansNum
     *
     * @return integer 
     */
    public function getFansNum()
    {
        return $this->fansNum;
    }

    /**
     * Set guestNum
     *
     * @param integer $guestNum
     * @return TrjUsers
     */
    public function setGuestNum($guestNum)
    {
        $this->guestNum = $guestNum;

        return $this;
    }

    /**
     * Get guestNum
     *
     * @return integer 
     */
    public function getGuestNum()
    {
        return $this->guestNum;
    }

    /**
     * Set askNum
     *
     * @param integer $askNum
     * @return TrjUsers
     */
    public function setAskNum($askNum)
    {
        $this->askNum = $askNum;

        return $this;
    }

    /**
     * Get askNum
     *
     * @return integer 
     */
    public function getAskNum()
    {
        return $this->askNum;
    }

    /**
     * Set collectNum
     *
     * @param integer $collectNum
     * @return TrjUsers
     */
    public function setCollectNum($collectNum)
    {
        $this->collectNum = $collectNum;

        return $this;
    }

    /**
     * Get collectNum
     *
     * @return integer 
     */
    public function getCollectNum()
    {
        return $this->collectNum;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjUsers
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
     * Set deliverNum
     *
     * @param integer $deliverNum
     * @return TrjUsers
     */
    public function setDeliverNum($deliverNum)
    {
        $this->deliverNum = $deliverNum;

        return $this;
    }

    /**
     * Get deliverNum
     *
     * @return integer 
     */
    public function getDeliverNum()
    {
        return $this->deliverNum;
    }

    /**
     * Set viewZjxmNum
     *
     * @param integer $viewZjxmNum
     * @return TrjUsers
     */
    public function setViewZjxmNum($viewZjxmNum)
    {
        $this->viewZjxmNum = $viewZjxmNum;

        return $this;
    }

    /**
     * Get viewZjxmNum
     *
     * @return integer 
     */
    public function getViewZjxmNum()
    {
        return $this->viewZjxmNum;
    }

    /**
     * Set viewBusinesscardNum
     *
     * @param integer $viewBusinesscardNum
     * @return TrjUsers
     */
    public function setViewBusinesscardNum($viewBusinesscardNum)
    {
        $this->viewBusinesscardNum = $viewBusinesscardNum;

        return $this;
    }

    /**
     * Get viewBusinesscardNum
     *
     * @return integer 
     */
    public function getViewBusinesscardNum()
    {
        return $this->viewBusinesscardNum;
    }

    /**
     * Set messageNum
     *
     * @param integer $messageNum
     * @return TrjUsers
     */
    public function setMessageNum($messageNum)
    {
        $this->messageNum = $messageNum;

        return $this;
    }

    /**
     * Get messageNum
     *
     * @return integer 
     */
    public function getMessageNum()
    {
        return $this->messageNum;
    }

    /**
     * Set reportNum
     *
     * @param integer $reportNum
     * @return TrjUsers
     */
    public function setReportNum($reportNum)
    {
        $this->reportNum = $reportNum;

        return $this;
    }

    /**
     * Get reportNum
     *
     * @return integer 
     */
    public function getReportNum()
    {
        return $this->reportNum;
    }

    /**
     * Set toreportNum
     *
     * @param integer $toreportNum
     * @return TrjUsers
     */
    public function setToreportNum($toreportNum)
    {
        $this->toreportNum = $toreportNum;

        return $this;
    }

    /**
     * Get toreportNum
     *
     * @return integer 
     */
    public function getToreportNum()
    {
        return $this->toreportNum;
    }

    /**
     * Set validMessageNum
     *
     * @param integer $validMessageNum
     * @return TrjUsers
     */
    public function setValidMessageNum($validMessageNum)
    {
        $this->validMessageNum = $validMessageNum;

        return $this;
    }

    /**
     * Get validMessageNum
     *
     * @return integer 
     */
    public function getValidMessageNum()
    {
        return $this->validMessageNum;
    }

    /**
     * Set viewRefuseNum
     *
     * @param integer $viewRefuseNum
     * @return TrjUsers
     */
    public function setViewRefuseNum($viewRefuseNum)
    {
        $this->viewRefuseNum = $viewRefuseNum;

        return $this;
    }

    /**
     * Get viewRefuseNum
     *
     * @return integer 
     */
    public function getViewRefuseNum()
    {
        return $this->viewRefuseNum;
    }

    /**
     * Set publishFlag
     *
     * @param integer $publishFlag
     * @return TrjUsers
     */
    public function setPublishFlag($publishFlag)
    {
        $this->publishFlag = $publishFlag;

        return $this;
    }

    /**
     * Get publishFlag
     *
     * @return integer 
     */
    public function getPublishFlag()
    {
        return $this->publishFlag;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsers
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
     * Set lastDatetime
     *
     * @param integer $lastDatetime
     * @return TrjUsers
     */
    public function setLastDatetime($lastDatetime)
    {
        $this->lastDatetime = $lastDatetime;

        return $this;
    }

    /**
     * Get lastDatetime
     *
     * @return integer 
     */
    public function getLastDatetime()
    {
        return $this->lastDatetime;
    }

    /**
     * Set lastIp
     *
     * @param integer $lastIp
     * @return TrjUsers
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return integer 
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set registerDatetime
     *
     * @param integer $registerDatetime
     * @return TrjUsers
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
     * Set registerIp
     *
     * @param integer $registerIp
     * @return TrjUsers
     */
    public function setRegisterIp($registerIp)
    {
        $this->registerIp = $registerIp;

        return $this;
    }

    /**
     * Get registerIp
     *
     * @return integer 
     */
    public function getRegisterIp()
    {
        return $this->registerIp;
    }

    /**
     * Set securityCode
     *
     * @param string $securityCode
     * @return TrjUsers
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Get securityCode
     *
     * @return string 
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Set userRank
     *
     * @param integer $userRank
     * @return TrjUsers
     */
    public function setUserRank($userRank)
    {
        $this->userRank = $userRank;

        return $this;
    }

    /**
     * Get userRank
     *
     * @return integer 
     */
    public function getUserRank()
    {
        return $this->userRank;
    }

    /**
     * Set userLevel
     *
     * @param integer $userLevel
     * @return TrjUsers
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    /**
     * Get userLevel
     *
     * @return integer 
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * Set userLevelStart
     *
     * @param integer $userLevelStart
     * @return TrjUsers
     */
    public function setUserLevelStart($userLevelStart)
    {
        $this->userLevelStart = $userLevelStart;

        return $this;
    }

    /**
     * Get userLevelStart
     *
     * @return integer 
     */
    public function getUserLevelStart()
    {
        return $this->userLevelStart;
    }

    /**
     * Set userLevelEnd
     *
     * @param integer $userLevelEnd
     * @return TrjUsers
     */
    public function setUserLevelEnd($userLevelEnd)
    {
        $this->userLevelEnd = $userLevelEnd;

        return $this;
    }

    /**
     * Get userLevelEnd
     *
     * @return integer 
     */
    public function getUserLevelEnd()
    {
        return $this->userLevelEnd;
    }

    /**
     * Set userLevelUpdated
     *
     * @param integer $userLevelUpdated
     * @return TrjUsers
     */
    public function setUserLevelUpdated($userLevelUpdated)
    {
        $this->userLevelUpdated = $userLevelUpdated;

        return $this;
    }

    /**
     * Get userLevelUpdated
     *
     * @return integer 
     */
    public function getUserLevelUpdated()
    {
        return $this->userLevelUpdated;
    }

    /**
     * Set userLevelTry
     *
     * @param integer $userLevelTry
     * @return TrjUsers
     */
    public function setUserLevelTry($userLevelTry)
    {
        $this->userLevelTry = $userLevelTry;

        return $this;
    }

    /**
     * Get userLevelTry
     *
     * @return integer 
     */
    public function getUserLevelTry()
    {
        return $this->userLevelTry;
    }

    /**
     * Set userLogo
     *
     * @param string $userLogo
     * @return TrjUsers
     */
    public function setUserLogo($userLogo)
    {
        $this->userLogo = $userLogo;

        return $this;
    }

    /**
     * Get userLogo
     *
     * @return string 
     */
    public function getUserLogo()
    {
        return $this->userLogo;
    }

    /**
     * Set userCredit
     *
     * @param string $userCredit
     * @return TrjUsers
     */
    public function setUserCredit($userCredit)
    {
        $this->userCredit = $userCredit;

        return $this;
    }

    /**
     * Get userCredit
     *
     * @return string 
     */
    public function getUserCredit()
    {
        return $this->userCredit;
    }

    /**
     * Set maxPublishNum
     *
     * @param integer $maxPublishNum
     * @return TrjUsers
     */
    public function setMaxPublishNum($maxPublishNum)
    {
        $this->maxPublishNum = $maxPublishNum;

        return $this;
    }

    /**
     * Get maxPublishNum
     *
     * @return integer 
     */
    public function getMaxPublishNum()
    {
        return $this->maxPublishNum;
    }

    /**
     * Set maxDeliverNum
     *
     * @param integer $maxDeliverNum
     * @return TrjUsers
     */
    public function setMaxDeliverNum($maxDeliverNum)
    {
        $this->maxDeliverNum = $maxDeliverNum;

        return $this;
    }

    /**
     * Get maxDeliverNum
     *
     * @return integer 
     */
    public function getMaxDeliverNum()
    {
        return $this->maxDeliverNum;
    }

    /**
     * Set maxCommentNum
     *
     * @param integer $maxCommentNum
     * @return TrjUsers
     */
    public function setMaxCommentNum($maxCommentNum)
    {
        $this->maxCommentNum = $maxCommentNum;

        return $this;
    }

    /**
     * Get maxCommentNum
     *
     * @return integer 
     */
    public function getMaxCommentNum()
    {
        return $this->maxCommentNum;
    }

    /**
     * Set maxRefreshNum
     *
     * @param integer $maxRefreshNum
     * @return TrjUsers
     */
    public function setMaxRefreshNum($maxRefreshNum)
    {
        $this->maxRefreshNum = $maxRefreshNum;

        return $this;
    }

    /**
     * Get maxRefreshNum
     *
     * @return integer 
     */
    public function getMaxRefreshNum()
    {
        return $this->maxRefreshNum;
    }

    /**
     * Set maxEntrustRefreshNum
     *
     * @param integer $maxEntrustRefreshNum
     * @return TrjUsers
     */
    public function setMaxEntrustRefreshNum($maxEntrustRefreshNum)
    {
        $this->maxEntrustRefreshNum = $maxEntrustRefreshNum;

        return $this;
    }

    /**
     * Get maxEntrustRefreshNum
     *
     * @return integer 
     */
    public function getMaxEntrustRefreshNum()
    {
        return $this->maxEntrustRefreshNum;
    }

    /**
     * Set maxMadeselNum
     *
     * @param integer $maxMadeselNum
     * @return TrjUsers
     */
    public function setMaxMadeselNum($maxMadeselNum)
    {
        $this->maxMadeselNum = $maxMadeselNum;

        return $this;
    }

    /**
     * Get maxMadeselNum
     *
     * @return integer 
     */
    public function getMaxMadeselNum()
    {
        return $this->maxMadeselNum;
    }

    /**
     * Set maxSendmsgNum
     *
     * @param integer $maxSendmsgNum
     * @return TrjUsers
     */
    public function setMaxSendmsgNum($maxSendmsgNum)
    {
        $this->maxSendmsgNum = $maxSendmsgNum;

        return $this;
    }

    /**
     * Get maxSendmsgNum
     *
     * @return integer 
     */
    public function getMaxSendmsgNum()
    {
        return $this->maxSendmsgNum;
    }

    /**
     * Set maxFriendNum
     *
     * @param integer $maxFriendNum
     * @return TrjUsers
     */
    public function setMaxFriendNum($maxFriendNum)
    {
        $this->maxFriendNum = $maxFriendNum;

        return $this;
    }

    /**
     * Get maxFriendNum
     *
     * @return integer 
     */
    public function getMaxFriendNum()
    {
        return $this->maxFriendNum;
    }

    /**
     * Set maxFollowNum
     *
     * @param integer $maxFollowNum
     * @return TrjUsers
     */
    public function setMaxFollowNum($maxFollowNum)
    {
        $this->maxFollowNum = $maxFollowNum;

        return $this;
    }

    /**
     * Get maxFollowNum
     *
     * @return integer 
     */
    public function getMaxFollowNum()
    {
        return $this->maxFollowNum;
    }

    /**
     * Set maxBusinesscardViewnum
     *
     * @param integer $maxBusinesscardViewnum
     * @return TrjUsers
     */
    public function setMaxBusinesscardViewnum($maxBusinesscardViewnum)
    {
        $this->maxBusinesscardViewnum = $maxBusinesscardViewnum;

        return $this;
    }

    /**
     * Get maxBusinesscardViewnum
     *
     * @return integer 
     */
    public function getMaxBusinesscardViewnum()
    {
        return $this->maxBusinesscardViewnum;
    }

    /**
     * Set isVipIdent
     *
     * @param integer $isVipIdent
     * @return TrjUsers
     */
    public function setIsVipIdent($isVipIdent)
    {
        $this->isVipIdent = $isVipIdent;

        return $this;
    }

    /**
     * Get isVipIdent
     *
     * @return integer 
     */
    public function getIsVipIdent()
    {
        return $this->isVipIdent;
    }

    /**
     * Set isVipHomepage
     *
     * @param integer $isVipHomepage
     * @return TrjUsers
     */
    public function setIsVipHomepage($isVipHomepage)
    {
        $this->isVipHomepage = $isVipHomepage;

        return $this;
    }

    /**
     * Get isVipHomepage
     *
     * @return integer 
     */
    public function getIsVipHomepage()
    {
        return $this->isVipHomepage;
    }

    /**
     * Set isDeliverTop
     *
     * @param integer $isDeliverTop
     * @return TrjUsers
     */
    public function setIsDeliverTop($isDeliverTop)
    {
        $this->isDeliverTop = $isDeliverTop;

        return $this;
    }

    /**
     * Get isDeliverTop
     *
     * @return integer 
     */
    public function getIsDeliverTop()
    {
        return $this->isDeliverTop;
    }

    /**
     * Set isPrivacySet
     *
     * @param integer $isPrivacySet
     * @return TrjUsers
     */
    public function setIsPrivacySet($isPrivacySet)
    {
        $this->isPrivacySet = $isPrivacySet;

        return $this;
    }

    /**
     * Get isPrivacySet
     *
     * @return integer 
     */
    public function getIsPrivacySet()
    {
        return $this->isPrivacySet;
    }

    /**
     * Set isImport
     *
     * @param integer $isImport
     * @return TrjUsers
     */
    public function setIsImport($isImport)
    {
        $this->isImport = $isImport;

        return $this;
    }

    /**
     * Get isImport
     *
     * @return integer 
     */
    public function getIsImport()
    {
        return $this->isImport;
    }

    /**
     * Set isOrder
     *
     * @param integer $isOrder
     * @return TrjUsers
     */
    public function setIsOrder($isOrder)
    {
        $this->isOrder = $isOrder;

        return $this;
    }

    /**
     * Get isOrder
     *
     * @return integer 
     */
    public function getIsOrder()
    {
        return $this->isOrder;
    }

    /**
     * Set isLimitBusinesscard
     *
     * @param integer $isLimitBusinesscard
     * @return TrjUsers
     */
    public function setIsLimitBusinesscard($isLimitBusinesscard)
    {
        $this->isLimitBusinesscard = $isLimitBusinesscard;

        return $this;
    }

    /**
     * Get isLimitBusinesscard
     *
     * @return integer 
     */
    public function getIsLimitBusinesscard()
    {
        return $this->isLimitBusinesscard;
    }

    /**
     * Set limitDatetime
     *
     * @param integer $limitDatetime
     * @return TrjUsers
     */
    public function setLimitDatetime($limitDatetime)
    {
        $this->limitDatetime = $limitDatetime;

        return $this;
    }

    /**
     * Get limitDatetime
     *
     * @return integer 
     */
    public function getLimitDatetime()
    {
        return $this->limitDatetime;
    }

    /**
     * Set fromId
     *
     * @param integer $fromId
     * @return TrjUsers
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return integer 
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set isCredit
     *
     * @param integer $isCredit
     * @return TrjUsers
     */
    public function setIsCredit($isCredit)
    {
        $this->isCredit = $isCredit;

        return $this;
    }

    /**
     * Get isCredit
     *
     * @return integer 
     */
    public function getIsCredit()
    {
        return $this->isCredit;
    }

    /**
     * Set initial
     *
     * @param integer $initial
     * @return TrjUsers
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * Get initial
     *
     * @return integer 
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Set initialSteptwo
     *
     * @param integer $initialSteptwo
     * @return TrjUsers
     */
    public function setInitialSteptwo($initialSteptwo)
    {
        $this->initialSteptwo = $initialSteptwo;

        return $this;
    }

    /**
     * Get initialSteptwo
     *
     * @return integer 
     */
    public function getInitialSteptwo()
    {
        return $this->initialSteptwo;
    }

    /**
     * Set isGuide
     *
     * @param integer $isGuide
     * @return TrjUsers
     */
    public function setIsGuide($isGuide)
    {
        $this->isGuide = $isGuide;

        return $this;
    }

    /**
     * Get isGuide
     *
     * @return integer 
     */
    public function getIsGuide()
    {
        return $this->isGuide;
    }

    /**
     * Set fundsBody
     *
     * @param integer $fundsBody
     * @return TrjUsers
     */
    public function setFundsBody($fundsBody)
    {
        $this->fundsBody = $fundsBody;

        return $this;
    }

    /**
     * Get fundsBody
     *
     * @return integer 
     */
    public function getFundsBody()
    {
        return $this->fundsBody;
    }

    /**
     * Set infoPercent
     *
     * @param integer $infoPercent
     * @return TrjUsers
     */
    public function setInfoPercent($infoPercent)
    {
        $this->infoPercent = $infoPercent;

        return $this;
    }

    /**
     * Get infoPercent
     *
     * @return integer 
     */
    public function getInfoPercent()
    {
        return $this->infoPercent;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return TrjUsers
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set companyAnonym
     *
     * @param string $companyAnonym
     * @return TrjUsers
     */
    public function setCompanyAnonym($companyAnonym)
    {
        $this->companyAnonym = $companyAnonym;

        return $this;
    }

    /**
     * Get companyAnonym
     *
     * @return string 
     */
    public function getCompanyAnonym()
    {
        return $this->companyAnonym;
    }

    /**
     * Set iAreaName
     *
     * @param string $iAreaName
     * @return TrjUsers
     */
    public function setIAreaName($iAreaName)
    {
        $this->iAreaName = $iAreaName;

        return $this;
    }

    /**
     * Get iAreaName
     *
     * @return string 
     */
    public function getIAreaName()
    {
        return $this->iAreaName;
    }

    /**
     * Set lastFeedId
     *
     * @param integer $lastFeedId
     * @return TrjUsers
     */
    public function setLastFeedId($lastFeedId)
    {
        $this->lastFeedId = $lastFeedId;

        return $this;
    }

    /**
     * Get lastFeedId
     *
     * @return integer 
     */
    public function getLastFeedId()
    {
        return $this->lastFeedId;
    }

    /**
     * Set lastFeedTime
     *
     * @param integer $lastFeedTime
     * @return TrjUsers
     */
    public function setLastFeedTime($lastFeedTime)
    {
        $this->lastFeedTime = $lastFeedTime;

        return $this;
    }

    /**
     * Get lastFeedTime
     *
     * @return integer 
     */
    public function getLastFeedTime()
    {
        return $this->lastFeedTime;
    }

    /**
     * Set sendEmailType
     *
     * @param integer $sendEmailType
     * @return TrjUsers
     */
    public function setSendEmailType($sendEmailType)
    {
        $this->sendEmailType = $sendEmailType;

        return $this;
    }

    /**
     * Get sendEmailType
     *
     * @return integer 
     */
    public function getSendEmailType()
    {
        return $this->sendEmailType;
    }

    /**
     * Set lastEmailTime
     *
     * @param integer $lastEmailTime
     * @return TrjUsers
     */
    public function setLastEmailTime($lastEmailTime)
    {
        $this->lastEmailTime = $lastEmailTime;

        return $this;
    }

    /**
     * Get lastEmailTime
     *
     * @return integer 
     */
    public function getLastEmailTime()
    {
        return $this->lastEmailTime;
    }

    /**
     * Set allowUserLogo
     *
     * @param integer $allowUserLogo
     * @return TrjUsers
     */
    public function setAllowUserLogo($allowUserLogo)
    {
        $this->allowUserLogo = $allowUserLogo;

        return $this;
    }

    /**
     * Get allowUserLogo
     *
     * @return integer 
     */
    public function getAllowUserLogo()
    {
        return $this->allowUserLogo;
    }

    /**
     * Set goodPercent
     *
     * @param string $goodPercent
     * @return TrjUsers
     */
    public function setGoodPercent($goodPercent)
    {
        $this->goodPercent = $goodPercent;

        return $this;
    }

    /**
     * Get goodPercent
     *
     * @return string 
     */
    public function getGoodPercent()
    {
        return $this->goodPercent;
    }

    /**
     * Set userQuality
     *
     * @param integer $userQuality
     * @return TrjUsers
     */
    public function setUserQuality($userQuality)
    {
        $this->userQuality = $userQuality;

        return $this;
    }

    /**
     * Get userQuality
     *
     * @return integer 
     */
    public function getUserQuality()
    {
        return $this->userQuality;
    }

    /**
     * Set infoPercentSort
     *
     * @param integer $infoPercentSort
     * @return TrjUsers
     */
    public function setInfoPercentSort($infoPercentSort)
    {
        $this->infoPercentSort = $infoPercentSort;

        return $this;
    }

    /**
     * Get infoPercentSort
     *
     * @return integer 
     */
    public function getInfoPercentSort()
    {
        return $this->infoPercentSort;
    }

    /**
     * Set setPersonPulse
     *
     * @param integer $setPersonPulse
     * @return TrjUsers
     */
    public function setSetPersonPulse($setPersonPulse)
    {
        $this->setPersonPulse = $setPersonPulse;

        return $this;
    }

    /**
     * Get setPersonPulse
     *
     * @return integer 
     */
    public function getSetPersonPulse()
    {
        return $this->setPersonPulse;
    }

    /**
     * Set setMailRemind
     *
     * @param integer $setMailRemind
     * @return TrjUsers
     */
    public function setSetMailRemind($setMailRemind)
    {
        $this->setMailRemind = $setMailRemind;

        return $this;
    }

    /**
     * Get setMailRemind
     *
     * @return integer 
     */
    public function getSetMailRemind()
    {
        return $this->setMailRemind;
    }
}
