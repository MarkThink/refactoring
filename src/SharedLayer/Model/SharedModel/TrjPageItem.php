<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjPageItem
 */
class TrjPageItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $qid;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var string
     */
    private $itemTitle;

    /**
     * @var string
     */
    private $itemUrl;

    /**
     * @var string
     */
    private $itemContent;

    /**
     * @var string
     */
    private $itemFile;

    /**
     * @var integer
     */
    private $itemFileYun;

    /**
     * @var string
     */
    private $itemSpareFile;

    /**
     * @var integer
     */
    private $itemType;

    /**
     * @var integer
     */
    private $itemCid;

    /**
     * @var integer
     */
    private $itemSort;

    /**
     * @var string
     */
    private $itemOther;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $isLock;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $posterId;


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
     * Set qid
     *
     * @param integer $qid
     * @return TrjPageItem
     */
    public function setQid($qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return integer 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjPageItem
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set itemTitle
     *
     * @param string $itemTitle
     * @return TrjPageItem
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;

        return $this;
    }

    /**
     * Get itemTitle
     *
     * @return string 
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Set itemUrl
     *
     * @param string $itemUrl
     * @return TrjPageItem
     */
    public function setItemUrl($itemUrl)
    {
        $this->itemUrl = $itemUrl;

        return $this;
    }

    /**
     * Get itemUrl
     *
     * @return string 
     */
    public function getItemUrl()
    {
        return $this->itemUrl;
    }

    /**
     * Set itemContent
     *
     * @param string $itemContent
     * @return TrjPageItem
     */
    public function setItemContent($itemContent)
    {
        $this->itemContent = $itemContent;

        return $this;
    }

    /**
     * Get itemContent
     *
     * @return string 
     */
    public function getItemContent()
    {
        return $this->itemContent;
    }

    /**
     * Set itemFile
     *
     * @param string $itemFile
     * @return TrjPageItem
     */
    public function setItemFile($itemFile)
    {
        $this->itemFile = $itemFile;

        return $this;
    }

    /**
     * Get itemFile
     *
     * @return string 
     */
    public function getItemFile()
    {
        return $this->itemFile;
    }

    /**
     * Set itemFileYun
     *
     * @param integer $itemFileYun
     * @return TrjPageItem
     */
    public function setItemFileYun($itemFileYun)
    {
        $this->itemFileYun = $itemFileYun;

        return $this;
    }

    /**
     * Get itemFileYun
     *
     * @return integer 
     */
    public function getItemFileYun()
    {
        return $this->itemFileYun;
    }

    /**
     * Set itemSpareFile
     *
     * @param string $itemSpareFile
     * @return TrjPageItem
     */
    public function setItemSpareFile($itemSpareFile)
    {
        $this->itemSpareFile = $itemSpareFile;

        return $this;
    }

    /**
     * Get itemSpareFile
     *
     * @return string 
     */
    public function getItemSpareFile()
    {
        return $this->itemSpareFile;
    }

    /**
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjPageItem
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return integer 
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set itemCid
     *
     * @param integer $itemCid
     * @return TrjPageItem
     */
    public function setItemCid($itemCid)
    {
        $this->itemCid = $itemCid;

        return $this;
    }

    /**
     * Get itemCid
     *
     * @return integer 
     */
    public function getItemCid()
    {
        return $this->itemCid;
    }

    /**
     * Set itemSort
     *
     * @param integer $itemSort
     * @return TrjPageItem
     */
    public function setItemSort($itemSort)
    {
        $this->itemSort = $itemSort;

        return $this;
    }

    /**
     * Get itemSort
     *
     * @return integer 
     */
    public function getItemSort()
    {
        return $this->itemSort;
    }

    /**
     * Set itemOther
     *
     * @param string $itemOther
     * @return TrjPageItem
     */
    public function setItemOther($itemOther)
    {
        $this->itemOther = $itemOther;

        return $this;
    }

    /**
     * Get itemOther
     *
     * @return string 
     */
    public function getItemOther()
    {
        return $this->itemOther;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjPageItem
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
     * Set isLock
     *
     * @param integer $isLock
     * @return TrjPageItem
     */
    public function setIsLock($isLock)
    {
        $this->isLock = $isLock;

        return $this;
    }

    /**
     * Get isLock
     *
     * @return integer 
     */
    public function getIsLock()
    {
        return $this->isLock;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjPageItem
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
     * Set poster
     *
     * @param string $poster
     * @return TrjPageItem
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjPageItem
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
}
