<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTongjiData
 */
class TrjTongjiData
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
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $pv;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $zjxmIp;

    /**
     * @var integer
     */
    private $avgTime;

    /**
     * @var integer
     */
    private $avgView;

    /**
     * @var integer
     */
    private $backRate;


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
     * @return TrjTongjiData
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
     * Set date
     *
     * @param integer $date
     * @return TrjTongjiData
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
     * Set pv
     *
     * @param integer $pv
     * @return TrjTongjiData
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return integer 
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjTongjiData
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set zjxmIp
     *
     * @param integer $zjxmIp
     * @return TrjTongjiData
     */
    public function setZjxmIp($zjxmIp)
    {
        $this->zjxmIp = $zjxmIp;

        return $this;
    }

    /**
     * Get zjxmIp
     *
     * @return integer 
     */
    public function getZjxmIp()
    {
        return $this->zjxmIp;
    }

    /**
     * Set avgTime
     *
     * @param integer $avgTime
     * @return TrjTongjiData
     */
    public function setAvgTime($avgTime)
    {
        $this->avgTime = $avgTime;

        return $this;
    }

    /**
     * Get avgTime
     *
     * @return integer 
     */
    public function getAvgTime()
    {
        return $this->avgTime;
    }

    /**
     * Set avgView
     *
     * @param integer $avgView
     * @return TrjTongjiData
     */
    public function setAvgView($avgView)
    {
        $this->avgView = $avgView;

        return $this;
    }

    /**
     * Get avgView
     *
     * @return integer 
     */
    public function getAvgView()
    {
        return $this->avgView;
    }

    /**
     * Set backRate
     *
     * @param integer $backRate
     * @return TrjTongjiData
     */
    public function setBackRate($backRate)
    {
        $this->backRate = $backRate;

        return $this;
    }

    /**
     * Get backRate
     *
     * @return integer 
     */
    public function getBackRate()
    {
        return $this->backRate;
    }
}
