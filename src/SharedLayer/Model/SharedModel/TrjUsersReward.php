<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersReward
 */
class TrjUsersReward
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $isReward;

    /**
     * @var integer
     */
    private $created;


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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersReward
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
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersReward
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
     * Set isReward
     *
     * @param integer $isReward
     * @return TrjUsersReward
     */
    public function setIsReward($isReward)
    {
        $this->isReward = $isReward;

        return $this;
    }

    /**
     * Get isReward
     *
     * @return integer 
     */
    public function getIsReward()
    {
        return $this->isReward;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjUsersReward
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
}
