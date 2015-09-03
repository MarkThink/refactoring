<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSalonTopic
 */
class TrjSalonTopic
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $temp;

    /**
     * @var string
     */
    private $banner;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $pageKeywords;

    /**
     * @var string
     */
    private $pageDescription;

    /**
     * @var string
     */
    private $bmTitle;

    /**
     * @var string
     */
    private $bmUrl;

    /**
     * @var integer
     */
    private $bmAid;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var integer
     */
    private $status;

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
    private $created;


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
     * Set title
     *
     * @param string $title
     * @return TrjSalonTopic
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
     * Set temp
     *
     * @param integer $temp
     * @return TrjSalonTopic
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return integer 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return TrjSalonTopic
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
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return TrjSalonTopic
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string 
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageKeywords
     *
     * @param string $pageKeywords
     * @return TrjSalonTopic
     */
    public function setPageKeywords($pageKeywords)
    {
        $this->pageKeywords = $pageKeywords;

        return $this;
    }

    /**
     * Get pageKeywords
     *
     * @return string 
     */
    public function getPageKeywords()
    {
        return $this->pageKeywords;
    }

    /**
     * Set pageDescription
     *
     * @param string $pageDescription
     * @return TrjSalonTopic
     */
    public function setPageDescription($pageDescription)
    {
        $this->pageDescription = $pageDescription;

        return $this;
    }

    /**
     * Get pageDescription
     *
     * @return string 
     */
    public function getPageDescription()
    {
        return $this->pageDescription;
    }

    /**
     * Set bmTitle
     *
     * @param string $bmTitle
     * @return TrjSalonTopic
     */
    public function setBmTitle($bmTitle)
    {
        $this->bmTitle = $bmTitle;

        return $this;
    }

    /**
     * Get bmTitle
     *
     * @return string 
     */
    public function getBmTitle()
    {
        return $this->bmTitle;
    }

    /**
     * Set bmUrl
     *
     * @param string $bmUrl
     * @return TrjSalonTopic
     */
    public function setBmUrl($bmUrl)
    {
        $this->bmUrl = $bmUrl;

        return $this;
    }

    /**
     * Get bmUrl
     *
     * @return string 
     */
    public function getBmUrl()
    {
        return $this->bmUrl;
    }

    /**
     * Set bmAid
     *
     * @param integer $bmAid
     * @return TrjSalonTopic
     */
    public function setBmAid($bmAid)
    {
        $this->bmAid = $bmAid;

        return $this;
    }

    /**
     * Get bmAid
     *
     * @return integer 
     */
    public function getBmAid()
    {
        return $this->bmAid;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjSalonTopic
     */
    public function setClickNum($clickNum)
    {
        $this->clickNum = $clickNum;

        return $this;
    }

    /**
     * Get clickNum
     *
     * @return integer 
     */
    public function getClickNum()
    {
        return $this->clickNum;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return TrjSalonTopic
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjSalonTopic
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
     * Set createId
     *
     * @param integer $createId
     * @return TrjSalonTopic
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
     * @return TrjSalonTopic
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
     * Set created
     *
     * @param integer $created
     * @return TrjSalonTopic
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
}
