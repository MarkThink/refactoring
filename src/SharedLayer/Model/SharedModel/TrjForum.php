<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjForum
 */
class TrjForum
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
    private $type;

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
    private $content;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var integer
     */
    private $anonymous;

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
     * @return TrjForum
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
     * Set type
     *
     * @param string $type
     * @return TrjForum
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjForum
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
     * @return TrjForum
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
     * @return TrjForum
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
     * @return TrjForum
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
     * Set nickname
     *
     * @param string $nickname
     * @return TrjForum
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set anonymous
     *
     * @param integer $anonymous
     * @return TrjForum
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return integer 
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjForum
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
     * @return TrjForum
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
     * @return TrjForum
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
