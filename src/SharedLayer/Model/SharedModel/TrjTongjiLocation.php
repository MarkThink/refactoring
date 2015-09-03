<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTongjiLocation
 */
class TrjTongjiLocation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $homepageId;

    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $count;


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
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjTongjiLocation
     */
    public function setHomepageId($homepageId)
    {
        $this->homepageId = $homepageId;

        return $this;
    }

    /**
     * Get homepageId
     *
     * @return integer 
     */
    public function getHomepageId()
    {
        return $this->homepageId;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return TrjTongjiLocation
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return TrjTongjiLocation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return TrjTongjiLocation
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }
}
