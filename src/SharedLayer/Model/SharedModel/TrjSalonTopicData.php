<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSalonTopicData
 */
class TrjSalonTopicData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $sid;

    /**
     * @var integer
     */
    private $bkid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $des;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $sort;


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
     * Set sid
     *
     * @param integer $sid
     * @return TrjSalonTopicData
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set bkid
     *
     * @param integer $bkid
     * @return TrjSalonTopicData
     */
    public function setBkid($bkid)
    {
        $this->bkid = $bkid;

        return $this;
    }

    /**
     * Get bkid
     *
     * @return integer 
     */
    public function getBkid()
    {
        return $this->bkid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjSalonTopicData
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
     * Set des
     *
     * @param string $des
     * @return TrjSalonTopicData
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return string 
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TrjSalonTopicData
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
     * Set img
     *
     * @param string $img
     * @return TrjSalonTopicData
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
     * Set sort
     *
     * @param integer $sort
     * @return TrjSalonTopicData
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
}
