<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjNews
 */
class TrjNews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $firstCatid;

    /**
     * @var integer
     */
    private $catid;

    /**
     * @var string
     */
    private $catcode;

    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var integer
     */
    private $industryId;

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
    private $styleColor;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $copyfrom;

    /**
     * @var string
     */
    private $copyurl;

    /**
     * @var integer
     */
    private $isHot;

    /**
     * @var integer
     */
    private $collectNum;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $hitsNum;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $downNum;

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
    private $updated;

    /**
     * @var integer
     */
    private $shenheTime;

    /**
     * @var integer
     */
    private $listorder;

    /**
     * @var integer
     */
    private $isCaiji;

    /**
     * @var integer
     */
    private $isIndex;

    /**
     * @var integer
     */
    private $isdel;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var integer
     */
    private $posterUid;

    /**
     * @var string
     */
    private $posterUsername;

    /**
     * @var integer
     */
    private $shenheUid;

    /**
     * @var string
     */
    private $shenheUsername;

    /**
     * @var integer
     */
    private $trjFlag;

    /**
     * @var integer
     */
    private $qrCodeFlag;


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
     * Set firstCatid
     *
     * @param integer $firstCatid
     * @return TrjNews
     */
    public function setFirstCatid($firstCatid)
    {
        $this->firstCatid = $firstCatid;

        return $this;
    }

    /**
     * Get firstCatid
     *
     * @return integer 
     */
    public function getFirstCatid()
    {
        return $this->firstCatid;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     * @return TrjNews
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set catcode
     *
     * @param string $catcode
     * @return TrjNews
     */
    public function setCatcode($catcode)
    {
        $this->catcode = $catcode;

        return $this;
    }

    /**
     * Get catcode
     *
     * @return string 
     */
    public function getCatcode()
    {
        return $this->catcode;
    }

    /**
     * Set orgId
     *
     * @param integer $orgId
     * @return TrjNews
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * Get orgId
     *
     * @return integer 
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjNews
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
     * Set title
     *
     * @param string $title
     * @return TrjNews
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
     * @return TrjNews
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
     * Set styleColor
     *
     * @param string $styleColor
     * @return TrjNews
     */
    public function setStyleColor($styleColor)
    {
        $this->styleColor = $styleColor;

        return $this;
    }

    /**
     * Get styleColor
     *
     * @return string 
     */
    public function getStyleColor()
    {
        return $this->styleColor;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return TrjNews
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjNews
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
     * Set keywords
     *
     * @param string $keywords
     * @return TrjNews
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
     * Set copyfrom
     *
     * @param string $copyfrom
     * @return TrjNews
     */
    public function setCopyfrom($copyfrom)
    {
        $this->copyfrom = $copyfrom;

        return $this;
    }

    /**
     * Get copyfrom
     *
     * @return string 
     */
    public function getCopyfrom()
    {
        return $this->copyfrom;
    }

    /**
     * Set copyurl
     *
     * @param string $copyurl
     * @return TrjNews
     */
    public function setCopyurl($copyurl)
    {
        $this->copyurl = $copyurl;

        return $this;
    }

    /**
     * Get copyurl
     *
     * @return string 
     */
    public function getCopyurl()
    {
        return $this->copyurl;
    }

    /**
     * Set isHot
     *
     * @param integer $isHot
     * @return TrjNews
     */
    public function setIsHot($isHot)
    {
        $this->isHot = $isHot;

        return $this;
    }

    /**
     * Get isHot
     *
     * @return integer 
     */
    public function getIsHot()
    {
        return $this->isHot;
    }

    /**
     * Set collectNum
     *
     * @param integer $collectNum
     * @return TrjNews
     */
    public function setCollectNum($collectNum)
    {
        $this->collectNum = $collectNum;

        return $this;
    }

    /**
     * Get collectNum
     *
     * @return integer 
     */
    public function getCollectNum()
    {
        return $this->collectNum;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjNews
     */
    public function setCommentNum($commentNum)
    {
        $this->commentNum = $commentNum;

        return $this;
    }

    /**
     * Get commentNum
     *
     * @return integer 
     */
    public function getCommentNum()
    {
        return $this->commentNum;
    }

    /**
     * Set hitsNum
     *
     * @param integer $hitsNum
     * @return TrjNews
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
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjNews
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
     * Set downNum
     *
     * @param integer $downNum
     * @return TrjNews
     */
    public function setDownNum($downNum)
    {
        $this->downNum = $downNum;

        return $this;
    }

    /**
     * Get downNum
     *
     * @return integer 
     */
    public function getDownNum()
    {
        return $this->downNum;
    }

    /**
     * Set viewNum
     *
     * @param integer $viewNum
     * @return TrjNews
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
     * @return TrjNews
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
     * @return TrjNews
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjNews
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
     * Set shenheTime
     *
     * @param integer $shenheTime
     * @return TrjNews
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
     * Set listorder
     *
     * @param integer $listorder
     * @return TrjNews
     */
    public function setListorder($listorder)
    {
        $this->listorder = $listorder;

        return $this;
    }

    /**
     * Get listorder
     *
     * @return integer 
     */
    public function getListorder()
    {
        return $this->listorder;
    }

    /**
     * Set isCaiji
     *
     * @param integer $isCaiji
     * @return TrjNews
     */
    public function setIsCaiji($isCaiji)
    {
        $this->isCaiji = $isCaiji;

        return $this;
    }

    /**
     * Get isCaiji
     *
     * @return integer 
     */
    public function getIsCaiji()
    {
        return $this->isCaiji;
    }

    /**
     * Set isIndex
     *
     * @param integer $isIndex
     * @return TrjNews
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
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjNews
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
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjNews
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
     * Set posterUid
     *
     * @param integer $posterUid
     * @return TrjNews
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
     * Set posterUsername
     *
     * @param string $posterUsername
     * @return TrjNews
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
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjNews
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
     * Set shenheUsername
     *
     * @param string $shenheUsername
     * @return TrjNews
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
     * Set trjFlag
     *
     * @param integer $trjFlag
     * @return TrjNews
     */
    public function setTrjFlag($trjFlag)
    {
        $this->trjFlag = $trjFlag;

        return $this;
    }

    /**
     * Get trjFlag
     *
     * @return integer 
     */
    public function getTrjFlag()
    {
        return $this->trjFlag;
    }

    /**
     * Set qrCodeFlag
     *
     * @param integer $qrCodeFlag
     * @return TrjNews
     */
    public function setQrCodeFlag($qrCodeFlag)
    {
        $this->qrCodeFlag = $qrCodeFlag;

        return $this;
    }

    /**
     * Get qrCodeFlag
     *
     * @return integer 
     */
    public function getQrCodeFlag()
    {
        return $this->qrCodeFlag;
    }
}
