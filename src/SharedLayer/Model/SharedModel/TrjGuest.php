<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjGuest
 */
class TrjGuest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $siteId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $replyContent;

    /**
     * @var integer
     */
    private $replyTime;

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
     * Set siteId
     *
     * @param integer $siteId
     * @return TrjGuest
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjGuest
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
     * Set username
     *
     * @param string $username
     * @return TrjGuest
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjGuest
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
     * Set replyContent
     *
     * @param string $replyContent
     * @return TrjGuest
     */
    public function setReplyContent($replyContent)
    {
        $this->replyContent = $replyContent;

        return $this;
    }

    /**
     * Get replyContent
     *
     * @return string 
     */
    public function getReplyContent()
    {
        return $this->replyContent;
    }

    /**
     * Set replyTime
     *
     * @param integer $replyTime
     * @return TrjGuest
     */
    public function setReplyTime($replyTime)
    {
        $this->replyTime = $replyTime;

        return $this;
    }

    /**
     * Get replyTime
     *
     * @return integer 
     */
    public function getReplyTime()
    {
        return $this->replyTime;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjGuest
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
     * @return TrjGuest
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
