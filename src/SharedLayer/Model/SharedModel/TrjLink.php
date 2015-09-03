<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjLink
 */
class TrjLink
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
     * @var string
     */
    private $siteName;

    /**
     * @var string
     */
    private $siteUrl;

    /**
     * @var string
     */
    private $siteLogo;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var integer
     */
    private $stat;

    /**
     * @var integer
     */
    private $examineId;

    /**
     * @var string
     */
    private $examineName;

    /**
     * @var integer
     */
    private $examineCreated;

    /**
     * @var string
     */
    private $des;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $contactMobile;

    /**
     * @var string
     */
    private $qq;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $isdel;


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
     * @return TrjLink
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
     * Set siteName
     *
     * @param string $siteName
     * @return TrjLink
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get siteName
     *
     * @return string 
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set siteUrl
     *
     * @param string $siteUrl
     * @return TrjLink
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Get siteUrl
     *
     * @return string 
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set siteLogo
     *
     * @param string $siteLogo
     * @return TrjLink
     */
    public function setSiteLogo($siteLogo)
    {
        $this->siteLogo = $siteLogo;

        return $this;
    }

    /**
     * Get siteLogo
     *
     * @return string 
     */
    public function getSiteLogo()
    {
        return $this->siteLogo;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjLink
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
     * Set status
     *
     * @param integer $status
     * @return TrjLink
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
     * Set type
     *
     * @param integer $type
     * @return TrjLink
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
     * Set position
     *
     * @param integer $position
     * @return TrjLink
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return TrjLink
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjLink
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjLink
     */
    public function setCreateId($createId)
    {
        $this->createId = $createId;

        return $this;
    }

    /**
     * Get createId
     *
     * @return integer 
     */
    public function getCreateId()
    {
        return $this->createId;
    }

    /**
     * Set createName
     *
     * @param string $createName
     * @return TrjLink
     */
    public function setCreateName($createName)
    {
        $this->createName = $createName;

        return $this;
    }

    /**
     * Get createName
     *
     * @return string 
     */
    public function getCreateName()
    {
        return $this->createName;
    }

    /**
     * Set stat
     *
     * @param integer $stat
     * @return TrjLink
     */
    public function setStat($stat)
    {
        $this->stat = $stat;

        return $this;
    }

    /**
     * Get stat
     *
     * @return integer 
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * Set examineId
     *
     * @param integer $examineId
     * @return TrjLink
     */
    public function setExamineId($examineId)
    {
        $this->examineId = $examineId;

        return $this;
    }

    /**
     * Get examineId
     *
     * @return integer 
     */
    public function getExamineId()
    {
        return $this->examineId;
    }

    /**
     * Set examineName
     *
     * @param string $examineName
     * @return TrjLink
     */
    public function setExamineName($examineName)
    {
        $this->examineName = $examineName;

        return $this;
    }

    /**
     * Get examineName
     *
     * @return string 
     */
    public function getExamineName()
    {
        return $this->examineName;
    }

    /**
     * Set examineCreated
     *
     * @param integer $examineCreated
     * @return TrjLink
     */
    public function setExamineCreated($examineCreated)
    {
        $this->examineCreated = $examineCreated;

        return $this;
    }

    /**
     * Get examineCreated
     *
     * @return integer 
     */
    public function getExamineCreated()
    {
        return $this->examineCreated;
    }

    /**
     * Set des
     *
     * @param string $des
     * @return TrjLink
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return string 
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return TrjLink
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
     * Set contactName
     *
     * @param string $contactName
     * @return TrjLink
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
     * Set contactMobile
     *
     * @param string $contactMobile
     * @return TrjLink
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
     * Set qq
     *
     * @param string $qq
     * @return TrjLink
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
     * Set address
     *
     * @param string $address
     * @return TrjLink
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjLink
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
