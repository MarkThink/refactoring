<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCustomerTopic
 */
class TrjCustomerTopic
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
     * @var string
     */
    private $topBanner;

    /**
     * @var integer
     */
    private $topBannerHeight;

    /**
     * @var string
     */
    private $att;

    /**
     * @var integer
     */
    private $created;

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
    private $updated;

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
    private $isInit;

    /**
     * @var integer
     */
    private $isQueue;

    /**
     * @var integer
     */
    private $state;

    /**
     * @var string
     */
    private $createUrl;

    /**
     * @var integer
     */
    private $template;

    /**
     * @var string
     */
    private $sendConfig;


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
     * @return TrjCustomerTopic
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
     * Set topBanner
     *
     * @param string $topBanner
     * @return TrjCustomerTopic
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
     * @return TrjCustomerTopic
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
     * Set att
     *
     * @param string $att
     * @return TrjCustomerTopic
     */
    public function setAtt($att)
    {
        $this->att = $att;

        return $this;
    }

    /**
     * Get att
     *
     * @return string 
     */
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjCustomerTopic
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
     * Set createId
     *
     * @param integer $createId
     * @return TrjCustomerTopic
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
     * @return TrjCustomerTopic
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjCustomerTopic
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
     * Set sendtime
     *
     * @param integer $sendtime
     * @return TrjCustomerTopic
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
     * @return TrjCustomerTopic
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
     * Set isInit
     *
     * @param integer $isInit
     * @return TrjCustomerTopic
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
     * Set isQueue
     *
     * @param integer $isQueue
     * @return TrjCustomerTopic
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
     * Set state
     *
     * @param integer $state
     * @return TrjCustomerTopic
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
     * Set createUrl
     *
     * @param string $createUrl
     * @return TrjCustomerTopic
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
     * Set template
     *
     * @param integer $template
     * @return TrjCustomerTopic
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
     * Set sendConfig
     *
     * @param string $sendConfig
     * @return TrjCustomerTopic
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
}
