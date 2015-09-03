<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjItemFeedback
 */
class TrjItemFeedback
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var string
     */
    private $itemTitle;

    /**
     * @var integer
     */
    private $itemType;

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
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $posterMobile;

    /**
     * @var integer
     */
    private $homepageId;

    /**
     * @var integer
     */
    private $flag;

    /**
     * @var integer
     */
    private $inboxDel;

    /**
     * @var integer
     */
    private $outboxDel;

    /**
     * @var integer
     */
    private $inboxEvaluate;

    /**
     * @var integer
     */
    private $outboxEvaluate;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $isSms;


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
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjItemFeedback
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
     * @return TrjItemFeedback
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
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjItemFeedback
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
     * Set feedId
     *
     * @param integer $feedId
     * @return TrjItemFeedback
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
     * @return TrjItemFeedback
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
     * @return TrjItemFeedback
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
     * Set poster
     *
     * @param string $poster
     * @return TrjItemFeedback
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
     * @return TrjItemFeedback
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
     * Set posterMobile
     *
     * @param string $posterMobile
     * @return TrjItemFeedback
     */
    public function setPosterMobile($posterMobile)
    {
        $this->posterMobile = $posterMobile;

        return $this;
    }

    /**
     * Get posterMobile
     *
     * @return string 
     */
    public function getPosterMobile()
    {
        return $this->posterMobile;
    }

    /**
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjItemFeedback
     */
    public function setHomepageId($homepageId)
    {
        $this->homepageId = $homepageId;

        return $this;
    }

    /**
     * Get homepageId
     *
     * @return integer 
     */
    public function getHomepageId()
    {
        return $this->homepageId;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjItemFeedback
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set inboxDel
     *
     * @param integer $inboxDel
     * @return TrjItemFeedback
     */
    public function setInboxDel($inboxDel)
    {
        $this->inboxDel = $inboxDel;

        return $this;
    }

    /**
     * Get inboxDel
     *
     * @return integer 
     */
    public function getInboxDel()
    {
        return $this->inboxDel;
    }

    /**
     * Set outboxDel
     *
     * @param integer $outboxDel
     * @return TrjItemFeedback
     */
    public function setOutboxDel($outboxDel)
    {
        $this->outboxDel = $outboxDel;

        return $this;
    }

    /**
     * Get outboxDel
     *
     * @return integer 
     */
    public function getOutboxDel()
    {
        return $this->outboxDel;
    }

    /**
     * Set inboxEvaluate
     *
     * @param integer $inboxEvaluate
     * @return TrjItemFeedback
     */
    public function setInboxEvaluate($inboxEvaluate)
    {
        $this->inboxEvaluate = $inboxEvaluate;

        return $this;
    }

    /**
     * Get inboxEvaluate
     *
     * @return integer 
     */
    public function getInboxEvaluate()
    {
        return $this->inboxEvaluate;
    }

    /**
     * Set outboxEvaluate
     *
     * @param integer $outboxEvaluate
     * @return TrjItemFeedback
     */
    public function setOutboxEvaluate($outboxEvaluate)
    {
        $this->outboxEvaluate = $outboxEvaluate;

        return $this;
    }

    /**
     * Get outboxEvaluate
     *
     * @return integer 
     */
    public function getOutboxEvaluate()
    {
        return $this->outboxEvaluate;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjItemFeedback
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
     * Set sort
     *
     * @param integer $sort
     * @return TrjItemFeedback
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjItemFeedback
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set isSms
     *
     * @param integer $isSms
     * @return TrjItemFeedback
     */
    public function setIsSms($isSms)
    {
        $this->isSms = $isSms;

        return $this;
    }

    /**
     * Get isSms
     *
     * @return integer 
     */
    public function getIsSms()
    {
        return $this->isSms;
    }
}
