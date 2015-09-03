<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTmpEmail
 */
class TrjTmpEmail
{
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
    private $isdeal;


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
     * @return TrjTmpEmail
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
     * Set isdeal
     *
     * @param integer $isdeal
     * @return TrjTmpEmail
     */
    public function setIsdeal($isdeal)
    {
        $this->isdeal = $isdeal;

        return $this;
    }

    /**
     * Get isdeal
     *
     * @return integer 
     */
    public function getIsdeal()
    {
        return $this->isdeal;
    }
}
