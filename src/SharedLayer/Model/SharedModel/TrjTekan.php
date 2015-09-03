<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTekan
 */
class TrjTekan
{
    /**
     * @var integer
     */
    private $tkid;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $title2;

    /**
     * @var string
     */
    private $videoUrl;

    /**
     * @var string
     */
    private $describe;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var string
     */
    private $companyname;

    /**
     * @var string
     */
    private $linkname;

    /**
     * @var string
     */
    private $linkUsername;

    /**
     * @var string
     */
    private $topBanner;

    /**
     * @var integer
     */
    private $topBannerHeight;

    /**
     * @var integer
     */
    private $topBannerAid;

    /**
     * @var string
     */
    private $attachment;

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
    private $sendtime;

    /**
     * @var integer
     */
    private $sendnum;

    /**
     * @var integer
     */
    private $isQueue;

    /**
     * @var integer
     */
    private $isInit;

    /**
     * @var integer
     */
    private $state;

    /**
     * @var integer
     */
    private $template;

    /**
     * @var integer
     */
    private $topBannerType;

    /**
     * @var string
     */
    private $createUrl;

    /**
     * @var string
     */
    private $sendConfig;

    /**
     * @var integer
     */
    private $sourceTopicId;


    /**
     * Get tkid
     *
     * @return integer 
     */
    public function getTkid()
    {
        return $this->tkid;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjTekan
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
     * @return TrjTekan
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
     * Set title
     *
     * @param string $title
     * @return TrjTekan
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
     * Set title2
     *
     * @param string $title2
     * @return TrjTekan
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return string 
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     * @return TrjTekan
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string 
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set describe
     *
     * @param string $describe
     * @return TrjTekan
     */
    public function setDescribe($describe)
    {
        $this->describe = $describe;

        return $this;
    }

    /**
     * Get describe
     *
     * @return string 
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjTekan
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
     * Set companyname
     *
     * @param string $companyname
     * @return TrjTekan
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string 
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set linkname
     *
     * @param string $linkname
     * @return TrjTekan
     */
    public function setLinkname($linkname)
    {
        $this->linkname = $linkname;

        return $this;
    }

    /**
     * Get linkname
     *
     * @return string 
     */
    public function getLinkname()
    {
        return $this->linkname;
    }

    /**
     * Set linkUsername
     *
     * @param string $linkUsername
     * @return TrjTekan
     */
    public function setLinkUsername($linkUsername)
    {
        $this->linkUsername = $linkUsername;

        return $this;
    }

    /**
     * Get linkUsername
     *
     * @return string 
     */
    public function getLinkUsername()
    {
        return $this->linkUsername;
    }

    /**
     * Set topBanner
     *
     * @param string $topBanner
     * @return TrjTekan
     */
    public function setTopBanner($topBanner)
    {
        $this->topBanner = $topBanner;

        return $this;
    }

    /**
     * Get topBanner
     *
     * @return string 
     */
    public function getTopBanner()
    {
        return $this->topBanner;
    }

    /**
     * Set topBannerHeight
     *
     * @param integer $topBannerHeight
     * @return TrjTekan
     */
    public function setTopBannerHeight($topBannerHeight)
    {
        $this->topBannerHeight = $topBannerHeight;

        return $this;
    }

    /**
     * Get topBannerHeight
     *
     * @return integer 
     */
    public function getTopBannerHeight()
    {
        return $this->topBannerHeight;
    }

    /**
     * Set topBannerAid
     *
     * @param integer $topBannerAid
     * @return TrjTekan
     */
    public function setTopBannerAid($topBannerAid)
    {
        $this->topBannerAid = $topBannerAid;

        return $this;
    }

    /**
     * Get topBannerAid
     *
     * @return integer 
     */
    public function getTopBannerAid()
    {
        return $this->topBannerAid;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return TrjTekan
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjTekan
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
     * @return TrjTekan
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
     * Set sendtime
     *
     * @param integer $sendtime
     * @return TrjTekan
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer 
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * Set sendnum
     *
     * @param integer $sendnum
     * @return TrjTekan
     */
    public function setSendnum($sendnum)
    {
        $this->sendnum = $sendnum;

        return $this;
    }

    /**
     * Get sendnum
     *
     * @return integer 
     */
    public function getSendnum()
    {
        return $this->sendnum;
    }

    /**
     * Set isQueue
     *
     * @param integer $isQueue
     * @return TrjTekan
     */
    public function setIsQueue($isQueue)
    {
        $this->isQueue = $isQueue;

        return $this;
    }

    /**
     * Get isQueue
     *
     * @return integer 
     */
    public function getIsQueue()
    {
        return $this->isQueue;
    }

    /**
     * Set isInit
     *
     * @param integer $isInit
     * @return TrjTekan
     */
    public function setIsInit($isInit)
    {
        $this->isInit = $isInit;

        return $this;
    }

    /**
     * Get isInit
     *
     * @return integer 
     */
    public function getIsInit()
    {
        return $this->isInit;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return TrjTekan
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set template
     *
     * @param integer $template
     * @return TrjTekan
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return integer 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set topBannerType
     *
     * @param integer $topBannerType
     * @return TrjTekan
     */
    public function setTopBannerType($topBannerType)
    {
        $this->topBannerType = $topBannerType;

        return $this;
    }

    /**
     * Get topBannerType
     *
     * @return integer 
     */
    public function getTopBannerType()
    {
        return $this->topBannerType;
    }

    /**
     * Set createUrl
     *
     * @param string $createUrl
     * @return TrjTekan
     */
    public function setCreateUrl($createUrl)
    {
        $this->createUrl = $createUrl;

        return $this;
    }

    /**
     * Get createUrl
     *
     * @return string 
     */
    public function getCreateUrl()
    {
        return $this->createUrl;
    }

    /**
     * Set sendConfig
     *
     * @param string $sendConfig
     * @return TrjTekan
     */
    public function setSendConfig($sendConfig)
    {
        $this->sendConfig = $sendConfig;

        return $this;
    }

    /**
     * Get sendConfig
     *
     * @return string 
     */
    public function getSendConfig()
    {
        return $this->sendConfig;
    }

    /**
     * Set sourceTopicId
     *
     * @param integer $sourceTopicId
     * @return TrjTekan
     */
    public function setSourceTopicId($sourceTopicId)
    {
        $this->sourceTopicId = $sourceTopicId;

        return $this;
    }

    /**
     * Get sourceTopicId
     *
     * @return integer 
     */
    public function getSourceTopicId()
    {
        return $this->sourceTopicId;
    }
}
