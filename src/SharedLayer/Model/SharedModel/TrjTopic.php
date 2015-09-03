<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTopic
 */
class TrjTopic
{
    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $template;

    /**
     * @var string
     */
    private $templateUrl;

    /**
     * @var integer
     */
    private $columnMaxnum;

    /**
     * @var string
     */
    private $topBackgroundColor;

    /**
     * @var integer
     */
    private $shareTopPx;

    /**
     * @var integer
     */
    private $shareLeftPx;

    /**
     * @var string
     */
    private $shareFontColor;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var integer
     */
    private $thumbAid;

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
     * @var integer
     */
    private $topBannerYun;

    /**
     * @var string
     */
    private $attachment;

    /**
     * @var integer
     */
    private $industryId;

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
    private $queryType;

    /**
     * @var string
     */
    private $queryValue;

    /**
     * @var string
     */
    private $topicUsername;

    /**
     * @var integer
     */
    private $topicUid;

    /**
     * @var string
     */
    private $linkman;

    /**
     * @var integer
     */
    private $sex;

    /**
     * @var string
     */
    private $duty;

    /**
     * @var string
     */
    private $companyname;

    /**
     * @var string
     */
    private $companyAddr;

    /**
     * @var integer
     */
    private $isColumn;

    /**
     * @var integer
     */
    private $isTenkan;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $commentStatus;

    /**
     * @var integer
     */
    private $isBaidu;

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
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjTopic
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
     * Set template
     *
     * @param integer $template
     * @return TrjTopic
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
     * Set templateUrl
     *
     * @param string $templateUrl
     * @return TrjTopic
     */
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;

        return $this;
    }

    /**
     * Get templateUrl
     *
     * @return string 
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl;
    }

    /**
     * Set columnMaxnum
     *
     * @param integer $columnMaxnum
     * @return TrjTopic
     */
    public function setColumnMaxnum($columnMaxnum)
    {
        $this->columnMaxnum = $columnMaxnum;

        return $this;
    }

    /**
     * Get columnMaxnum
     *
     * @return integer 
     */
    public function getColumnMaxnum()
    {
        return $this->columnMaxnum;
    }

    /**
     * Set topBackgroundColor
     *
     * @param string $topBackgroundColor
     * @return TrjTopic
     */
    public function setTopBackgroundColor($topBackgroundColor)
    {
        $this->topBackgroundColor = $topBackgroundColor;

        return $this;
    }

    /**
     * Get topBackgroundColor
     *
     * @return string 
     */
    public function getTopBackgroundColor()
    {
        return $this->topBackgroundColor;
    }

    /**
     * Set shareTopPx
     *
     * @param integer $shareTopPx
     * @return TrjTopic
     */
    public function setShareTopPx($shareTopPx)
    {
        $this->shareTopPx = $shareTopPx;

        return $this;
    }

    /**
     * Get shareTopPx
     *
     * @return integer 
     */
    public function getShareTopPx()
    {
        return $this->shareTopPx;
    }

    /**
     * Set shareLeftPx
     *
     * @param integer $shareLeftPx
     * @return TrjTopic
     */
    public function setShareLeftPx($shareLeftPx)
    {
        $this->shareLeftPx = $shareLeftPx;

        return $this;
    }

    /**
     * Get shareLeftPx
     *
     * @return integer 
     */
    public function getShareLeftPx()
    {
        return $this->shareLeftPx;
    }

    /**
     * Set shareFontColor
     *
     * @param string $shareFontColor
     * @return TrjTopic
     */
    public function setShareFontColor($shareFontColor)
    {
        $this->shareFontColor = $shareFontColor;

        return $this;
    }

    /**
     * Get shareFontColor
     *
     * @return string 
     */
    public function getShareFontColor()
    {
        return $this->shareFontColor;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjTopic
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set thumbAid
     *
     * @param integer $thumbAid
     * @return TrjTopic
     */
    public function setThumbAid($thumbAid)
    {
        $this->thumbAid = $thumbAid;

        return $this;
    }

    /**
     * Get thumbAid
     *
     * @return integer 
     */
    public function getThumbAid()
    {
        return $this->thumbAid;
    }

    /**
     * Set topBanner
     *
     * @param string $topBanner
     * @return TrjTopic
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
     * @return TrjTopic
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
     * @return TrjTopic
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
     * Set topBannerYun
     *
     * @param integer $topBannerYun
     * @return TrjTopic
     */
    public function setTopBannerYun($topBannerYun)
    {
        $this->topBannerYun = $topBannerYun;

        return $this;
    }

    /**
     * Get topBannerYun
     *
     * @return integer 
     */
    public function getTopBannerYun()
    {
        return $this->topBannerYun;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return TrjTopic
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
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjTopic
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
     * Set seoTitle
     *
     * @param string $seoTitle
     * @return TrjTopic
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
     * @return TrjTopic
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
     * @return TrjTopic
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
     * Set queryType
     *
     * @param string $queryType
     * @return TrjTopic
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;

        return $this;
    }

    /**
     * Get queryType
     *
     * @return string 
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * Set queryValue
     *
     * @param string $queryValue
     * @return TrjTopic
     */
    public function setQueryValue($queryValue)
    {
        $this->queryValue = $queryValue;

        return $this;
    }

    /**
     * Get queryValue
     *
     * @return string 
     */
    public function getQueryValue()
    {
        return $this->queryValue;
    }

    /**
     * Set topicUsername
     *
     * @param string $topicUsername
     * @return TrjTopic
     */
    public function setTopicUsername($topicUsername)
    {
        $this->topicUsername = $topicUsername;

        return $this;
    }

    /**
     * Get topicUsername
     *
     * @return string 
     */
    public function getTopicUsername()
    {
        return $this->topicUsername;
    }

    /**
     * Set topicUid
     *
     * @param integer $topicUid
     * @return TrjTopic
     */
    public function setTopicUid($topicUid)
    {
        $this->topicUid = $topicUid;

        return $this;
    }

    /**
     * Get topicUid
     *
     * @return integer 
     */
    public function getTopicUid()
    {
        return $this->topicUid;
    }

    /**
     * Set linkman
     *
     * @param string $linkman
     * @return TrjTopic
     */
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;

        return $this;
    }

    /**
     * Get linkman
     *
     * @return string 
     */
    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return TrjTopic
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set duty
     *
     * @param string $duty
     * @return TrjTopic
     */
    public function setDuty($duty)
    {
        $this->duty = $duty;

        return $this;
    }

    /**
     * Get duty
     *
     * @return string 
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Set companyname
     *
     * @param string $companyname
     * @return TrjTopic
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
     * Set companyAddr
     *
     * @param string $companyAddr
     * @return TrjTopic
     */
    public function setCompanyAddr($companyAddr)
    {
        $this->companyAddr = $companyAddr;

        return $this;
    }

    /**
     * Get companyAddr
     *
     * @return string 
     */
    public function getCompanyAddr()
    {
        return $this->companyAddr;
    }

    /**
     * Set isColumn
     *
     * @param integer $isColumn
     * @return TrjTopic
     */
    public function setIsColumn($isColumn)
    {
        $this->isColumn = $isColumn;

        return $this;
    }

    /**
     * Get isColumn
     *
     * @return integer 
     */
    public function getIsColumn()
    {
        return $this->isColumn;
    }

    /**
     * Set isTenkan
     *
     * @param integer $isTenkan
     * @return TrjTopic
     */
    public function setIsTenkan($isTenkan)
    {
        $this->isTenkan = $isTenkan;

        return $this;
    }

    /**
     * Get isTenkan
     *
     * @return integer 
     */
    public function getIsTenkan()
    {
        return $this->isTenkan;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjTopic
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
     * Set commentStatus
     *
     * @param integer $commentStatus
     * @return TrjTopic
     */
    public function setCommentStatus($commentStatus)
    {
        $this->commentStatus = $commentStatus;

        return $this;
    }

    /**
     * Get commentStatus
     *
     * @return integer 
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * Set isBaidu
     *
     * @param integer $isBaidu
     * @return TrjTopic
     */
    public function setIsBaidu($isBaidu)
    {
        $this->isBaidu = $isBaidu;

        return $this;
    }

    /**
     * Get isBaidu
     *
     * @return integer 
     */
    public function getIsBaidu()
    {
        return $this->isBaidu;
    }

    /**
     * Set isGoodZjxm
     *
     * @param integer $isGoodZjxm
     * @return TrjTopic
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
     * @return TrjTopic
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
     * Set viewNum
     *
     * @param integer $viewNum
     * @return TrjTopic
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
     * @return TrjTopic
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
     * @return TrjTopic
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
     * @return TrjTopic
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
     * @return TrjTopic
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
}
