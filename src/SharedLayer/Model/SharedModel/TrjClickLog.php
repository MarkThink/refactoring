<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjClickLog
 */
class TrjClickLog
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
    private $posterId;

    /**
     * @var integer
     */
    private $type;

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
     * @return TrjClickLog
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjClickLog
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
     * Set type
     *
     * @param integer $type
     * @return TrjClickLog
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
     * Set created
     *
     * @param integer $created
     * @return TrjClickLog
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
     * @return TrjClickLog
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
