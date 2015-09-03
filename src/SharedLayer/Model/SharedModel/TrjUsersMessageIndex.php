<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersMessageIndex
 */
class TrjUsersMessageIndex
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $mId;


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
     * Set mId
     *
     * @param integer $mId
     * @return TrjUsersMessageIndex
     */
    public function setMId($mId)
    {
        $this->mId = $mId;

        return $this;
    }

    /**
     * Get mId
     *
     * @return integer 
     */
    public function getMId()
    {
        return $this->mId;
    }
}
