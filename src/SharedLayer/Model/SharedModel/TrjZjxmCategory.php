<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmCategory
 */
class TrjZjxmCategory
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
    private $catLock;

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
     * @return TrjZjxmCategory
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
     * @return TrjZjxmCategory
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
     * @return TrjZjxmCategory
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
     * Set catLock
     *
     * @param integer $catLock
     * @return TrjZjxmCategory
     */
    public function setCatLock($catLock)
    {
        $this->catLock = $catLock;

        return $this;
    }

    /**
     * Get catLock
     *
     * @return integer 
     */
    public function getCatLock()
    {
        return $this->catLock;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjZjxmCategory
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
     * @return TrjZjxmCategory
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
     * @return TrjZjxmCategory
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
