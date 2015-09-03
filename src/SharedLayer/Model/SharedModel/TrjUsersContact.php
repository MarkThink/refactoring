<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersContact
 */
class TrjUsersContact
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
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var integer
     */
    private $contactSex;

    /**
     * @var integer
     */
    private $contactJob;

    /**
     * @var string
     */
    private $contactJobName;

    /**
     * @var string
     */
    private $qq;


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
     * @return TrjUsersContact
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
     * Set mobile
     *
     * @param string $mobile
     * @return TrjUsersContact
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
     * Set email
     *
     * @param string $email
     * @return TrjUsersContact
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
     * Set contactName
     *
     * @param string $contactName
     * @return TrjUsersContact
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
     * Set contactSex
     *
     * @param integer $contactSex
     * @return TrjUsersContact
     */
    public function setContactSex($contactSex)
    {
        $this->contactSex = $contactSex;

        return $this;
    }

    /**
     * Get contactSex
     *
     * @return integer 
     */
    public function getContactSex()
    {
        return $this->contactSex;
    }

    /**
     * Set contactJob
     *
     * @param integer $contactJob
     * @return TrjUsersContact
     */
    public function setContactJob($contactJob)
    {
        $this->contactJob = $contactJob;

        return $this;
    }

    /**
     * Get contactJob
     *
     * @return integer 
     */
    public function getContactJob()
    {
        return $this->contactJob;
    }

    /**
     * Set contactJobName
     *
     * @param string $contactJobName
     * @return TrjUsersContact
     */
    public function setContactJobName($contactJobName)
    {
        $this->contactJobName = $contactJobName;

        return $this;
    }

    /**
     * Get contactJobName
     *
     * @return string 
     */
    public function getContactJobName()
    {
        return $this->contactJobName;
    }

    /**
     * Set qq
     *
     * @param string $qq
     * @return TrjUsersContact
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string 
     */
    public function getQq()
    {
        return $this->qq;
    }
}
