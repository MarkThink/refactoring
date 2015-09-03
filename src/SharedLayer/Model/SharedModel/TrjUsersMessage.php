<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersMessage
 */
class TrjUsersMessage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $initialId;

    /**
     * @var string
     */
    private $initial;

    /**
     * @var integer
     */
    private $initialType;

    /**
     * @var integer
     */
    private $receiverId;

    /**
     * @var string
     */
    private $receiver;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $infoId;

    /**
     * @var integer
     */
    private $seed;

    /**
     * @var integer
     */
    private $posttime;

    /**
     * @var integer
     */
    private $ipAddress;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return TrjUsersMessage
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjUsersMessage
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
     * Set initialId
     *
     * @param integer $initialId
     * @return TrjUsersMessage
     */
    public function setInitialId($initialId)
    {
        $this->initialId = $initialId;

        return $this;
    }

    /**
     * Get initialId
     *
     * @return integer 
     */
    public function getInitialId()
    {
        return $this->initialId;
    }

    /**
     * Set initial
     *
     * @param string $initial
     * @return TrjUsersMessage
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * Get initial
     *
     * @return string 
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Set initialType
     *
     * @param integer $initialType
     * @return TrjUsersMessage
     */
    public function setInitialType($initialType)
    {
        $this->initialType = $initialType;

        return $this;
    }

    /**
     * Get initialType
     *
     * @return integer 
     */
    public function getInitialType()
    {
        return $this->initialType;
    }

    /**
     * Set receiverId
     *
     * @param integer $receiverId
     * @return TrjUsersMessage
     */
    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    /**
     * Get receiverId
     *
     * @return integer 
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     * @return TrjUsersMessage
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrjUsersMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set infoId
     *
     * @param string $infoId
     * @return TrjUsersMessage
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return string 
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set seed
     *
     * @param integer $seed
     * @return TrjUsersMessage
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;

        return $this;
    }

    /**
     * Get seed
     *
     * @return integer 
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Set posttime
     *
     * @param integer $posttime
     * @return TrjUsersMessage
     */
    public function setPosttime($posttime)
    {
        $this->posttime = $posttime;

        return $this;
    }

    /**
     * Get posttime
     *
     * @return integer 
     */
    public function getPosttime()
    {
        return $this->posttime;
    }

    /**
     * Set ipAddress
     *
     * @param integer $ipAddress
     * @return TrjUsersMessage
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return integer 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjUsersMessage
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
