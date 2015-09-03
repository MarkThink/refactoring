<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersField
 */
class TrjUsersField
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $lastYearRevenue;

    /**
     * @var string
     */
    private $netAsset;

    /**
     * @var integer
     */
    private $messageTableIndex;

    /**
     * @var integer
     */
    private $experience;

    /**
     * @var integer
     */
    private $userLevel;


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
     * Set lastYearRevenue
     *
     * @param string $lastYearRevenue
     * @return TrjUsersField
     */
    public function setLastYearRevenue($lastYearRevenue)
    {
        $this->lastYearRevenue = $lastYearRevenue;

        return $this;
    }

    /**
     * Get lastYearRevenue
     *
     * @return string 
     */
    public function getLastYearRevenue()
    {
        return $this->lastYearRevenue;
    }

    /**
     * Set netAsset
     *
     * @param string $netAsset
     * @return TrjUsersField
     */
    public function setNetAsset($netAsset)
    {
        $this->netAsset = $netAsset;

        return $this;
    }

    /**
     * Get netAsset
     *
     * @return string 
     */
    public function getNetAsset()
    {
        return $this->netAsset;
    }

    /**
     * Set messageTableIndex
     *
     * @param integer $messageTableIndex
     * @return TrjUsersField
     */
    public function setMessageTableIndex($messageTableIndex)
    {
        $this->messageTableIndex = $messageTableIndex;

        return $this;
    }

    /**
     * Get messageTableIndex
     *
     * @return integer 
     */
    public function getMessageTableIndex()
    {
        return $this->messageTableIndex;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     * @return TrjUsersField
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set userLevel
     *
     * @param integer $userLevel
     * @return TrjUsersField
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    /**
     * Get userLevel
     *
     * @return integer 
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }
}
