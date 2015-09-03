<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersRss
 */
class TrjUsersRss
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $rssEmail;

    /**
     * @var integer
     */
    private $cycle;

    /**
     * @var string
     */
    private $rssRequire;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userUsername;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $sendDate;

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
     * Set rssEmail
     *
     * @param string $rssEmail
     * @return TrjUsersRss
     */
    public function setRssEmail($rssEmail)
    {
        $this->rssEmail = $rssEmail;

        return $this;
    }

    /**
     * Get rssEmail
     *
     * @return string 
     */
    public function getRssEmail()
    {
        return $this->rssEmail;
    }

    /**
     * Set cycle
     *
     * @param integer $cycle
     * @return TrjUsersRss
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return integer 
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set rssRequire
     *
     * @param string $rssRequire
     * @return TrjUsersRss
     */
    public function setRssRequire($rssRequire)
    {
        $this->rssRequire = $rssRequire;

        return $this;
    }

    /**
     * Get rssRequire
     *
     * @return string 
     */
    public function getRssRequire()
    {
        return $this->rssRequire;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersRss
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
     * Set userUsername
     *
     * @param string $userUsername
     * @return TrjUsersRss
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * Get userUsername
     *
     * @return string 
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersRss
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
     * Set sendDate
     *
     * @param integer $sendDate
     * @return TrjUsersRss
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return integer 
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjUsersRss
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
     * @return TrjUsersRss
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
