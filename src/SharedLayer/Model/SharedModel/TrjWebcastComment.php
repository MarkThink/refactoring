<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebcastComment
 */
class TrjWebcastComment
{
    /**
     * @var integer
     */
    private $showId;

    /**
     * @var string
     */
    private $senderId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $isDel;


    /**
     * Get showId
     *
     * @return integer 
     */
    public function getShowId()
    {
        return $this->showId;
    }

    /**
     * Set senderId
     *
     * @param string $senderId
     * @return TrjWebcastComment
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get senderId
     *
     * @return string 
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjWebcastComment
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
     * @return TrjWebcastComment
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
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjWebcastComment
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjWebcastComment
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }
}
