<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjKeyword
 */
class TrjKeyword
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var integer
     */
    private $times;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $useNumber;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set uid
     *
     * @param integer $uid
     * @return TrjKeyword
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjKeyword
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return TrjKeyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set times
     *
     * @param integer $times
     * @return TrjKeyword
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjKeyword
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set useNumber
     *
     * @param integer $useNumber
     * @return TrjKeyword
     */
    public function setUseNumber($useNumber)
    {
        $this->useNumber = $useNumber;

        return $this;
    }

    /**
     * Get useNumber
     *
     * @return integer 
     */
    public function getUseNumber()
    {
        return $this->useNumber;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjKeyword
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
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjKeyword
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
