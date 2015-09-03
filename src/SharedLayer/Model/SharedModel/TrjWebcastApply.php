<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebcastApply
 */
class TrjWebcastApply
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $showId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $applyTime;

    /**
     * @var integer
     */
    private $isFlow;

    /**
     * @var integer
     */
    private $isFlowDel;

    /**
     * @var integer
     */
    private $isWatch;

    /**
     * @var integer
     */
    private $isWatchDel;

    /**
     * @var integer
     */
    private $statusWatch;

    /**
     * @var integer
     */
    private $isGoin;

    /**
     * @var integer
     */
    private $statusGoin;

    /**
     * @var integer
     */
    private $isGoinDel;


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
     * Set showId
     *
     * @param integer $showId
     * @return TrjWebcastApply
     */
    public function setShowId($showId)
    {
        $this->showId = $showId;

        return $this;
    }

    /**
     * Get showId
     *
     * @return integer 
     */
    public function getShowId()
    {
        return $this->showId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjWebcastApply
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
     * Set applyTime
     *
     * @param integer $applyTime
     * @return TrjWebcastApply
     */
    public function setApplyTime($applyTime)
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * Get applyTime
     *
     * @return integer 
     */
    public function getApplyTime()
    {
        return $this->applyTime;
    }

    /**
     * Set isFlow
     *
     * @param integer $isFlow
     * @return TrjWebcastApply
     */
    public function setIsFlow($isFlow)
    {
        $this->isFlow = $isFlow;

        return $this;
    }

    /**
     * Get isFlow
     *
     * @return integer 
     */
    public function getIsFlow()
    {
        return $this->isFlow;
    }

    /**
     * Set isFlowDel
     *
     * @param integer $isFlowDel
     * @return TrjWebcastApply
     */
    public function setIsFlowDel($isFlowDel)
    {
        $this->isFlowDel = $isFlowDel;

        return $this;
    }

    /**
     * Get isFlowDel
     *
     * @return integer 
     */
    public function getIsFlowDel()
    {
        return $this->isFlowDel;
    }

    /**
     * Set isWatch
     *
     * @param integer $isWatch
     * @return TrjWebcastApply
     */
    public function setIsWatch($isWatch)
    {
        $this->isWatch = $isWatch;

        return $this;
    }

    /**
     * Get isWatch
     *
     * @return integer 
     */
    public function getIsWatch()
    {
        return $this->isWatch;
    }

    /**
     * Set isWatchDel
     *
     * @param integer $isWatchDel
     * @return TrjWebcastApply
     */
    public function setIsWatchDel($isWatchDel)
    {
        $this->isWatchDel = $isWatchDel;

        return $this;
    }

    /**
     * Get isWatchDel
     *
     * @return integer 
     */
    public function getIsWatchDel()
    {
        return $this->isWatchDel;
    }

    /**
     * Set statusWatch
     *
     * @param integer $statusWatch
     * @return TrjWebcastApply
     */
    public function setStatusWatch($statusWatch)
    {
        $this->statusWatch = $statusWatch;

        return $this;
    }

    /**
     * Get statusWatch
     *
     * @return integer 
     */
    public function getStatusWatch()
    {
        return $this->statusWatch;
    }

    /**
     * Set isGoin
     *
     * @param integer $isGoin
     * @return TrjWebcastApply
     */
    public function setIsGoin($isGoin)
    {
        $this->isGoin = $isGoin;

        return $this;
    }

    /**
     * Get isGoin
     *
     * @return integer 
     */
    public function getIsGoin()
    {
        return $this->isGoin;
    }

    /**
     * Set statusGoin
     *
     * @param integer $statusGoin
     * @return TrjWebcastApply
     */
    public function setStatusGoin($statusGoin)
    {
        $this->statusGoin = $statusGoin;

        return $this;
    }

    /**
     * Get statusGoin
     *
     * @return integer 
     */
    public function getStatusGoin()
    {
        return $this->statusGoin;
    }

    /**
     * Set isGoinDel
     *
     * @param integer $isGoinDel
     * @return TrjWebcastApply
     */
    public function setIsGoinDel($isGoinDel)
    {
        $this->isGoinDel = $isGoinDel;

        return $this;
    }

    /**
     * Get isGoinDel
     *
     * @return integer 
     */
    public function getIsGoinDel()
    {
        return $this->isGoinDel;
    }
}
