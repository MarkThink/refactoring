<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmQuick
 */
class TrjZjxmQuick
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $cat;

    /**
     * @var integer
     */
    private $valid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $overview;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var string
     */
    private $memberContact;

    /**
     * @var string
     */
    private $memberAccount;

    /**
     * @var integer
     */
    private $memberIp;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $fromMobile;

    /**
     * @var integer
     */
    private $isImport;

    /**
     * @var integer
     */
    private $isReg;

    /**
     * @var integer
     */
    private $isCrm;

    /**
     * @var string
     */
    private $trackid;

    /**
     * @var integer
     */
    private $isVip;

    /**
     * @var integer
     */
    private $saleStatus;

    /**
     * @var integer
     */
    private $minfoId;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $httpReferer;

    /**
     * @var integer
     */
    private $seoCat;


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
     * Set type
     *
     * @param integer $type
     * @return TrjZjxmQuick
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
     * Set cat
     *
     * @param integer $cat
     * @return TrjZjxmQuick
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return integer 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     * @return TrjZjxmQuick
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return integer 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjZjxmQuick
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set overview
     *
     * @param string $overview
     * @return TrjZjxmQuick
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * Get overview
     *
     * @return string 
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjZjxmQuick
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
     * Set memberContact
     *
     * @param string $memberContact
     * @return TrjZjxmQuick
     */
    public function setMemberContact($memberContact)
    {
        $this->memberContact = $memberContact;

        return $this;
    }

    /**
     * Get memberContact
     *
     * @return string 
     */
    public function getMemberContact()
    {
        return $this->memberContact;
    }

    /**
     * Set memberAccount
     *
     * @param string $memberAccount
     * @return TrjZjxmQuick
     */
    public function setMemberAccount($memberAccount)
    {
        $this->memberAccount = $memberAccount;

        return $this;
    }

    /**
     * Get memberAccount
     *
     * @return string 
     */
    public function getMemberAccount()
    {
        return $this->memberAccount;
    }

    /**
     * Set memberIp
     *
     * @param integer $memberIp
     * @return TrjZjxmQuick
     */
    public function setMemberIp($memberIp)
    {
        $this->memberIp = $memberIp;

        return $this;
    }

    /**
     * Get memberIp
     *
     * @return integer 
     */
    public function getMemberIp()
    {
        return $this->memberIp;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmQuick
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set fromMobile
     *
     * @param integer $fromMobile
     * @return TrjZjxmQuick
     */
    public function setFromMobile($fromMobile)
    {
        $this->fromMobile = $fromMobile;

        return $this;
    }

    /**
     * Get fromMobile
     *
     * @return integer 
     */
    public function getFromMobile()
    {
        return $this->fromMobile;
    }

    /**
     * Set isImport
     *
     * @param integer $isImport
     * @return TrjZjxmQuick
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
     * Set isReg
     *
     * @param integer $isReg
     * @return TrjZjxmQuick
     */
    public function setIsReg($isReg)
    {
        $this->isReg = $isReg;

        return $this;
    }

    /**
     * Get isReg
     *
     * @return integer 
     */
    public function getIsReg()
    {
        return $this->isReg;
    }

    /**
     * Set isCrm
     *
     * @param integer $isCrm
     * @return TrjZjxmQuick
     */
    public function setIsCrm($isCrm)
    {
        $this->isCrm = $isCrm;

        return $this;
    }

    /**
     * Get isCrm
     *
     * @return integer 
     */
    public function getIsCrm()
    {
        return $this->isCrm;
    }

    /**
     * Set trackid
     *
     * @param string $trackid
     * @return TrjZjxmQuick
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return string 
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * Set isVip
     *
     * @param integer $isVip
     * @return TrjZjxmQuick
     */
    public function setIsVip($isVip)
    {
        $this->isVip = $isVip;

        return $this;
    }

    /**
     * Get isVip
     *
     * @return integer 
     */
    public function getIsVip()
    {
        return $this->isVip;
    }

    /**
     * Set saleStatus
     *
     * @param integer $saleStatus
     * @return TrjZjxmQuick
     */
    public function setSaleStatus($saleStatus)
    {
        $this->saleStatus = $saleStatus;

        return $this;
    }

    /**
     * Get saleStatus
     *
     * @return integer 
     */
    public function getSaleStatus()
    {
        return $this->saleStatus;
    }

    /**
     * Set minfoId
     *
     * @param integer $minfoId
     * @return TrjZjxmQuick
     */
    public function setMinfoId($minfoId)
    {
        $this->minfoId = $minfoId;

        return $this;
    }

    /**
     * Get minfoId
     *
     * @return integer 
     */
    public function getMinfoId()
    {
        return $this->minfoId;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return TrjZjxmQuick
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrjZjxmQuick
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string 
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set seoCat
     *
     * @param integer $seoCat
     * @return TrjZjxmQuick
     */
    public function setSeoCat($seoCat)
    {
        $this->seoCat = $seoCat;

        return $this;
    }

    /**
     * Get seoCat
     *
     * @return integer 
     */
    public function getSeoCat()
    {
        return $this->seoCat;
    }
}
