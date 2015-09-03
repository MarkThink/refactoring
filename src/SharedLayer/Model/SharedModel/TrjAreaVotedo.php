<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAreaVotedo
 */
class TrjAreaVotedo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cid;

    /**
     * @var string
     */
    private $result;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $ip;


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
     * Set cid
     *
     * @param integer $cid
     * @return TrjAreaVotedo
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return TrjAreaVotedo
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjAreaVotedo
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjAreaVotedo
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
     * @param integer $ip
     * @return TrjAreaVotedo
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
}
