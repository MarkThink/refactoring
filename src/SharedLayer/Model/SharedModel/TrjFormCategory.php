<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormCategory
 */
class TrjFormCategory
{
    /**
     * @var integer
     */
    private $catId;

    /**
     * @var string
     */
    private $catName;

    /**
     * @var integer
     */
    private $catPid;

    /**
     * @var integer
     */
    private $catLevel;

    /**
     * @var integer
     */
    private $catSort;

    /**
     * @var integer
     */
    private $catType;

    /**
     * @var integer
     */
    private $catStatus;

    /**
     * @var integer
     */
    private $fcId;

    /**
     * @var integer
     */
    private $catFlagDisplay;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;


    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set catName
     *
     * @param string $catName
     * @return TrjFormCategory
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string 
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Set catPid
     *
     * @param integer $catPid
     * @return TrjFormCategory
     */
    public function setCatPid($catPid)
    {
        $this->catPid = $catPid;

        return $this;
    }

    /**
     * Get catPid
     *
     * @return integer 
     */
    public function getCatPid()
    {
        return $this->catPid;
    }

    /**
     * Set catLevel
     *
     * @param integer $catLevel
     * @return TrjFormCategory
     */
    public function setCatLevel($catLevel)
    {
        $this->catLevel = $catLevel;

        return $this;
    }

    /**
     * Get catLevel
     *
     * @return integer 
     */
    public function getCatLevel()
    {
        return $this->catLevel;
    }

    /**
     * Set catSort
     *
     * @param integer $catSort
     * @return TrjFormCategory
     */
    public function setCatSort($catSort)
    {
        $this->catSort = $catSort;

        return $this;
    }

    /**
     * Get catSort
     *
     * @return integer 
     */
    public function getCatSort()
    {
        return $this->catSort;
    }

    /**
     * Set catType
     *
     * @param integer $catType
     * @return TrjFormCategory
     */
    public function setCatType($catType)
    {
        $this->catType = $catType;

        return $this;
    }

    /**
     * Get catType
     *
     * @return integer 
     */
    public function getCatType()
    {
        return $this->catType;
    }

    /**
     * Set catStatus
     *
     * @param integer $catStatus
     * @return TrjFormCategory
     */
    public function setCatStatus($catStatus)
    {
        $this->catStatus = $catStatus;

        return $this;
    }

    /**
     * Get catStatus
     *
     * @return integer 
     */
    public function getCatStatus()
    {
        return $this->catStatus;
    }

    /**
     * Set fcId
     *
     * @param integer $fcId
     * @return TrjFormCategory
     */
    public function setFcId($fcId)
    {
        $this->fcId = $fcId;

        return $this;
    }

    /**
     * Get fcId
     *
     * @return integer 
     */
    public function getFcId()
    {
        return $this->fcId;
    }

    /**
     * Set catFlagDisplay
     *
     * @param integer $catFlagDisplay
     * @return TrjFormCategory
     */
    public function setCatFlagDisplay($catFlagDisplay)
    {
        $this->catFlagDisplay = $catFlagDisplay;

        return $this;
    }

    /**
     * Get catFlagDisplay
     *
     * @return integer 
     */
    public function getCatFlagDisplay()
    {
        return $this->catFlagDisplay;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjFormCategory
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjFormCategory
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
