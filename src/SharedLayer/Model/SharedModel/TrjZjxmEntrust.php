<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmEntrust
 */
class TrjZjxmEntrust
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $refreshHour;

    /**
     * @var integer
     */
    private $refreshTime;

    /**
     * @var integer
     */
    private $refreshStart;

    /**
     * @var integer
     */
    private $refreshEnd;

    /**
     * @var integer
     */
    private $isDel;

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
     * Set userId
     *
     * @param integer $userId
     * @return TrjZjxmEntrust
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
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjZjxmEntrust
     */
    public function setZjxmId($zjxmId)
    {
        $this->zjxmId = $zjxmId;

        return $this;
    }

    /**
     * Get zjxmId
     *
     * @return integer 
     */
    public function getZjxmId()
    {
        return $this->zjxmId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return TrjZjxmEntrust
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set refreshHour
     *
     * @param integer $refreshHour
     * @return TrjZjxmEntrust
     */
    public function setRefreshHour($refreshHour)
    {
        $this->refreshHour = $refreshHour;

        return $this;
    }

    /**
     * Get refreshHour
     *
     * @return integer 
     */
    public function getRefreshHour()
    {
        return $this->refreshHour;
    }

    /**
     * Set refreshTime
     *
     * @param integer $refreshTime
     * @return TrjZjxmEntrust
     */
    public function setRefreshTime($refreshTime)
    {
        $this->refreshTime = $refreshTime;

        return $this;
    }

    /**
     * Get refreshTime
     *
     * @return integer 
     */
    public function getRefreshTime()
    {
        return $this->refreshTime;
    }

    /**
     * Set refreshStart
     *
     * @param integer $refreshStart
     * @return TrjZjxmEntrust
     */
    public function setRefreshStart($refreshStart)
    {
        $this->refreshStart = $refreshStart;

        return $this;
    }

    /**
     * Get refreshStart
     *
     * @return integer 
     */
    public function getRefreshStart()
    {
        return $this->refreshStart;
    }

    /**
     * Set refreshEnd
     *
     * @param integer $refreshEnd
     * @return TrjZjxmEntrust
     */
    public function setRefreshEnd($refreshEnd)
    {
        $this->refreshEnd = $refreshEnd;

        return $this;
    }

    /**
     * Get refreshEnd
     *
     * @return integer 
     */
    public function getRefreshEnd()
    {
        return $this->refreshEnd;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjZjxmEntrust
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmEntrust
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
