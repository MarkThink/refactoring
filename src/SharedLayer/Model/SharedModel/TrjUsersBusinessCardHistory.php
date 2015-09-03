<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersBusinessCardHistory
 */
class TrjUsersBusinessCardHistory
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
     * @var integer
     */
    private $itemType;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var string
     */
    private $itemCompany;

    /**
     * @var integer
     */
    private $zjxmId;

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
    private $fromType;


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
     * @return TrjUsersBusinessCardHistory
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
     * @return TrjUsersBusinessCardHistory
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
     * @return TrjUsersBusinessCardHistory
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
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjUsersBusinessCardHistory
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
     * Set itemName
     *
     * @param string $itemName
     * @return TrjUsersBusinessCardHistory
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string 
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set itemCompany
     *
     * @param string $itemCompany
     * @return TrjUsersBusinessCardHistory
     */
    public function setItemCompany($itemCompany)
    {
        $this->itemCompany = $itemCompany;

        return $this;
    }

    /**
     * Get itemCompany
     *
     * @return string 
     */
    public function getItemCompany()
    {
        return $this->itemCompany;
    }

    /**
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjUsersBusinessCardHistory
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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersBusinessCardHistory
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
     * @return TrjUsersBusinessCardHistory
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
     * Set fromType
     *
     * @param integer $fromType
     * @return TrjUsersBusinessCardHistory
     */
    public function setFromType($fromType)
    {
        $this->fromType = $fromType;

        return $this;
    }

    /**
     * Get fromType
     *
     * @return integer 
     */
    public function getFromType()
    {
        return $this->fromType;
    }
}
