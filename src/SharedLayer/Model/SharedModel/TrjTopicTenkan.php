<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTopicTenkan
 */
class TrjTopicTenkan
{
    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var string
     */
    private $tkColumnIdStr;

    /**
     * @var integer
     */
    private $tkid;

    /**
     * @var integer
     */
    private $tkTemplate;

    /**
     * @var string
     */
    private $tkTitle2;

    /**
     * @var integer
     */
    private $tkIndustryId;

    /**
     * @var string
     */
    private $tkTopBanner;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var string
     */
    private $addUsername;


    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set tkColumnIdStr
     *
     * @param string $tkColumnIdStr
     * @return TrjTopicTenkan
     */
    public function setTkColumnIdStr($tkColumnIdStr)
    {
        $this->tkColumnIdStr = $tkColumnIdStr;

        return $this;
    }

    /**
     * Get tkColumnIdStr
     *
     * @return string 
     */
    public function getTkColumnIdStr()
    {
        return $this->tkColumnIdStr;
    }

    /**
     * Set tkid
     *
     * @param integer $tkid
     * @return TrjTopicTenkan
     */
    public function setTkid($tkid)
    {
        $this->tkid = $tkid;

        return $this;
    }

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
     * Set tkTemplate
     *
     * @param integer $tkTemplate
     * @return TrjTopicTenkan
     */
    public function setTkTemplate($tkTemplate)
    {
        $this->tkTemplate = $tkTemplate;

        return $this;
    }

    /**
     * Get tkTemplate
     *
     * @return integer 
     */
    public function getTkTemplate()
    {
        return $this->tkTemplate;
    }

    /**
     * Set tkTitle2
     *
     * @param string $tkTitle2
     * @return TrjTopicTenkan
     */
    public function setTkTitle2($tkTitle2)
    {
        $this->tkTitle2 = $tkTitle2;

        return $this;
    }

    /**
     * Get tkTitle2
     *
     * @return string 
     */
    public function getTkTitle2()
    {
        return $this->tkTitle2;
    }

    /**
     * Set tkIndustryId
     *
     * @param integer $tkIndustryId
     * @return TrjTopicTenkan
     */
    public function setTkIndustryId($tkIndustryId)
    {
        $this->tkIndustryId = $tkIndustryId;

        return $this;
    }

    /**
     * Get tkIndustryId
     *
     * @return integer 
     */
    public function getTkIndustryId()
    {
        return $this->tkIndustryId;
    }

    /**
     * Set tkTopBanner
     *
     * @param string $tkTopBanner
     * @return TrjTopicTenkan
     */
    public function setTkTopBanner($tkTopBanner)
    {
        $this->tkTopBanner = $tkTopBanner;

        return $this;
    }

    /**
     * Get tkTopBanner
     *
     * @return string 
     */
    public function getTkTopBanner()
    {
        return $this->tkTopBanner;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjTopicTenkan
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
     * Set addUsername
     *
     * @param string $addUsername
     * @return TrjTopicTenkan
     */
    public function setAddUsername($addUsername)
    {
        $this->addUsername = $addUsername;

        return $this;
    }

    /**
     * Get addUsername
     *
     * @return string 
     */
    public function getAddUsername()
    {
        return $this->addUsername;
    }
}
