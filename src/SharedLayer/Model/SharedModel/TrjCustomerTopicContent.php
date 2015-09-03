<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCustomerTopicContent
 */
class TrjCustomerTopicContent
{
    /**
     * @var integer
     */
    private $cid;

    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $imgplace;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $created;


    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     * @return TrjCustomerTopicContent
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrjCustomerTopicContent
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjCustomerTopicContent
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
     * Set img
     *
     * @param string $img
     * @return TrjCustomerTopicContent
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set imgplace
     *
     * @param integer $imgplace
     * @return TrjCustomerTopicContent
     */
    public function setImgplace($imgplace)
    {
        $this->imgplace = $imgplace;

        return $this;
    }

    /**
     * Get imgplace
     *
     * @return integer 
     */
    public function getImgplace()
    {
        return $this->imgplace;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjCustomerTopicContent
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjCustomerTopicContent
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
