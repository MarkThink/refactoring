<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityVshowLog
 */
class TrjActivityVshowLog
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
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $toId;


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
     * @return TrjActivityVshowLog
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
     * Set ip
     *
     * @param string $ip
     * @return TrjActivityVshowLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjActivityVshowLog
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

    /**
     * Set toId
     *
     * @param integer $toId
     * @return TrjActivityVshowLog
     */
    public function setToId($toId)
    {
        $this->toId = $toId;

        return $this;
    }

    /**
     * Get toId
     *
     * @return integer 
     */
    public function getToId()
    {
        return $this->toId;
    }
}
