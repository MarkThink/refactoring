<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersInvitee
 */
class TrjUsersInvitee
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
    private $userName;

    /**
     * @var integer
     */
    private $registerTime;

    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var string
     */
    private $award;


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
     * @return TrjUsersInvitee
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
     * Set userName
     *
     * @param string $userName
     * @return TrjUsersInvitee
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set registerTime
     *
     * @param integer $registerTime
     * @return TrjUsersInvitee
     */
    public function setRegisterTime($registerTime)
    {
        $this->registerTime = $registerTime;

        return $this;
    }

    /**
     * Get registerTime
     *
     * @return integer 
     */
    public function getRegisterTime()
    {
        return $this->registerTime;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return TrjUsersInvitee
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set award
     *
     * @param string $award
     * @return TrjUsersInvitee
     */
    public function setAward($award)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * Get award
     *
     * @return string 
     */
    public function getAward()
    {
        return $this->award;
    }
}
