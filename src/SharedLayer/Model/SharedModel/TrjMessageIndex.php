<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMessageIndex
 */
class TrjMessageIndex
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $senderUid;

    /**
     * @var integer
     */
    private $senderType;

    /**
     * @var integer
     */
    private $receiverUid;

    /**
     * @var integer
     */
    private $receiverType;

    /**
     * @var integer
     */
    private $messageType;

    /**
     * @var integer
     */
    private $readStatus;

    /**
     * @var integer
     */
    private $messageId;

    /**
     * @var integer
     */
    private $sourceType;

    /**
     * @var integer
     */
    private $sourceId;

    /**
     * @var string
     */
    private $sourceName;

    /**
     * @var integer
     */
    private $isReply;

    /**
     * @var integer
     */
    private $createdTime;

    /**
     * @var integer
     */
    private $lastUpdatedTime;

    /**
     * @var integer
     */
    private $status;


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
     * Set senderUid
     *
     * @param integer $senderUid
     * @return TrjMessageIndex
     */
    public function setSenderUid($senderUid)
    {
        $this->senderUid = $senderUid;

        return $this;
    }

    /**
     * Get senderUid
     *
     * @return integer 
     */
    public function getSenderUid()
    {
        return $this->senderUid;
    }

    /**
     * Set senderType
     *
     * @param integer $senderType
     * @return TrjMessageIndex
     */
    public function setSenderType($senderType)
    {
        $this->senderType = $senderType;

        return $this;
    }

    /**
     * Get senderType
     *
     * @return integer 
     */
    public function getSenderType()
    {
        return $this->senderType;
    }

    /**
     * Set receiverUid
     *
     * @param integer $receiverUid
     * @return TrjMessageIndex
     */
    public function setReceiverUid($receiverUid)
    {
        $this->receiverUid = $receiverUid;

        return $this;
    }

    /**
     * Get receiverUid
     *
     * @return integer 
     */
    public function getReceiverUid()
    {
        return $this->receiverUid;
    }

    /**
     * Set receiverType
     *
     * @param integer $receiverType
     * @return TrjMessageIndex
     */
    public function setReceiverType($receiverType)
    {
        $this->receiverType = $receiverType;

        return $this;
    }

    /**
     * Get receiverType
     *
     * @return integer 
     */
    public function getReceiverType()
    {
        return $this->receiverType;
    }

    /**
     * Set messageType
     *
     * @param integer $messageType
     * @return TrjMessageIndex
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * Get messageType
     *
     * @return integer 
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Set readStatus
     *
     * @param integer $readStatus
     * @return TrjMessageIndex
     */
    public function setReadStatus($readStatus)
    {
        $this->readStatus = $readStatus;

        return $this;
    }

    /**
     * Get readStatus
     *
     * @return integer 
     */
    public function getReadStatus()
    {
        return $this->readStatus;
    }

    /**
     * Set messageId
     *
     * @param integer $messageId
     * @return TrjMessageIndex
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set sourceType
     *
     * @param integer $sourceType
     * @return TrjMessageIndex
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * Get sourceType
     *
     * @return integer 
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set sourceId
     *
     * @param integer $sourceId
     * @return TrjMessageIndex
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * Get sourceId
     *
     * @return integer 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set sourceName
     *
     * @param string $sourceName
     * @return TrjMessageIndex
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    /**
     * Get sourceName
     *
     * @return string 
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * Set isReply
     *
     * @param integer $isReply
     * @return TrjMessageIndex
     */
    public function setIsReply($isReply)
    {
        $this->isReply = $isReply;

        return $this;
    }

    /**
     * Get isReply
     *
     * @return integer 
     */
    public function getIsReply()
    {
        return $this->isReply;
    }

    /**
     * Set createdTime
     *
     * @param integer $createdTime
     * @return TrjMessageIndex
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return integer 
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set lastUpdatedTime
     *
     * @param integer $lastUpdatedTime
     * @return TrjMessageIndex
     */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;

        return $this;
    }

    /**
     * Get lastUpdatedTime
     *
     * @return integer 
     */
    public function getLastUpdatedTime()
    {
        return $this->lastUpdatedTime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjMessageIndex
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
}
