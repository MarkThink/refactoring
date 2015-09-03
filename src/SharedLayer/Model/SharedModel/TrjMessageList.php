<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMessageList
 */
class TrjMessageList
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $fromUid;

    /**
     * @var string
     */
    private $minMax;

    /**
     * @var integer
     */
    private $mtime;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var string
     */
    private $lastMessage;


    /**
     * Get listId
     *
     * @return integer 
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set fromUid
     *
     * @param integer $fromUid
     * @return TrjMessageList
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;

        return $this;
    }

    /**
     * Get fromUid
     *
     * @return integer 
     */
    public function getFromUid()
    {
        return $this->fromUid;
    }

    /**
     * Set minMax
     *
     * @param string $minMax
     * @return TrjMessageList
     */
    public function setMinMax($minMax)
    {
        $this->minMax = $minMax;

        return $this;
    }

    /**
     * Get minMax
     *
     * @return string 
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Set mtime
     *
     * @param integer $mtime
     * @return TrjMessageList
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * Get mtime
     *
     * @return integer 
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjMessageList
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set lastMessage
     *
     * @param string $lastMessage
     * @return TrjMessageList
     */
    public function setLastMessage($lastMessage)
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * Get lastMessage
     *
     * @return string 
     */
    public function getLastMessage()
    {
        return $this->lastMessage;
    }
}
