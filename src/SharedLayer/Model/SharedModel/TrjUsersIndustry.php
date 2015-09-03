<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersIndustry
 */
class TrjUsersIndustry
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $industryId;


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
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjUsersIndustry
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;

        return $this;
    }

    /**
     * Get industryId
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }
}
