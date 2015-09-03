<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjNewsCategory
 */
class TrjNewsCategory
{
    /**
     * @var integer
     */
    private $catid;

    /**
     * @var string
     */
    private $catcode;

    /**
     * @var string
     */
    private $catname;

    /**
     * @var integer
     */
    private $parentid;

    /**
     * @var integer
     */
    private $listorder;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var integer
     */
    private $isLast;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $newsNum;

    /**
     * @var integer
     */
    private $modelid;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $pageKeywords;

    /**
     * @var string
     */
    private $pageDescription;


    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set catcode
     *
     * @param string $catcode
     * @return TrjNewsCategory
     */
    public function setCatcode($catcode)
    {
        $this->catcode = $catcode;

        return $this;
    }

    /**
     * Get catcode
     *
     * @return string 
     */
    public function getCatcode()
    {
        return $this->catcode;
    }

    /**
     * Set catname
     *
     * @param string $catname
     * @return TrjNewsCategory
     */
    public function setCatname($catname)
    {
        $this->catname = $catname;

        return $this;
    }

    /**
     * Get catname
     *
     * @return string 
     */
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return TrjNewsCategory
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set listorder
     *
     * @param integer $listorder
     * @return TrjNewsCategory
     */
    public function setListorder($listorder)
    {
        $this->listorder = $listorder;

        return $this;
    }

    /**
     * Get listorder
     *
     * @return integer 
     */
    public function getListorder()
    {
        return $this->listorder;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return TrjNewsCategory
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set isLast
     *
     * @param integer $isLast
     * @return TrjNewsCategory
     */
    public function setIsLast($isLast)
    {
        $this->isLast = $isLast;

        return $this;
    }

    /**
     * Get isLast
     *
     * @return integer 
     */
    public function getIsLast()
    {
        return $this->isLast;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjNewsCategory
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
     * Set newsNum
     *
     * @param integer $newsNum
     * @return TrjNewsCategory
     */
    public function setNewsNum($newsNum)
    {
        $this->newsNum = $newsNum;

        return $this;
    }

    /**
     * Get newsNum
     *
     * @return integer 
     */
    public function getNewsNum()
    {
        return $this->newsNum;
    }

    /**
     * Set modelid
     *
     * @param integer $modelid
     * @return TrjNewsCategory
     */
    public function setModelid($modelid)
    {
        $this->modelid = $modelid;

        return $this;
    }

    /**
     * Get modelid
     *
     * @return integer 
     */
    public function getModelid()
    {
        return $this->modelid;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return TrjNewsCategory
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string 
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageKeywords
     *
     * @param string $pageKeywords
     * @return TrjNewsCategory
     */
    public function setPageKeywords($pageKeywords)
    {
        $this->pageKeywords = $pageKeywords;

        return $this;
    }

    /**
     * Get pageKeywords
     *
     * @return string 
     */
    public function getPageKeywords()
    {
        return $this->pageKeywords;
    }

    /**
     * Set pageDescription
     *
     * @param string $pageDescription
     * @return TrjNewsCategory
     */
    public function setPageDescription($pageDescription)
    {
        $this->pageDescription = $pageDescription;

        return $this;
    }

    /**
     * Get pageDescription
     *
     * @return string 
     */
    public function getPageDescription()
    {
        return $this->pageDescription;
    }
}
