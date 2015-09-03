<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjPriceRule
 */
class TrjPriceRule
{
    /**
     * @var integer
     */
    private $rid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $fid;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $unit;

    /**
     * @var integer
     */
    private $num;


    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjPriceRule
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
     * Set fid
     *
     * @param integer $fid
     * @return TrjPriceRule
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrjPriceRule
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set unit
     *
     * @param integer $unit
     * @return TrjPriceRule
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return integer 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return TrjPriceRule
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }
}
