<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMessageContent
 */
class TrjMessageContent
{
    /**
     * @var integer
     */
    private $messageId;

    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $toUid;

    /**
     * @var integer
     */
    private $fromUid;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $mtime;


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
     * Set listId
     *
     * @param integer $listId
     * @return TrjMessageContent
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

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
     * Set toUid
     *
     * @param integer $toUid
     * @return TrjMessageContent
     */
    public function setToUid($toUid)
    {
        $this->toUid = $toUid;

        return $this;
    }

    /**
     * Get toUid
     *
     * @return integer 
     */
    public function getToUid()
    {
        return $this->toUid;
    }

    /**
     * Set fromUid
     *
     * @param integer $fromUid
     * @return TrjMessageContent
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
     * Set content
     *
     * @param string $content
     * @return TrjMessageContent
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set mtime
     *
     * @param integer $mtime
     * @return TrjMessageContent
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
}
