<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjApacheLogStatus
 */
class TrjApacheLogStatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $theDate;

    /**
     * @var integer
     */
    private $startTime;

    /**
     * @var integer
     */
    private $endTime;


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
     * Set theDate
     *
     * @param string $theDate
     * @return TrjApacheLogStatus
     */
    public function setTheDate($theDate)
    {
        $this->theDate = $theDate;

        return $this;
    }

    /**
     * Get theDate
     *
     * @return string 
     */
    public function getTheDate()
    {
        return $this->theDate;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     * @return TrjApacheLogStatus
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     * @return TrjApacheLogStatus
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
}
