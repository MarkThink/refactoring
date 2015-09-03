<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjPublicTopic
 */
class TrjPublicTopic
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $seoTitle;

    /**
     * @var string
     */
    private $seoKeywords;

    /**
     * @var string
     */
    private $seoDescription;

    /**
     * @var string
     */
    private $topBanner;

    /**
     * @var integer
     */
    private $topBannerAid;

    /**
     * @var string
     */
    private $topBannerText;

    /**
     * @var integer
     */
    private $isTopShow;

    /**
     * @var integer
     */
    private $isTopBannerImage;

    /**
     * @var integer
     */
    private $isTopBannerText;

    /**
     * @var integer
     */
    private $isGoodZjxm;

    /**
     * @var integer
     */
    private $goodTime;

    /**
     * @var integer
     */
    private $hitsNum;

    /**
     * @var integer
     */
    private $viewNum;

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
    private $posterId;

    /**
     * @var string
     */
    private $posterName;

    /**
     * @var integer
     */
    private $isImport;


    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjPublicTopic
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
     * Set seoTitle
     *
     * @param string $seoTitle
     * @return TrjPublicTopic
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string 
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return TrjPublicTopic
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string 
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     * @return TrjPublicTopic
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string 
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set topBanner
     *
     * @param string $topBanner
     * @return TrjPublicTopic
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
     * Set topBannerAid
     *
     * @param integer $topBannerAid
     * @return TrjPublicTopic
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
     * Set topBannerText
     *
     * @param string $topBannerText
     * @return TrjPublicTopic
     */
    public function setTopBannerText($topBannerText)
    {
        $this->topBannerText = $topBannerText;

        return $this;
    }

    /**
     * Get topBannerText
     *
     * @return string 
     */
    public function getTopBannerText()
    {
        return $this->topBannerText;
    }

    /**
     * Set isTopShow
     *
     * @param integer $isTopShow
     * @return TrjPublicTopic
     */
    public function setIsTopShow($isTopShow)
    {
        $this->isTopShow = $isTopShow;

        return $this;
    }

    /**
     * Get isTopShow
     *
     * @return integer 
     */
    public function getIsTopShow()
    {
        return $this->isTopShow;
    }

    /**
     * Set isTopBannerImage
     *
     * @param integer $isTopBannerImage
     * @return TrjPublicTopic
     */
    public function setIsTopBannerImage($isTopBannerImage)
    {
        $this->isTopBannerImage = $isTopBannerImage;

        return $this;
    }

    /**
     * Get isTopBannerImage
     *
     * @return integer 
     */
    public function getIsTopBannerImage()
    {
        return $this->isTopBannerImage;
    }

    /**
     * Set isTopBannerText
     *
     * @param integer $isTopBannerText
     * @return TrjPublicTopic
     */
    public function setIsTopBannerText($isTopBannerText)
    {
        $this->isTopBannerText = $isTopBannerText;

        return $this;
    }

    /**
     * Get isTopBannerText
     *
     * @return integer 
     */
    public function getIsTopBannerText()
    {
        return $this->isTopBannerText;
    }

    /**
     * Set isGoodZjxm
     *
     * @param integer $isGoodZjxm
     * @return TrjPublicTopic
     */
    public function setIsGoodZjxm($isGoodZjxm)
    {
        $this->isGoodZjxm = $isGoodZjxm;

        return $this;
    }

    /**
     * Get isGoodZjxm
     *
     * @return integer 
     */
    public function getIsGoodZjxm()
    {
        return $this->isGoodZjxm;
    }

    /**
     * Set goodTime
     *
     * @param integer $goodTime
     * @return TrjPublicTopic
     */
    public function setGoodTime($goodTime)
    {
        $this->goodTime = $goodTime;

        return $this;
    }

    /**
     * Get goodTime
     *
     * @return integer 
     */
    public function getGoodTime()
    {
        return $this->goodTime;
    }

    /**
     * Set hitsNum
     *
     * @param integer $hitsNum
     * @return TrjPublicTopic
     */
    public function setHitsNum($hitsNum)
    {
        $this->hitsNum = $hitsNum;

        return $this;
    }

    /**
     * Get hitsNum
     *
     * @return integer 
     */
    public function getHitsNum()
    {
        return $this->hitsNum;
    }

    /**
     * Set viewNum
     *
     * @param integer $viewNum
     * @return TrjPublicTopic
     */
    public function setViewNum($viewNum)
    {
        $this->viewNum = $viewNum;

        return $this;
    }

    /**
     * Get viewNum
     *
     * @return integer 
     */
    public function getViewNum()
    {
        return $this->viewNum;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjPublicTopic
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
     * @return TrjPublicTopic
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjPublicTopic
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set posterName
     *
     * @param string $posterName
     * @return TrjPublicTopic
     */
    public function setPosterName($posterName)
    {
        $this->posterName = $posterName;

        return $this;
    }

    /**
     * Get posterName
     *
     * @return string 
     */
    public function getPosterName()
    {
        return $this->posterName;
    }

    /**
     * Set isImport
     *
     * @param integer $isImport
     * @return TrjPublicTopic
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
}
