<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrderDelivery
 */
class TrjOrderDelivery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $orderId;

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
    private $itemMobile;

    /**
     * @var integer
     */
    private $itemCatPid;

    /**
     * @var integer
     */
    private $itemType;

    /**
     * @var integer
     */
    private $itemUid;

    /**
     * @var string
     */
    private $itemUname;

    /**
     * @var string
     */
    private $itemContactSex;

    /**
     * @var integer
     */
    private $feedId;

    /**
     * @var string
     */
    private $feedTitle;

    /**
     * @var integer
     */
    private $feedType;

    /**
     * @var integer
     */
    private $feedCatPid;

    /**
     * @var string
     */
    private $feedUname;

    /**
     * @var integer
     */
    private $feedUid;

    /**
     * @var string
     */
    private $feedMobile;

    /**
     * @var string
     */
    private $feedContactSex;


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
     * Set orderId
     *
     * @param integer $orderId
     * @return TrjOrderDelivery
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjOrderDelivery
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
     * @return TrjOrderDelivery
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
     * Set itemMobile
     *
     * @param string $itemMobile
     * @return TrjOrderDelivery
     */
    public function setItemMobile($itemMobile)
    {
        $this->itemMobile = $itemMobile;

        return $this;
    }

    /**
     * Get itemMobile
     *
     * @return string 
     */
    public function getItemMobile()
    {
        return $this->itemMobile;
    }

    /**
     * Set itemCatPid
     *
     * @param integer $itemCatPid
     * @return TrjOrderDelivery
     */
    public function setItemCatPid($itemCatPid)
    {
        $this->itemCatPid = $itemCatPid;

        return $this;
    }

    /**
     * Get itemCatPid
     *
     * @return integer 
     */
    public function getItemCatPid()
    {
        return $this->itemCatPid;
    }

    /**
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjOrderDelivery
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
     * Set itemUid
     *
     * @param integer $itemUid
     * @return TrjOrderDelivery
     */
    public function setItemUid($itemUid)
    {
        $this->itemUid = $itemUid;

        return $this;
    }

    /**
     * Get itemUid
     *
     * @return integer 
     */
    public function getItemUid()
    {
        return $this->itemUid;
    }

    /**
     * Set itemUname
     *
     * @param string $itemUname
     * @return TrjOrderDelivery
     */
    public function setItemUname($itemUname)
    {
        $this->itemUname = $itemUname;

        return $this;
    }

    /**
     * Get itemUname
     *
     * @return string 
     */
    public function getItemUname()
    {
        return $this->itemUname;
    }

    /**
     * Set itemContactSex
     *
     * @param string $itemContactSex
     * @return TrjOrderDelivery
     */
    public function setItemContactSex($itemContactSex)
    {
        $this->itemContactSex = $itemContactSex;

        return $this;
    }

    /**
     * Get itemContactSex
     *
     * @return string 
     */
    public function getItemContactSex()
    {
        return $this->itemContactSex;
    }

    /**
     * Set feedId
     *
     * @param integer $feedId
     * @return TrjOrderDelivery
     */
    public function setFeedId($feedId)
    {
        $this->feedId = $feedId;

        return $this;
    }

    /**
     * Get feedId
     *
     * @return integer 
     */
    public function getFeedId()
    {
        return $this->feedId;
    }

    /**
     * Set feedTitle
     *
     * @param string $feedTitle
     * @return TrjOrderDelivery
     */
    public function setFeedTitle($feedTitle)
    {
        $this->feedTitle = $feedTitle;

        return $this;
    }

    /**
     * Get feedTitle
     *
     * @return string 
     */
    public function getFeedTitle()
    {
        return $this->feedTitle;
    }

    /**
     * Set feedType
     *
     * @param integer $feedType
     * @return TrjOrderDelivery
     */
    public function setFeedType($feedType)
    {
        $this->feedType = $feedType;

        return $this;
    }

    /**
     * Get feedType
     *
     * @return integer 
     */
    public function getFeedType()
    {
        return $this->feedType;
    }

    /**
     * Set feedCatPid
     *
     * @param integer $feedCatPid
     * @return TrjOrderDelivery
     */
    public function setFeedCatPid($feedCatPid)
    {
        $this->feedCatPid = $feedCatPid;

        return $this;
    }

    /**
     * Get feedCatPid
     *
     * @return integer 
     */
    public function getFeedCatPid()
    {
        return $this->feedCatPid;
    }

    /**
     * Set feedUname
     *
     * @param string $feedUname
     * @return TrjOrderDelivery
     */
    public function setFeedUname($feedUname)
    {
        $this->feedUname = $feedUname;

        return $this;
    }

    /**
     * Get feedUname
     *
     * @return string 
     */
    public function getFeedUname()
    {
        return $this->feedUname;
    }

    /**
     * Set feedUid
     *
     * @param integer $feedUid
     * @return TrjOrderDelivery
     */
    public function setFeedUid($feedUid)
    {
        $this->feedUid = $feedUid;

        return $this;
    }

    /**
     * Get feedUid
     *
     * @return integer 
     */
    public function getFeedUid()
    {
        return $this->feedUid;
    }

    /**
     * Set feedMobile
     *
     * @param string $feedMobile
     * @return TrjOrderDelivery
     */
    public function setFeedMobile($feedMobile)
    {
        $this->feedMobile = $feedMobile;

        return $this;
    }

    /**
     * Get feedMobile
     *
     * @return string 
     */
    public function getFeedMobile()
    {
        return $this->feedMobile;
    }

    /**
     * Set feedContactSex
     *
     * @param string $feedContactSex
     * @return TrjOrderDelivery
     */
    public function setFeedContactSex($feedContactSex)
    {
        $this->feedContactSex = $feedContactSex;

        return $this;
    }

    /**
     * Get feedContactSex
     *
     * @return string 
     */
    public function getFeedContactSex()
    {
        return $this->feedContactSex;
    }
}
