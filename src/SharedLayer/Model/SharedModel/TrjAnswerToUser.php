<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAnswerToUser
 */
class TrjAnswerToUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $askId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $updated;


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
     * Set askId
     *
     * @param integer $askId
     * @return TrjAnswerToUser
     */
    public function setAskId($askId)
    {
        $this->askId = $askId;

        return $this;
    }

    /**
     * Get askId
     *
     * @return integer 
     */
    public function getAskId()
    {
        return $this->askId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjAnswerToUser
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjAnswerToUser
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
