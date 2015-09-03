<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageNewsComment
 */
class TrjHomepageNewsComment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $newsId;

    /**
     * @var string
     */
    private $content;

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
     * Set newsId
     *
     * @param integer $newsId
     * @return TrjHomepageNewsComment
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjHomepageNewsComment
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjHomepageNewsComment
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
     * @return TrjHomepageNewsComment
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
     * Set created
     *
     * @param integer $created
     * @return TrjHomepageNewsComment
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
     * @return TrjHomepageNewsComment
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
