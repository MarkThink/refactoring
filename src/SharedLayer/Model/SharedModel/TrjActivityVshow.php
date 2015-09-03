<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityVshow
 */
class TrjActivityVshow
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $updateTime;

    /**
     * @var string
     */
    private $posterUsername;

    /**
     * @var integer
     */
    private $isdel;

    /**
     * @var string
     */
    private $video;

    /**
     * @var integer
     */
    private $posterUid;

    /**
     * @var string
     */
    private $mobile;


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
     * Set title
     *
     * @param string $title
     * @return TrjActivityVshow
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
     * Set content
     *
     * @param string $content
     * @return TrjActivityVshow
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
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjActivityVshow
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjActivityVshow
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjActivityVshow
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
     * Set ip
     *
     * @param string $ip
     * @return TrjActivityVshow
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjActivityVshow
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
     * Set number
     *
     * @param integer $number
     * @return TrjActivityVshow
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     * @return TrjActivityVshow
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return integer 
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set posterUsername
     *
     * @param string $posterUsername
     * @return TrjActivityVshow
     */
    public function setPosterUsername($posterUsername)
    {
        $this->posterUsername = $posterUsername;

        return $this;
    }

    /**
     * Get posterUsername
     *
     * @return string 
     */
    public function getPosterUsername()
    {
        return $this->posterUsername;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjActivityVshow
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

    /**
     * Set video
     *
     * @param string $video
     * @return TrjActivityVshow
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set posterUid
     *
     * @param integer $posterUid
     * @return TrjActivityVshow
     */
    public function setPosterUid($posterUid)
    {
        $this->posterUid = $posterUid;

        return $this;
    }

    /**
     * Get posterUid
     *
     * @return integer 
     */
    public function getPosterUid()
    {
        return $this->posterUid;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjActivityVshow
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
