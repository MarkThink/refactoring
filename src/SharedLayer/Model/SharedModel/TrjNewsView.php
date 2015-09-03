<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjNewsView
 */
class TrjNewsView
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
    private $newsId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $updated;

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
     * @return TrjNewsView
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
     * Set newsId
     *
     * @param integer $newsId
     * @return TrjNewsView
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjNewsView
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjNewsView
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjNewsView
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
