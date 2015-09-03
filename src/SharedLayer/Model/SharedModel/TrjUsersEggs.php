<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersEggs
 */
class TrjUsersEggs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $isEggs;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $eggType;

    /**
     * @var integer
     */
    private $userId;


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
     * Set userType
     *
     * @param integer $userType
     * @return TrjUsersEggs
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjUsersEggs
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
     * Set email
     *
     * @param string $email
     * @return TrjUsersEggs
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjUsersEggs
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
     * Set contactName
     *
     * @param string $contactName
     * @return TrjUsersEggs
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return TrjUsersEggs
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjUsersEggs
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjUsersEggs
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set isEggs
     *
     * @param integer $isEggs
     * @return TrjUsersEggs
     */
    public function setIsEggs($isEggs)
    {
        $this->isEggs = $isEggs;

        return $this;
    }

    /**
     * Get isEggs
     *
     * @return integer 
     */
    public function getIsEggs()
    {
        return $this->isEggs;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjUsersEggs
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set eggType
     *
     * @param integer $eggType
     * @return TrjUsersEggs
     */
    public function setEggType($eggType)
    {
        $this->eggType = $eggType;

        return $this;
    }

    /**
     * Get eggType
     *
     * @return integer 
     */
    public function getEggType()
    {
        return $this->eggType;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersEggs
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
}
