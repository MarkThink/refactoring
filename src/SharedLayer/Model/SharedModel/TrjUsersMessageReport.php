<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersMessageReport
 */
class TrjUsersMessageReport
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $asid;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $reply;

    /**
     * @var integer
     */
    private $state;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $posttime;

    /**
     * @var string
     */
    private $ipAddress;


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
     * Set asid
     *
     * @param integer $asid
     * @return TrjUsersMessageReport
     */
    public function setAsid($asid)
    {
        $this->asid = $asid;

        return $this;
    }

    /**
     * Get asid
     *
     * @return integer 
     */
    public function getAsid()
    {
        return $this->asid;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjUsersMessageReport
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjUsersMessageReport
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
     * Set title
     *
     * @param string $title
     * @return TrjUsersMessageReport
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrjUsersMessageReport
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
     * Set reply
     *
     * @param string $reply
     * @return TrjUsersMessageReport
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Get reply
     *
     * @return string 
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return TrjUsersMessageReport
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersMessageReport
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

    /**
     * Set posttime
     *
     * @param integer $posttime
     * @return TrjUsersMessageReport
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
     * @param string $ipAddress
     * @return TrjUsersMessageReport
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
}
