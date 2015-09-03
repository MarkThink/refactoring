<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormFieldCategory
 */
class TrjFormFieldCategory
{
    /**
     * @var integer
     */
    private $fcId;

    /**
     * @var string
     */
    private $fcName;

    /**
     * @var integer
     */
    private $fcSort;

    /**
     * @var integer
     */
    private $fcStatus;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;


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
     * Set fcName
     *
     * @param string $fcName
     * @return TrjFormFieldCategory
     */
    public function setFcName($fcName)
    {
        $this->fcName = $fcName;

        return $this;
    }

    /**
     * Get fcName
     *
     * @return string 
     */
    public function getFcName()
    {
        return $this->fcName;
    }

    /**
     * Set fcSort
     *
     * @param integer $fcSort
     * @return TrjFormFieldCategory
     */
    public function setFcSort($fcSort)
    {
        $this->fcSort = $fcSort;

        return $this;
    }

    /**
     * Get fcSort
     *
     * @return integer 
     */
    public function getFcSort()
    {
        return $this->fcSort;
    }

    /**
     * Set fcStatus
     *
     * @param integer $fcStatus
     * @return TrjFormFieldCategory
     */
    public function setFcStatus($fcStatus)
    {
        $this->fcStatus = $fcStatus;

        return $this;
    }

    /**
     * Get fcStatus
     *
     * @return integer 
     */
    public function getFcStatus()
    {
        return $this->fcStatus;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjFormFieldCategory
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
     * @return TrjFormFieldCategory
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
