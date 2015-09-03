<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCwnUsers
 */
class TrjCwnUsers
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
    private $isFeedback;


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
     * @return TrjCwnUsers
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
     * Set isFeedback
     *
     * @param integer $isFeedback
     * @return TrjCwnUsers
     */
    public function setIsFeedback($isFeedback)
    {
        $this->isFeedback = $isFeedback;

        return $this;
    }

    /**
     * Get isFeedback
     *
     * @return integer 
     */
    public function getIsFeedback()
    {
        return $this->isFeedback;
    }
}
