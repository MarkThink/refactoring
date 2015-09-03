<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmInvite
 */
class TrjZjxmInvite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var integer
     */
    private $acceptUserId;

    /**
     * @var string
     */
    private $acceptUserName;

    /**
     * @var integer
     */
    private $acceptFromType;

    /**
     * @var string
     */
    private $acceptFromTitle;

    /**
     * @var integer
     */
    private $acceptFromId;

    /**
     * @var integer
     */
    private $acceptTime;

    /**
     * @var integer
     */
    private $acceptDel;

    /**
     * @var integer
     */
    private $inviteType;

    /**
     * @var string
     */
    private $inviteUserId;

    /**
     * @var string
     */
    private $inviteUserName;

    /**
     * @var integer
     */
    private $inviteUserType;

    /**
     * @var integer
     */
    private $inviteHasView;

    /**
     * @var integer
     */
    private $inviteStatus;

    /**
     * @var integer
     */
    private $inviteId;

    /**
     * @var integer
     */
    private $inviteTime;

    /**
     * @var string
     */
    private $inviteTitle;

    /**
     * @var string
     */
    private $inviteContent;

    /**
     * @var string
     */
    private $inviteAttach;

    /**
     * @var integer
     */
    private $inviteDel;

    /**
     * @var integer
     */
    private $handleTime;

    /**
     * @var integer
     */
    private $evaluate;

    /**
     * @var integer
     */
    private $evaluateTime;

    /**
     * @var integer
     */
    private $evaluateNum;

    /**
     * @var string
     */
    private $evaluateContent;

    /**
     * @var string
     */
    private $rejectReason;

    /**
     * @var integer
     */
    private $isView;

    /**
     * @var integer
     */
    private $verifyStatus;


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
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return TrjZjxmInvite
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set acceptUserId
     *
     * @param integer $acceptUserId
     * @return TrjZjxmInvite
     */
    public function setAcceptUserId($acceptUserId)
    {
        $this->acceptUserId = $acceptUserId;

        return $this;
    }

    /**
     * Get acceptUserId
     *
     * @return integer 
     */
    public function getAcceptUserId()
    {
        return $this->acceptUserId;
    }

    /**
     * Set acceptUserName
     *
     * @param string $acceptUserName
     * @return TrjZjxmInvite
     */
    public function setAcceptUserName($acceptUserName)
    {
        $this->acceptUserName = $acceptUserName;

        return $this;
    }

    /**
     * Get acceptUserName
     *
     * @return string 
     */
    public function getAcceptUserName()
    {
        return $this->acceptUserName;
    }

    /**
     * Set acceptFromType
     *
     * @param integer $acceptFromType
     * @return TrjZjxmInvite
     */
    public function setAcceptFromType($acceptFromType)
    {
        $this->acceptFromType = $acceptFromType;

        return $this;
    }

    /**
     * Get acceptFromType
     *
     * @return integer 
     */
    public function getAcceptFromType()
    {
        return $this->acceptFromType;
    }

    /**
     * Set acceptFromTitle
     *
     * @param string $acceptFromTitle
     * @return TrjZjxmInvite
     */
    public function setAcceptFromTitle($acceptFromTitle)
    {
        $this->acceptFromTitle = $acceptFromTitle;

        return $this;
    }

    /**
     * Get acceptFromTitle
     *
     * @return string 
     */
    public function getAcceptFromTitle()
    {
        return $this->acceptFromTitle;
    }

    /**
     * Set acceptFromId
     *
     * @param integer $acceptFromId
     * @return TrjZjxmInvite
     */
    public function setAcceptFromId($acceptFromId)
    {
        $this->acceptFromId = $acceptFromId;

        return $this;
    }

    /**
     * Get acceptFromId
     *
     * @return integer 
     */
    public function getAcceptFromId()
    {
        return $this->acceptFromId;
    }

    /**
     * Set acceptTime
     *
     * @param integer $acceptTime
     * @return TrjZjxmInvite
     */
    public function setAcceptTime($acceptTime)
    {
        $this->acceptTime = $acceptTime;

        return $this;
    }

    /**
     * Get acceptTime
     *
     * @return integer 
     */
    public function getAcceptTime()
    {
        return $this->acceptTime;
    }

    /**
     * Set acceptDel
     *
     * @param integer $acceptDel
     * @return TrjZjxmInvite
     */
    public function setAcceptDel($acceptDel)
    {
        $this->acceptDel = $acceptDel;

        return $this;
    }

    /**
     * Get acceptDel
     *
     * @return integer 
     */
    public function getAcceptDel()
    {
        return $this->acceptDel;
    }

    /**
     * Set inviteType
     *
     * @param integer $inviteType
     * @return TrjZjxmInvite
     */
    public function setInviteType($inviteType)
    {
        $this->inviteType = $inviteType;

        return $this;
    }

    /**
     * Get inviteType
     *
     * @return integer 
     */
    public function getInviteType()
    {
        return $this->inviteType;
    }

    /**
     * Set inviteUserId
     *
     * @param string $inviteUserId
     * @return TrjZjxmInvite
     */
    public function setInviteUserId($inviteUserId)
    {
        $this->inviteUserId = $inviteUserId;

        return $this;
    }

    /**
     * Get inviteUserId
     *
     * @return string 
     */
    public function getInviteUserId()
    {
        return $this->inviteUserId;
    }

    /**
     * Set inviteUserName
     *
     * @param string $inviteUserName
     * @return TrjZjxmInvite
     */
    public function setInviteUserName($inviteUserName)
    {
        $this->inviteUserName = $inviteUserName;

        return $this;
    }

    /**
     * Get inviteUserName
     *
     * @return string 
     */
    public function getInviteUserName()
    {
        return $this->inviteUserName;
    }

    /**
     * Set inviteUserType
     *
     * @param integer $inviteUserType
     * @return TrjZjxmInvite
     */
    public function setInviteUserType($inviteUserType)
    {
        $this->inviteUserType = $inviteUserType;

        return $this;
    }

    /**
     * Get inviteUserType
     *
     * @return integer 
     */
    public function getInviteUserType()
    {
        return $this->inviteUserType;
    }

    /**
     * Set inviteHasView
     *
     * @param integer $inviteHasView
     * @return TrjZjxmInvite
     */
    public function setInviteHasView($inviteHasView)
    {
        $this->inviteHasView = $inviteHasView;

        return $this;
    }

    /**
     * Get inviteHasView
     *
     * @return integer 
     */
    public function getInviteHasView()
    {
        return $this->inviteHasView;
    }

    /**
     * Set inviteStatus
     *
     * @param integer $inviteStatus
     * @return TrjZjxmInvite
     */
    public function setInviteStatus($inviteStatus)
    {
        $this->inviteStatus = $inviteStatus;

        return $this;
    }

    /**
     * Get inviteStatus
     *
     * @return integer 
     */
    public function getInviteStatus()
    {
        return $this->inviteStatus;
    }

    /**
     * Set inviteId
     *
     * @param integer $inviteId
     * @return TrjZjxmInvite
     */
    public function setInviteId($inviteId)
    {
        $this->inviteId = $inviteId;

        return $this;
    }

    /**
     * Get inviteId
     *
     * @return integer 
     */
    public function getInviteId()
    {
        return $this->inviteId;
    }

    /**
     * Set inviteTime
     *
     * @param integer $inviteTime
     * @return TrjZjxmInvite
     */
    public function setInviteTime($inviteTime)
    {
        $this->inviteTime = $inviteTime;

        return $this;
    }

    /**
     * Get inviteTime
     *
     * @return integer 
     */
    public function getInviteTime()
    {
        return $this->inviteTime;
    }

    /**
     * Set inviteTitle
     *
     * @param string $inviteTitle
     * @return TrjZjxmInvite
     */
    public function setInviteTitle($inviteTitle)
    {
        $this->inviteTitle = $inviteTitle;

        return $this;
    }

    /**
     * Get inviteTitle
     *
     * @return string 
     */
    public function getInviteTitle()
    {
        return $this->inviteTitle;
    }

    /**
     * Set inviteContent
     *
     * @param string $inviteContent
     * @return TrjZjxmInvite
     */
    public function setInviteContent($inviteContent)
    {
        $this->inviteContent = $inviteContent;

        return $this;
    }

    /**
     * Get inviteContent
     *
     * @return string 
     */
    public function getInviteContent()
    {
        return $this->inviteContent;
    }

    /**
     * Set inviteAttach
     *
     * @param string $inviteAttach
     * @return TrjZjxmInvite
     */
    public function setInviteAttach($inviteAttach)
    {
        $this->inviteAttach = $inviteAttach;

        return $this;
    }

    /**
     * Get inviteAttach
     *
     * @return string 
     */
    public function getInviteAttach()
    {
        return $this->inviteAttach;
    }

    /**
     * Set inviteDel
     *
     * @param integer $inviteDel
     * @return TrjZjxmInvite
     */
    public function setInviteDel($inviteDel)
    {
        $this->inviteDel = $inviteDel;

        return $this;
    }

    /**
     * Get inviteDel
     *
     * @return integer 
     */
    public function getInviteDel()
    {
        return $this->inviteDel;
    }

    /**
     * Set handleTime
     *
     * @param integer $handleTime
     * @return TrjZjxmInvite
     */
    public function setHandleTime($handleTime)
    {
        $this->handleTime = $handleTime;

        return $this;
    }

    /**
     * Get handleTime
     *
     * @return integer 
     */
    public function getHandleTime()
    {
        return $this->handleTime;
    }

    /**
     * Set evaluate
     *
     * @param integer $evaluate
     * @return TrjZjxmInvite
     */
    public function setEvaluate($evaluate)
    {
        $this->evaluate = $evaluate;

        return $this;
    }

    /**
     * Get evaluate
     *
     * @return integer 
     */
    public function getEvaluate()
    {
        return $this->evaluate;
    }

    /**
     * Set evaluateTime
     *
     * @param integer $evaluateTime
     * @return TrjZjxmInvite
     */
    public function setEvaluateTime($evaluateTime)
    {
        $this->evaluateTime = $evaluateTime;

        return $this;
    }

    /**
     * Get evaluateTime
     *
     * @return integer 
     */
    public function getEvaluateTime()
    {
        return $this->evaluateTime;
    }

    /**
     * Set evaluateNum
     *
     * @param integer $evaluateNum
     * @return TrjZjxmInvite
     */
    public function setEvaluateNum($evaluateNum)
    {
        $this->evaluateNum = $evaluateNum;

        return $this;
    }

    /**
     * Get evaluateNum
     *
     * @return integer 
     */
    public function getEvaluateNum()
    {
        return $this->evaluateNum;
    }

    /**
     * Set evaluateContent
     *
     * @param string $evaluateContent
     * @return TrjZjxmInvite
     */
    public function setEvaluateContent($evaluateContent)
    {
        $this->evaluateContent = $evaluateContent;

        return $this;
    }

    /**
     * Get evaluateContent
     *
     * @return string 
     */
    public function getEvaluateContent()
    {
        return $this->evaluateContent;
    }

    /**
     * Set rejectReason
     *
     * @param string $rejectReason
     * @return TrjZjxmInvite
     */
    public function setRejectReason($rejectReason)
    {
        $this->rejectReason = $rejectReason;

        return $this;
    }

    /**
     * Get rejectReason
     *
     * @return string 
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Set isView
     *
     * @param integer $isView
     * @return TrjZjxmInvite
     */
    public function setIsView($isView)
    {
        $this->isView = $isView;

        return $this;
    }

    /**
     * Get isView
     *
     * @return integer 
     */
    public function getIsView()
    {
        return $this->isView;
    }

    /**
     * Set verifyStatus
     *
     * @param integer $verifyStatus
     * @return TrjZjxmInvite
     */
    public function setVerifyStatus($verifyStatus)
    {
        $this->verifyStatus = $verifyStatus;

        return $this;
    }

    /**
     * Get verifyStatus
     *
     * @return integer 
     */
    public function getVerifyStatus()
    {
        return $this->verifyStatus;
    }
}
