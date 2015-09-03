<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjArea
 */
class TrjArea
{
    /**
     * @var integer
     */
    private $cid;

    /**
     * @var integer
     */
    private $cup;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $fchar;

    /**
     * @var string
     */
    private $abbreviation;

    /**
     * @var integer
     */
    private $sort;


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
     * Set cup
     *
     * @param integer $cup
     * @return TrjArea
     */
    public function setCup($cup)
    {
        $this->cup = $cup;

        return $this;
    }

    /**
     * Get cup
     *
     * @return integer 
     */
    public function getCup()
    {
        return $this->cup;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjArea
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
     * Set name
     *
     * @param string $name
     * @return TrjArea
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fchar
     *
     * @param string $fchar
     * @return TrjArea
     */
    public function setFchar($fchar)
    {
        $this->fchar = $fchar;

        return $this;
    }

    /**
     * Get fchar
     *
     * @return string 
     */
    public function getFchar()
    {
        return $this->fchar;
    }

    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return TrjArea
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjArea
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
