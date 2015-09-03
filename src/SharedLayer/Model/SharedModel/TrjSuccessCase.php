<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSuccessCase
 */
class TrjSuccessCase
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
    private $industry;

    /**
     * @var integer
     */
    private $product;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $postedTime;

    /**
     * @var integer
     */
    private $successTime;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $investor;

    /**
     * @var integer
     */
    private $pushTime;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var integer
     */
    private $isIndex;

    /**
     * @var integer
     */
    private $posterUid;

    /**
     * @var integer
     */
    private $shenheUid;

    /**
     * @var integer
     */
    private $shenheTime;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var integer
     */
    private $isdel;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var string
     */
    private $posterUsername;

    /**
     * @var string
     */
    private $shenheUsername;

    /**
     * @var integer
     */
    private $updateTime;


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
     * @return TrjSuccessCase
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
     * Set industry
     *
     * @param integer $industry
     * @return TrjSuccessCase
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return integer 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set product
     *
     * @param integer $product
     * @return TrjSuccessCase
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return TrjSuccessCase
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjSuccessCase
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
     * Set url
     *
     * @param string $url
     * @return TrjSuccessCase
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set postedTime
     *
     * @param integer $postedTime
     * @return TrjSuccessCase
     */
    public function setPostedTime($postedTime)
    {
        $this->postedTime = $postedTime;

        return $this;
    }

    /**
     * Get postedTime
     *
     * @return integer 
     */
    public function getPostedTime()
    {
        return $this->postedTime;
    }

    /**
     * Set successTime
     *
     * @param integer $successTime
     * @return TrjSuccessCase
     */
    public function setSuccessTime($successTime)
    {
        $this->successTime = $successTime;

        return $this;
    }

    /**
     * Get successTime
     *
     * @return integer 
     */
    public function getSuccessTime()
    {
        return $this->successTime;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return TrjSuccessCase
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set investor
     *
     * @param string $investor
     * @return TrjSuccessCase
     */
    public function setInvestor($investor)
    {
        $this->investor = $investor;

        return $this;
    }

    /**
     * Get investor
     *
     * @return string 
     */
    public function getInvestor()
    {
        return $this->investor;
    }

    /**
     * Set pushTime
     *
     * @param integer $pushTime
     * @return TrjSuccessCase
     */
    public function setPushTime($pushTime)
    {
        $this->pushTime = $pushTime;

        return $this;
    }

    /**
     * Get pushTime
     *
     * @return integer 
     */
    public function getPushTime()
    {
        return $this->pushTime;
    }

    /**
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjSuccessCase
     */
    public function setShenhe($shenhe)
    {
        $this->shenhe = $shenhe;

        return $this;
    }

    /**
     * Get shenhe
     *
     * @return integer 
     */
    public function getShenhe()
    {
        return $this->shenhe;
    }

    /**
     * Set isIndex
     *
     * @param integer $isIndex
     * @return TrjSuccessCase
     */
    public function setIsIndex($isIndex)
    {
        $this->isIndex = $isIndex;

        return $this;
    }

    /**
     * Get isIndex
     *
     * @return integer 
     */
    public function getIsIndex()
    {
        return $this->isIndex;
    }

    /**
     * Set posterUid
     *
     * @param integer $posterUid
     * @return TrjSuccessCase
     */
    public function setPosterUid($posterUid)
    {
        $this->posterUid = $posterUid;

        return $this;
    }

    /**
     * Get posterUid
     *
     * @return integer 
     */
    public function getPosterUid()
    {
        return $this->posterUid;
    }

    /**
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjSuccessCase
     */
    public function setShenheUid($shenheUid)
    {
        $this->shenheUid = $shenheUid;

        return $this;
    }

    /**
     * Get shenheUid
     *
     * @return integer 
     */
    public function getShenheUid()
    {
        return $this->shenheUid;
    }

    /**
     * Set shenheTime
     *
     * @param integer $shenheTime
     * @return TrjSuccessCase
     */
    public function setShenheTime($shenheTime)
    {
        $this->shenheTime = $shenheTime;

        return $this;
    }

    /**
     * Get shenheTime
     *
     * @return integer 
     */
    public function getShenheTime()
    {
        return $this->shenheTime;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrjSuccessCase
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjSuccessCase
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

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjSuccessCase
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set posterUsername
     *
     * @param string $posterUsername
     * @return TrjSuccessCase
     */
    public function setPosterUsername($posterUsername)
    {
        $this->posterUsername = $posterUsername;

        return $this;
    }

    /**
     * Get posterUsername
     *
     * @return string 
     */
    public function getPosterUsername()
    {
        return $this->posterUsername;
    }

    /**
     * Set shenheUsername
     *
     * @param string $shenheUsername
     * @return TrjSuccessCase
     */
    public function setShenheUsername($shenheUsername)
    {
        $this->shenheUsername = $shenheUsername;

        return $this;
    }

    /**
     * Get shenheUsername
     *
     * @return string 
     */
    public function getShenheUsername()
    {
        return $this->shenheUsername;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     * @return TrjSuccessCase
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return integer 
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
