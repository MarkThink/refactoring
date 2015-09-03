<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageGuest
 */
class TrjHomepageGuest
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
    private $posterId;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $flag;

    /**
     * @var integer
     */
    private $showType;

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
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepageGuest
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
     * Set content
     *
     * @param string $content
     * @return TrjHomepageGuest
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
     * @return TrjHomepageGuest
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
     * @return TrjHomepageGuest
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjHomepageGuest
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
     * Set poster
     *
     * @param string $poster
     * @return TrjHomepageGuest
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjHomepageGuest
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
     * Set showType
     *
     * @param integer $showType
     * @return TrjHomepageGuest
     */
    public function setShowType($showType)
    {
        $this->showType = $showType;

        return $this;
    }

    /**
     * Get showType
     *
     * @return integer 
     */
    public function getShowType()
    {
        return $this->showType;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjHomepageGuest
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
     * @return TrjHomepageGuest
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
