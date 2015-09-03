<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersFollow
 */
class TrjUsersFollow
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $userId;

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
    private $homepageId;

    /**
     * @var string
     */
    private $homepageName;

    /**
     * @var integer
     */
    private $flag;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;


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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersFollow
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersFollow
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
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjUsersFollow
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
     * @return TrjUsersFollow
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
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjUsersFollow
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
     * Set homepageName
     *
     * @param string $homepageName
     * @return TrjUsersFollow
     */
    public function setHomepageName($homepageName)
    {
        $this->homepageName = $homepageName;

        return $this;
    }

    /**
     * Get homepageName
     *
     * @return string 
     */
    public function getHomepageName()
    {
        return $this->homepageName;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjUsersFollow
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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersFollow
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
     * @return TrjUsersFollow
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
}
