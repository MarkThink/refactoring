<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageLink
 */
class TrjHomepageLink
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $siteUrl;

    /**
     * @var string
     */
    private $siteName;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $created;


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
     * Set siteUrl
     *
     * @param string $siteUrl
     * @return TrjHomepageLink
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Get siteUrl
     *
     * @return string 
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set siteName
     *
     * @param string $siteName
     * @return TrjHomepageLink
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get siteName
     *
     * @return string 
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjHomepageLink
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
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepageLink
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
     * Set sort
     *
     * @param integer $sort
     * @return TrjHomepageLink
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
     * Set created
     *
     * @param integer $created
     * @return TrjHomepageLink
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
}
