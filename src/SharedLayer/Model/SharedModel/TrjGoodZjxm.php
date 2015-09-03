<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjGoodZjxm
 */
class TrjGoodZjxm
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
    private $uid;

    /**
     * @var string
     */
    private $file;

    /**
     * @var integer
     */
    private $fileAid;

    /**
     * @var integer
     */
    private $fileYun;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var integer
     */
    private $times;

    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var integer
     */
    private $isNofollow;


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
     * @return TrjGoodZjxm
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
     * @return TrjGoodZjxm
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
     * Set uid
     *
     * @param integer $uid
     * @return TrjGoodZjxm
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return TrjGoodZjxm
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileAid
     *
     * @param integer $fileAid
     * @return TrjGoodZjxm
     */
    public function setFileAid($fileAid)
    {
        $this->fileAid = $fileAid;

        return $this;
    }

    /**
     * Get fileAid
     *
     * @return integer 
     */
    public function getFileAid()
    {
        return $this->fileAid;
    }

    /**
     * Set fileYun
     *
     * @param integer $fileYun
     * @return TrjGoodZjxm
     */
    public function setFileYun($fileYun)
    {
        $this->fileYun = $fileYun;

        return $this;
    }

    /**
     * Get fileYun
     *
     * @return integer 
     */
    public function getFileYun()
    {
        return $this->fileYun;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjGoodZjxm
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
     * Set status
     *
     * @param integer $status
     * @return TrjGoodZjxm
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
     * Set content
     *
     * @param string $content
     * @return TrjGoodZjxm
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
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjGoodZjxm
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;

        return $this;
    }

    /**
     * Get industryId
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * Set times
     *
     * @param integer $times
     * @return TrjGoodZjxm
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     * @return TrjGoodZjxm
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
     * Set isNofollow
     *
     * @param integer $isNofollow
     * @return TrjGoodZjxm
     */
    public function setIsNofollow($isNofollow)
    {
        $this->isNofollow = $isNofollow;

        return $this;
    }

    /**
     * Get isNofollow
     *
     * @return integer 
     */
    public function getIsNofollow()
    {
        return $this->isNofollow;
    }
}
