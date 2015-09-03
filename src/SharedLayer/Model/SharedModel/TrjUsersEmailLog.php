<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersEmailLog
 */
class TrjUsersEmailLog
{
    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $sendType;

    /**
     * @var integer
     */
    private $sendtime;


    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TrjUsersEmailLog
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
     * Set sendType
     *
     * @param integer $sendType
     * @return TrjUsersEmailLog
     */
    public function setSendType($sendType)
    {
        $this->sendType = $sendType;

        return $this;
    }

    /**
     * Get sendType
     *
     * @return integer 
     */
    public function getSendType()
    {
        return $this->sendType;
    }

    /**
     * Set sendtime
     *
     * @param integer $sendtime
     * @return TrjUsersEmailLog
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer 
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }
}
