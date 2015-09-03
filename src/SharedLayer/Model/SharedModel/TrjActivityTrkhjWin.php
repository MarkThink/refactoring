<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityTrkhjWin
 */
class TrjActivityTrkhjWin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $area;

    /**
     * @var string
     */
    private $addTime;

    /**
     * @var string
     */
    private $mobile;


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
     * Set area
     *
     * @param string $area
     * @return TrjActivityTrkhjWin
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set addTime
     *
     * @param string $addTime
     * @return TrjActivityTrkhjWin
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return string 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjActivityTrkhjWin
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
