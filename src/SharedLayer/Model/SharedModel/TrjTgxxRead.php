<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTgxxRead
 */
class TrjTgxxRead
{
    /**
     * @var integer
     */
    private $tgxxId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $ctime;


    /**
     * Get tgxxId
     *
     * @return integer 
     */
    public function getTgxxId()
    {
        return $this->tgxxId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjTgxxRead
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
     * Set ctime
     *
     * @param \DateTime $ctime
     * @return TrjTgxxRead
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return \DateTime 
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
