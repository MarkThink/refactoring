<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTekanContent
 */
class TrjTekanContent
{
    /**
     * @var integer
     */
    private $cid;

    /**
     * @var integer
     */
    private $tkid;

    /**
     * @var string
     */
    private $ctitle;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $imgpath;

    /**
     * @var integer
     */
    private $imgplace;

    /**
     * @var integer
     */
    private $orders;

    /**
     * @var integer
     */
    private $addtime;


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
     * Set tkid
     *
     * @param integer $tkid
     * @return TrjTekanContent
     */
    public function setTkid($tkid)
    {
        $this->tkid = $tkid;

        return $this;
    }

    /**
     * Get tkid
     *
     * @return integer 
     */
    public function getTkid()
    {
        return $this->tkid;
    }

    /**
     * Set ctitle
     *
     * @param string $ctitle
     * @return TrjTekanContent
     */
    public function setCtitle($ctitle)
    {
        $this->ctitle = $ctitle;

        return $this;
    }

    /**
     * Get ctitle
     *
     * @return string 
     */
    public function getCtitle()
    {
        return $this->ctitle;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjTekanContent
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
     * Set imgpath
     *
     * @param string $imgpath
     * @return TrjTekanContent
     */
    public function setImgpath($imgpath)
    {
        $this->imgpath = $imgpath;

        return $this;
    }

    /**
     * Get imgpath
     *
     * @return string 
     */
    public function getImgpath()
    {
        return $this->imgpath;
    }

    /**
     * Set imgplace
     *
     * @param integer $imgplace
     * @return TrjTekanContent
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
     * Set orders
     *
     * @param integer $orders
     * @return TrjTekanContent
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return integer 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjTekanContent
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
}
