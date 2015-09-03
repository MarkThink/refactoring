<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersArea
 */
class TrjUsersArea
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var integer
     */
    private $created;


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
     * Set username
     *
     * @param string $username
     * @return TrjUsersArea
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return TrjUsersArea
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjUsersArea
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
