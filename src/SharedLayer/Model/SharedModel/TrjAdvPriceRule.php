<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvPriceRule
 */
class TrjAdvPriceRule
{
    /**
     * @var integer
     */
    private $rid;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $daynum;

    /**
     * @var integer
     */
    private $percent;


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
     * Set aid
     *
     * @param integer $aid
     * @return TrjAdvPriceRule
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set daynum
     *
     * @param integer $daynum
     * @return TrjAdvPriceRule
     */
    public function setDaynum($daynum)
    {
        $this->daynum = $daynum;

        return $this;
    }

    /**
     * Get daynum
     *
     * @return integer 
     */
    public function getDaynum()
    {
        return $this->daynum;
    }

    /**
     * Set percent
     *
     * @param integer $percent
     * @return TrjAdvPriceRule
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return integer 
     */
    public function getPercent()
    {
        return $this->percent;
    }
}
