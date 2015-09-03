<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmCollect
 */
class TrjZjxmCollect
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
    private $url;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $categorySubId;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var integer
     */
    private $created;


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
     * @return TrjZjxmCollect
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
     * Set url
     *
     * @param string $url
     * @return TrjZjxmCollect
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return TrjZjxmCollect
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
     * Set categorySubId
     *
     * @param integer $categorySubId
     * @return TrjZjxmCollect
     */
    public function setCategorySubId($categorySubId)
    {
        $this->categorySubId = $categorySubId;

        return $this;
    }

    /**
     * Get categorySubId
     *
     * @return integer 
     */
    public function getCategorySubId()
    {
        return $this->categorySubId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjZjxmCollect
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmCollect
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
}
