<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjRczgTopic
 */
class TrjRczgTopic
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
    private $subTitle;

    /**
     * @var string
     */
    private $daoyu;

    /**
     * @var string
     */
    private $daoyuUrl;

    /**
     * @var integer
     */
    private $template;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var integer
     */
    private $imageUrlAid;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var integer
     */
    private $thumbAid;

    /**
     * @var integer
     */
    private $scale;

    /**
     * @var integer
     */
    private $heat;

    /**
     * @var integer
     */
    private $prospect;

    /**
     * @var integer
     */
    private $friendUrlOpen;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $posterName;

    /**
     * @var string
     */
    private $urlName;


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
     * @return TrjRczgTopic
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
     * Set subTitle
     *
     * @param string $subTitle
     * @return TrjRczgTopic
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Get subTitle
     *
     * @return string 
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set daoyu
     *
     * @param string $daoyu
     * @return TrjRczgTopic
     */
    public function setDaoyu($daoyu)
    {
        $this->daoyu = $daoyu;

        return $this;
    }

    /**
     * Get daoyu
     *
     * @return string 
     */
    public function getDaoyu()
    {
        return $this->daoyu;
    }

    /**
     * Set daoyuUrl
     *
     * @param string $daoyuUrl
     * @return TrjRczgTopic
     */
    public function setDaoyuUrl($daoyuUrl)
    {
        $this->daoyuUrl = $daoyuUrl;

        return $this;
    }

    /**
     * Get daoyuUrl
     *
     * @return string 
     */
    public function getDaoyuUrl()
    {
        return $this->daoyuUrl;
    }

    /**
     * Set template
     *
     * @param integer $template
     * @return TrjRczgTopic
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return integer 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjRczgTopic
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
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return TrjRczgTopic
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set imageUrlAid
     *
     * @param integer $imageUrlAid
     * @return TrjRczgTopic
     */
    public function setImageUrlAid($imageUrlAid)
    {
        $this->imageUrlAid = $imageUrlAid;

        return $this;
    }

    /**
     * Get imageUrlAid
     *
     * @return integer 
     */
    public function getImageUrlAid()
    {
        return $this->imageUrlAid;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjRczgTopic
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
     * Set thumbAid
     *
     * @param integer $thumbAid
     * @return TrjRczgTopic
     */
    public function setThumbAid($thumbAid)
    {
        $this->thumbAid = $thumbAid;

        return $this;
    }

    /**
     * Get thumbAid
     *
     * @return integer 
     */
    public function getThumbAid()
    {
        return $this->thumbAid;
    }

    /**
     * Set scale
     *
     * @param integer $scale
     * @return TrjRczgTopic
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return integer 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set heat
     *
     * @param integer $heat
     * @return TrjRczgTopic
     */
    public function setHeat($heat)
    {
        $this->heat = $heat;

        return $this;
    }

    /**
     * Get heat
     *
     * @return integer 
     */
    public function getHeat()
    {
        return $this->heat;
    }

    /**
     * Set prospect
     *
     * @param integer $prospect
     * @return TrjRczgTopic
     */
    public function setProspect($prospect)
    {
        $this->prospect = $prospect;

        return $this;
    }

    /**
     * Get prospect
     *
     * @return integer 
     */
    public function getProspect()
    {
        return $this->prospect;
    }

    /**
     * Set friendUrlOpen
     *
     * @param integer $friendUrlOpen
     * @return TrjRczgTopic
     */
    public function setFriendUrlOpen($friendUrlOpen)
    {
        $this->friendUrlOpen = $friendUrlOpen;

        return $this;
    }

    /**
     * Get friendUrlOpen
     *
     * @return integer 
     */
    public function getFriendUrlOpen()
    {
        return $this->friendUrlOpen;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjRczgTopic
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
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjRczgTopic
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjRczgTopic
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
     * Set posterName
     *
     * @param string $posterName
     * @return TrjRczgTopic
     */
    public function setPosterName($posterName)
    {
        $this->posterName = $posterName;

        return $this;
    }

    /**
     * Get posterName
     *
     * @return string 
     */
    public function getPosterName()
    {
        return $this->posterName;
    }

    /**
     * Set urlName
     *
     * @param string $urlName
     * @return TrjRczgTopic
     */
    public function setUrlName($urlName)
    {
        $this->urlName = $urlName;

        return $this;
    }

    /**
     * Get urlName
     *
     * @return string 
     */
    public function getUrlName()
    {
        return $this->urlName;
    }
}
