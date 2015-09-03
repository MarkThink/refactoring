<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersCollect
 */
class TrjUsersCollect
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
    private $homepageId;

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
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjUsersCollect
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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersCollect
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
     * @return TrjUsersCollect
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
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjUsersCollect
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
     * @return TrjUsersCollect
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
     * @return TrjUsersCollect
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
     * @return TrjUsersCollect
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
