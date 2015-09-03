<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjShenheReason
 */
class TrjShenheReason
{
    /**
     * @var integer
     */
    private $rid;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var integer
     */
    private $useType;

    /**
     * @var string
     */
    private $catid;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $useNum;

    /**
     * @var integer
     */
    private $listorder;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $updatetime;


    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return TrjShenheReason
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
     * Set username
     *
     * @param string $username
     * @return TrjShenheReason
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return TrjShenheReason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set useType
     *
     * @param integer $useType
     * @return TrjShenheReason
     */
    public function setUseType($useType)
    {
        $this->useType = $useType;

        return $this;
    }

    /**
     * Get useType
     *
     * @return integer 
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Set catid
     *
     * @param string $catid
     * @return TrjShenheReason
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return string 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjShenheReason
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
     * Set useNum
     *
     * @param integer $useNum
     * @return TrjShenheReason
     */
    public function setUseNum($useNum)
    {
        $this->useNum = $useNum;

        return $this;
    }

    /**
     * Get useNum
     *
     * @return integer 
     */
    public function getUseNum()
    {
        return $this->useNum;
    }

    /**
     * Set listorder
     *
     * @param integer $listorder
     * @return TrjShenheReason
     */
    public function setListorder($listorder)
    {
        $this->listorder = $listorder;

        return $this;
    }

    /**
     * Get listorder
     *
     * @return integer 
     */
    public function getListorder()
    {
        return $this->listorder;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return TrjShenheReason
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjShenheReason
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
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjShenheReason
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
}
