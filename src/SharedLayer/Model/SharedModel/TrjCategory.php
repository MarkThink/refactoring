<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCategory
 */
class TrjCategory
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
    private $status;

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
     * @return TrjCategory
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
     * @return TrjCategory
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
     * @return TrjCategory
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
     * Set status
     *
     * @param integer $status
     * @return TrjCategory
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
     * Set created
     *
     * @param integer $created
     * @return TrjCategory
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
     * @return TrjCategory
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
