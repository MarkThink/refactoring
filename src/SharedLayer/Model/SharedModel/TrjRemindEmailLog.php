<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjRemindEmailLog
 */
class TrjRemindEmailLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fromUsername;

    /**
     * @var integer
     */
    private $fromUid;

    /**
     * @var string
     */
    private $toUsername;

    /**
     * @var integer
     */
    private $toUid;

    /**
     * @var integer
     */
    private $infoid;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $sendType;

    /**
     * @var string
     */
    private $sendEmail;

    /**
     * @var integer
     */
    private $sendTime;

    /**
     * @var integer
     */
    private $isdeal;


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
     * Set fromUsername
     *
     * @param string $fromUsername
     * @return TrjRemindEmailLog
     */
    public function setFromUsername($fromUsername)
    {
        $this->fromUsername = $fromUsername;

        return $this;
    }

    /**
     * Get fromUsername
     *
     * @return string 
     */
    public function getFromUsername()
    {
        return $this->fromUsername;
    }

    /**
     * Set fromUid
     *
     * @param integer $fromUid
     * @return TrjRemindEmailLog
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;

        return $this;
    }

    /**
     * Get fromUid
     *
     * @return integer 
     */
    public function getFromUid()
    {
        return $this->fromUid;
    }

    /**
     * Set toUsername
     *
     * @param string $toUsername
     * @return TrjRemindEmailLog
     */
    public function setToUsername($toUsername)
    {
        $this->toUsername = $toUsername;

        return $this;
    }

    /**
     * Get toUsername
     *
     * @return string 
     */
    public function getToUsername()
    {
        return $this->toUsername;
    }

    /**
     * Set toUid
     *
     * @param integer $toUid
     * @return TrjRemindEmailLog
     */
    public function setToUid($toUid)
    {
        $this->toUid = $toUid;

        return $this;
    }

    /**
     * Get toUid
     *
     * @return integer 
     */
    public function getToUid()
    {
        return $this->toUid;
    }

    /**
     * Set infoid
     *
     * @param integer $infoid
     * @return TrjRemindEmailLog
     */
    public function setInfoid($infoid)
    {
        $this->infoid = $infoid;

        return $this;
    }

    /**
     * Get infoid
     *
     * @return integer 
     */
    public function getInfoid()
    {
        return $this->infoid;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrjRemindEmailLog
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjRemindEmailLog
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
     * Set sendType
     *
     * @param integer $sendType
     * @return TrjRemindEmailLog
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
     * Set sendEmail
     *
     * @param string $sendEmail
     * @return TrjRemindEmailLog
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return string 
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * Set sendTime
     *
     * @param integer $sendTime
     * @return TrjRemindEmailLog
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;

        return $this;
    }

    /**
     * Get sendTime
     *
     * @return integer 
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * Set isdeal
     *
     * @param integer $isdeal
     * @return TrjRemindEmailLog
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
