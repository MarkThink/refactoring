<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersReject
 */
class TrjUsersReject
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
    private $type;

    /**
     * @var integer
     */
    private $iid;

    /**
     * @var integer
     */
    private $addtime;


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
     * @return TrjUsersReject
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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersReject
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
     * Set iid
     *
     * @param integer $iid
     * @return TrjUsersReject
     */
    public function setIid($iid)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Get iid
     *
     * @return integer 
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersReject
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
