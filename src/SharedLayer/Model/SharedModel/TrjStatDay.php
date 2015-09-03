<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjStatDay
 */
class TrjStatDay
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $statDay;

    /**
     * @var integer
     */
    private $nums;

    /**
     * @var integer
     */
    private $validNum;

    /**
     * @var integer
     */
    private $totalNum;


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
     * Set statDay
     *
     * @param \DateTime $statDay
     * @return TrjStatDay
     */
    public function setStatDay($statDay)
    {
        $this->statDay = $statDay;

        return $this;
    }

    /**
     * Get statDay
     *
     * @return \DateTime 
     */
    public function getStatDay()
    {
        return $this->statDay;
    }

    /**
     * Set nums
     *
     * @param integer $nums
     * @return TrjStatDay
     */
    public function setNums($nums)
    {
        $this->nums = $nums;

        return $this;
    }

    /**
     * Get nums
     *
     * @return integer 
     */
    public function getNums()
    {
        return $this->nums;
    }

    /**
     * Set validNum
     *
     * @param integer $validNum
     * @return TrjStatDay
     */
    public function setValidNum($validNum)
    {
        $this->validNum = $validNum;

        return $this;
    }

    /**
     * Get validNum
     *
     * @return integer 
     */
    public function getValidNum()
    {
        return $this->validNum;
    }

    /**
     * Set totalNum
     *
     * @param integer $totalNum
     * @return TrjStatDay
     */
    public function setTotalNum($totalNum)
    {
        $this->totalNum = $totalNum;

        return $this;
    }

    /**
     * Get totalNum
     *
     * @return integer 
     */
    public function getTotalNum()
    {
        return $this->totalNum;
    }
}
