<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSeoKeyword
 */
class TrjSeoKeyword
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyname;

    /**
     * @var string
     */
    private $firstPy;

    /**
     * @var integer
     */
    private $utype;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $seoTitle;

    /**
     * @var string
     */
    private $seoKeywords;

    /**
     * @var string
     */
    private $seoDescription;

    /**
     * @var integer
     */
    private $ctime;


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
     * Set keyname
     *
     * @param string $keyname
     * @return TrjSeoKeyword
     */
    public function setKeyname($keyname)
    {
        $this->keyname = $keyname;

        return $this;
    }

    /**
     * Get keyname
     *
     * @return string 
     */
    public function getKeyname()
    {
        return $this->keyname;
    }

    /**
     * Set firstPy
     *
     * @param string $firstPy
     * @return TrjSeoKeyword
     */
    public function setFirstPy($firstPy)
    {
        $this->firstPy = $firstPy;

        return $this;
    }

    /**
     * Get firstPy
     *
     * @return string 
     */
    public function getFirstPy()
    {
        return $this->firstPy;
    }

    /**
     * Set utype
     *
     * @param integer $utype
     * @return TrjSeoKeyword
     */
    public function setUtype($utype)
    {
        $this->utype = $utype;

        return $this;
    }

    /**
     * Get utype
     *
     * @return integer 
     */
    public function getUtype()
    {
        return $this->utype;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjSeoKeyword
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjSeoKeyword
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
     * Set keywords
     *
     * @param string $keywords
     * @return TrjSeoKeyword
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
     * Set seoTitle
     *
     * @param string $seoTitle
     * @return TrjSeoKeyword
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string 
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return TrjSeoKeyword
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string 
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     * @return TrjSeoKeyword
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string 
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjSeoKeyword
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
