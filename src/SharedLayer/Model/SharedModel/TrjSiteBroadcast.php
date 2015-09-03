<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSiteBroadcast
 */
class TrjSiteBroadcast
{
    /**
     * @var integer
     */
    private $bid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $styleColor;

    /**
     * @var string
     */
    private $titleUrl;

    /**
     * @var integer
     */
    private $zjxmCatId;

    /**
     * @var string
     */
    private $zjxmCatName;

    /**
     * @var integer
     */
    private $broadType;

    /**
     * @var integer
     */
    private $isDefault;

    /**
     * @var integer
     */
    private $useStatus;

    /**
     * @var integer
     */
    private $beginTime;

    /**
     * @var integer
     */
    private $endTime;

    /**
     * @var integer
     */
    private $listorder;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var integer
     */
    private $hitnum;

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
    private $createId;

    /**
     * @var string
     */
    private $createName;


    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjSiteBroadcast
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
     * Set styleColor
     *
     * @param string $styleColor
     * @return TrjSiteBroadcast
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
     * Set titleUrl
     *
     * @param string $titleUrl
     * @return TrjSiteBroadcast
     */
    public function setTitleUrl($titleUrl)
    {
        $this->titleUrl = $titleUrl;

        return $this;
    }

    /**
     * Get titleUrl
     *
     * @return string 
     */
    public function getTitleUrl()
    {
        return $this->titleUrl;
    }

    /**
     * Set zjxmCatId
     *
     * @param integer $zjxmCatId
     * @return TrjSiteBroadcast
     */
    public function setZjxmCatId($zjxmCatId)
    {
        $this->zjxmCatId = $zjxmCatId;

        return $this;
    }

    /**
     * Get zjxmCatId
     *
     * @return integer 
     */
    public function getZjxmCatId()
    {
        return $this->zjxmCatId;
    }

    /**
     * Set zjxmCatName
     *
     * @param string $zjxmCatName
     * @return TrjSiteBroadcast
     */
    public function setZjxmCatName($zjxmCatName)
    {
        $this->zjxmCatName = $zjxmCatName;

        return $this;
    }

    /**
     * Get zjxmCatName
     *
     * @return string 
     */
    public function getZjxmCatName()
    {
        return $this->zjxmCatName;
    }

    /**
     * Set broadType
     *
     * @param integer $broadType
     * @return TrjSiteBroadcast
     */
    public function setBroadType($broadType)
    {
        $this->broadType = $broadType;

        return $this;
    }

    /**
     * Get broadType
     *
     * @return integer 
     */
    public function getBroadType()
    {
        return $this->broadType;
    }

    /**
     * Set isDefault
     *
     * @param integer $isDefault
     * @return TrjSiteBroadcast
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return integer 
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set useStatus
     *
     * @param integer $useStatus
     * @return TrjSiteBroadcast
     */
    public function setUseStatus($useStatus)
    {
        $this->useStatus = $useStatus;

        return $this;
    }

    /**
     * Get useStatus
     *
     * @return integer 
     */
    public function getUseStatus()
    {
        return $this->useStatus;
    }

    /**
     * Set beginTime
     *
     * @param integer $beginTime
     * @return TrjSiteBroadcast
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;

        return $this;
    }

    /**
     * Get beginTime
     *
     * @return integer 
     */
    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     * @return TrjSiteBroadcast
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set listorder
     *
     * @param integer $listorder
     * @return TrjSiteBroadcast
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
     * Set memo
     *
     * @param string $memo
     * @return TrjSiteBroadcast
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set hitnum
     *
     * @param integer $hitnum
     * @return TrjSiteBroadcast
     */
    public function setHitnum($hitnum)
    {
        $this->hitnum = $hitnum;

        return $this;
    }

    /**
     * Get hitnum
     *
     * @return integer 
     */
    public function getHitnum()
    {
        return $this->hitnum;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjSiteBroadcast
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
     * @return TrjSiteBroadcast
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
     * Set createId
     *
     * @param integer $createId
     * @return TrjSiteBroadcast
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
     * @return TrjSiteBroadcast
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
}
