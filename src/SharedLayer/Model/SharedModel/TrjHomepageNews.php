<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageNews
 */
class TrjHomepageNews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $categoryId;

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
    private $fileurl;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var integer
     */
    private $hitNum;

    /**
     * @var integer
     */
    private $collectNum;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $status;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return TrjHomepageNews
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjHomepageNews
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
     * @return TrjHomepageNews
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
     * Set fileurl
     *
     * @param string $fileurl
     * @return TrjHomepageNews
     */
    public function setFileurl($fileurl)
    {
        $this->fileurl = $fileurl;

        return $this;
    }

    /**
     * Get fileurl
     *
     * @return string 
     */
    public function getFileurl()
    {
        return $this->fileurl;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrjHomepageNews
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set hitNum
     *
     * @param integer $hitNum
     * @return TrjHomepageNews
     */
    public function setHitNum($hitNum)
    {
        $this->hitNum = $hitNum;

        return $this;
    }

    /**
     * Get hitNum
     *
     * @return integer 
     */
    public function getHitNum()
    {
        return $this->hitNum;
    }

    /**
     * Set collectNum
     *
     * @param integer $collectNum
     * @return TrjHomepageNews
     */
    public function setCollectNum($collectNum)
    {
        $this->collectNum = $collectNum;

        return $this;
    }

    /**
     * Get collectNum
     *
     * @return integer 
     */
    public function getCollectNum()
    {
        return $this->collectNum;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjHomepageNews
     */
    public function setCommentNum($commentNum)
    {
        $this->commentNum = $commentNum;

        return $this;
    }

    /**
     * Get commentNum
     *
     * @return integer 
     */
    public function getCommentNum()
    {
        return $this->commentNum;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjHomepageNews
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
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepageNews
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
     * Set status
     *
     * @param integer $status
     * @return TrjHomepageNews
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
}
