<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmContact
 */
class TrjZjxmContact
{
    /**
     * @var integer
     */
    private $contactId;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var string
     */
    private $contactUsername;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var integer
     */
    private $contactSex;

    /**
     * @var string
     */
    private $contactCompany;

    /**
     * @var string
     */
    private $contactJob;

    /**
     * @var string
     */
    private $contactMobile;

    /**
     * @var string
     */
    private $contactFax;

    /**
     * @var string
     */
    private $contactAreaname;

    /**
     * @var string
     */
    private $contactAddress;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * @var string
     */
    private $contactQq;

    /**
     * @var string
     */
    private $contactPhone;

    /**
     * @var string
     */
    private $contactZipcode;

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
    private $userQuality;

    /**
     * @var integer
     */
    private $claim;


    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjZjxmContact
     */
    public function setZjxmId($zjxmId)
    {
        $this->zjxmId = $zjxmId;

        return $this;
    }

    /**
     * Get zjxmId
     *
     * @return integer 
     */
    public function getZjxmId()
    {
        return $this->zjxmId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjZjxmContact
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
     * Set contactUsername
     *
     * @param string $contactUsername
     * @return TrjZjxmContact
     */
    public function setContactUsername($contactUsername)
    {
        $this->contactUsername = $contactUsername;

        return $this;
    }

    /**
     * Get contactUsername
     *
     * @return string 
     */
    public function getContactUsername()
    {
        return $this->contactUsername;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjZjxmContact
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
     * @return TrjZjxmContact
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
     * Set contactCompany
     *
     * @param string $contactCompany
     * @return TrjZjxmContact
     */
    public function setContactCompany($contactCompany)
    {
        $this->contactCompany = $contactCompany;

        return $this;
    }

    /**
     * Get contactCompany
     *
     * @return string 
     */
    public function getContactCompany()
    {
        return $this->contactCompany;
    }

    /**
     * Set contactJob
     *
     * @param string $contactJob
     * @return TrjZjxmContact
     */
    public function setContactJob($contactJob)
    {
        $this->contactJob = $contactJob;

        return $this;
    }

    /**
     * Get contactJob
     *
     * @return string 
     */
    public function getContactJob()
    {
        return $this->contactJob;
    }

    /**
     * Set contactMobile
     *
     * @param string $contactMobile
     * @return TrjZjxmContact
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;

        return $this;
    }

    /**
     * Get contactMobile
     *
     * @return string 
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Set contactFax
     *
     * @param string $contactFax
     * @return TrjZjxmContact
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;

        return $this;
    }

    /**
     * Get contactFax
     *
     * @return string 
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Set contactAreaname
     *
     * @param string $contactAreaname
     * @return TrjZjxmContact
     */
    public function setContactAreaname($contactAreaname)
    {
        $this->contactAreaname = $contactAreaname;

        return $this;
    }

    /**
     * Get contactAreaname
     *
     * @return string 
     */
    public function getContactAreaname()
    {
        return $this->contactAreaname;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return TrjZjxmContact
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
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return TrjZjxmContact
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactQq
     *
     * @param string $contactQq
     * @return TrjZjxmContact
     */
    public function setContactQq($contactQq)
    {
        $this->contactQq = $contactQq;

        return $this;
    }

    /**
     * Get contactQq
     *
     * @return string 
     */
    public function getContactQq()
    {
        return $this->contactQq;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return TrjZjxmContact
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactZipcode
     *
     * @param string $contactZipcode
     * @return TrjZjxmContact
     */
    public function setContactZipcode($contactZipcode)
    {
        $this->contactZipcode = $contactZipcode;

        return $this;
    }

    /**
     * Get contactZipcode
     *
     * @return string 
     */
    public function getContactZipcode()
    {
        return $this->contactZipcode;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjZjxmContact
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
     * @return TrjZjxmContact
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
     * @return TrjZjxmContact
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
     * Set userQuality
     *
     * @param integer $userQuality
     * @return TrjZjxmContact
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
     * Set claim
     *
     * @param integer $claim
     * @return TrjZjxmContact
     */
    public function setClaim($claim)
    {
        $this->claim = $claim;

        return $this;
    }

    /**
     * Get claim
     *
     * @return integer 
     */
    public function getClaim()
    {
        return $this->claim;
    }
}
