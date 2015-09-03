<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityTrkhj
 */
class TrjActivityTrkhj
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $isWin;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var string
     */
    private $area;


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
     * Set userId
     *
     * @param integer $userId
     * @return TrjActivityTrkhj
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set isWin
     *
     * @param integer $isWin
     * @return TrjActivityTrkhj
     */
    public function setIsWin($isWin)
    {
        $this->isWin = $isWin;

        return $this;
    }

    /**
     * Get isWin
     *
     * @return integer 
     */
    public function getIsWin()
    {
        return $this->isWin;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjActivityTrkhj
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return TrjActivityTrkhj
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
}
