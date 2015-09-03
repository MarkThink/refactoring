<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersLog
 */
class TrjUsersLog
{
    /**
     * @var integer
     */
    private $logId;

    /**
     * @var string
     */
    private $logAction;

    /**
     * @var integer
     */
    private $logTime;

    /**
     * @var string
     */
    private $logValue;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $logInfo;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var integer
     */
    private $isDone;


    /**
     * Get logId
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * Set logAction
     *
     * @param string $logAction
     * @return TrjUsersLog
     */
    public function setLogAction($logAction)
    {
        $this->logAction = $logAction;

        return $this;
    }

    /**
     * Get logAction
     *
     * @return string 
     */
    public function getLogAction()
    {
        return $this->logAction;
    }

    /**
     * Set logTime
     *
     * @param integer $logTime
     * @return TrjUsersLog
     */
    public function setLogTime($logTime)
    {
        $this->logTime = $logTime;

        return $this;
    }

    /**
     * Get logTime
     *
     * @return integer 
     */
    public function getLogTime()
    {
        return $this->logTime;
    }

    /**
     * Set logValue
     *
     * @param string $logValue
     * @return TrjUsersLog
     */
    public function setLogValue($logValue)
    {
        $this->logValue = $logValue;

        return $this;
    }

    /**
     * Get logValue
     *
     * @return string 
     */
    public function getLogValue()
    {
        return $this->logValue;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersLog
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
     * Set logInfo
     *
     * @param string $logInfo
     * @return TrjUsersLog
     */
    public function setLogInfo($logInfo)
    {
        $this->logInfo = $logInfo;

        return $this;
    }

    /**
     * Get logInfo
     *
     * @return string 
     */
    public function getLogInfo()
    {
        return $this->logInfo;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return TrjUsersLog
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set isDone
     *
     * @param integer $isDone
     * @return TrjUsersLog
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return integer 
     */
    public function getIsDone()
    {
        return $this->isDone;
    }
}
