<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersBusinessCard
 */
class TrjUsersBusinessCard
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
    private $friendId;

    /**
     * @var integer
     */
    private $isInitiative;

    /**
     * @var integer
     */
    private $noFollow;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $flag;

    /**
     * @var integer
     */
    private $cutBusinessCard;


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
     * @return TrjUsersBusinessCard
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
     * Set friendId
     *
     * @param integer $friendId
     * @return TrjUsersBusinessCard
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return integer 
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set isInitiative
     *
     * @param integer $isInitiative
     * @return TrjUsersBusinessCard
     */
    public function setIsInitiative($isInitiative)
    {
        $this->isInitiative = $isInitiative;

        return $this;
    }

    /**
     * Get isInitiative
     *
     * @return integer 
     */
    public function getIsInitiative()
    {
        return $this->isInitiative;
    }

    /**
     * Set noFollow
     *
     * @param integer $noFollow
     * @return TrjUsersBusinessCard
     */
    public function setNoFollow($noFollow)
    {
        $this->noFollow = $noFollow;

        return $this;
    }

    /**
     * Get noFollow
     *
     * @return integer 
     */
    public function getNoFollow()
    {
        return $this->noFollow;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjUsersBusinessCard
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersBusinessCard
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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersBusinessCard
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjUsersBusinessCard
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

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjUsersBusinessCard
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set cutBusinessCard
     *
     * @param integer $cutBusinessCard
     * @return TrjUsersBusinessCard
     */
    public function setCutBusinessCard($cutBusinessCard)
    {
        $this->cutBusinessCard = $cutBusinessCard;

        return $this;
    }

    /**
     * Get cutBusinessCard
     *
     * @return integer 
     */
    public function getCutBusinessCard()
    {
        return $this->cutBusinessCard;
    }
}
