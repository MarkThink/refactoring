<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersFeed
 */
class TrjUsersFeed
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $siteId;

    /**
     * @var integer
     */
    private $icon;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $bodyData;

    /**
     * @var string
     */
    private $feedMd5;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $flag;


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
     * Set siteId
     *
     * @param integer $siteId
     * @return TrjUsersFeed
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set icon
     *
     * @param integer $icon
     * @return TrjUsersFeed
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return integer 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersFeed
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set bodyData
     *
     * @param string $bodyData
     * @return TrjUsersFeed
     */
    public function setBodyData($bodyData)
    {
        $this->bodyData = $bodyData;

        return $this;
    }

    /**
     * Get bodyData
     *
     * @return string 
     */
    public function getBodyData()
    {
        return $this->bodyData;
    }

    /**
     * Set feedMd5
     *
     * @param string $feedMd5
     * @return TrjUsersFeed
     */
    public function setFeedMd5($feedMd5)
    {
        $this->feedMd5 = $feedMd5;

        return $this;
    }

    /**
     * Get feedMd5
     *
     * @return string 
     */
    public function getFeedMd5()
    {
        return $this->feedMd5;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersFeed
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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersFeed
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjUsersFeed
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
     * Set flag
     *
     * @param integer $flag
     * @return TrjUsersFeed
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
}
