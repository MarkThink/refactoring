<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersToken
 */
class TrjUsersToken
{
    /**
     * @var string
     */
    private $accessId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $accessKey;

    /**
     * @var string
     */
    private $desKey;

    /**
     * @var string
     */
    private $loginTime;

    /**
     * @var integer
     */
    private $loginResource;

    /**
     * @var integer
     */
    private $validStatus;

    /**
     * @var string
     */
    private $remark;


    /**
     * Get accessId
     *
     * @return string 
     */
    public function getAccessId()
    {
        return $this->accessId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersToken
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
     * Set accessKey
     *
     * @param string $accessKey
     * @return TrjUsersToken
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Get accessKey
     *
     * @return string 
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Set desKey
     *
     * @param string $desKey
     * @return TrjUsersToken
     */
    public function setDesKey($desKey)
    {
        $this->desKey = $desKey;

        return $this;
    }

    /**
     * Get desKey
     *
     * @return string 
     */
    public function getDesKey()
    {
        return $this->desKey;
    }

    /**
     * Set loginTime
     *
     * @param string $loginTime
     * @return TrjUsersToken
     */
    public function setLoginTime($loginTime)
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * Get loginTime
     *
     * @return string 
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Set loginResource
     *
     * @param integer $loginResource
     * @return TrjUsersToken
     */
    public function setLoginResource($loginResource)
    {
        $this->loginResource = $loginResource;

        return $this;
    }

    /**
     * Get loginResource
     *
     * @return integer 
     */
    public function getLoginResource()
    {
        return $this->loginResource;
    }

    /**
     * Set validStatus
     *
     * @param integer $validStatus
     * @return TrjUsersToken
     */
    public function setValidStatus($validStatus)
    {
        $this->validStatus = $validStatus;

        return $this;
    }

    /**
     * Get validStatus
     *
     * @return integer 
     */
    public function getValidStatus()
    {
        return $this->validStatus;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return TrjUsersToken
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }
}
