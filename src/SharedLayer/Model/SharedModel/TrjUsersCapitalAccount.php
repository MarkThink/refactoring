<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersCapitalAccount
 */
class TrjUsersCapitalAccount
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $settleId;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $isAdmin;

    /**
     * @var integer
     */
    private $checkTime;

    /**
     * @var integer
     */
    private $addtime;


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
     * Set settleId
     *
     * @param integer $settleId
     * @return TrjUsersCapitalAccount
     */
    public function setSettleId($settleId)
    {
        $this->settleId = $settleId;

        return $this;
    }

    /**
     * Get settleId
     *
     * @return integer 
     */
    public function getSettleId()
    {
        return $this->settleId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersCapitalAccount
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isAdmin
     *
     * @param integer $isAdmin
     * @return TrjUsersCapitalAccount
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return integer 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set checkTime
     *
     * @param integer $checkTime
     * @return TrjUsersCapitalAccount
     */
    public function setCheckTime($checkTime)
    {
        $this->checkTime = $checkTime;

        return $this;
    }

    /**
     * Get checkTime
     *
     * @return integer 
     */
    public function getCheckTime()
    {
        return $this->checkTime;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersCapitalAccount
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}
