<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSearchKeywords
 */
class TrjSearchKeywords
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var integer
     */
    private $type;

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
     * Set keyword
     *
     * @param string $keyword
     * @return TrjSearchKeywords
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjSearchKeywords
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
     * Set count
     *
     * @param integer $count
     * @return TrjSearchKeywords
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
