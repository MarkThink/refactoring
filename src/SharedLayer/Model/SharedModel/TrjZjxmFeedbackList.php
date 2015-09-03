<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmFeedbackList
 */
class TrjZjxmFeedbackList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var string
     */
    private $memberMobile;

    /**
     * @var string
     */
    private $memberName;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $overview;

    /**
     * @var string
     */
    private $attach;

    /**
     * @var integer
     */
    private $toid;

    /**
     * @var string
     */
    private $toids;

    /**
     * @var integer
     */
    private $totype;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $ip;


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
     * Set sessionId
     *
     * @param string $sessionId
     * @return TrjZjxmFeedbackList
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjZjxmFeedbackList
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set memberMobile
     *
     * @param string $memberMobile
     * @return TrjZjxmFeedbackList
     */
    public function setMemberMobile($memberMobile)
    {
        $this->memberMobile = $memberMobile;

        return $this;
    }

    /**
     * Get memberMobile
     *
     * @return string 
     */
    public function getMemberMobile()
    {
        return $this->memberMobile;
    }

    /**
     * Set memberName
     *
     * @param string $memberName
     * @return TrjZjxmFeedbackList
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get memberName
     *
     * @return string 
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjZjxmFeedbackList
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set overview
     *
     * @param string $overview
     * @return TrjZjxmFeedbackList
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * Get overview
     *
     * @return string 
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set attach
     *
     * @param string $attach
     * @return TrjZjxmFeedbackList
     */
    public function setAttach($attach)
    {
        $this->attach = $attach;

        return $this;
    }

    /**
     * Get attach
     *
     * @return string 
     */
    public function getAttach()
    {
        return $this->attach;
    }

    /**
     * Set toid
     *
     * @param integer $toid
     * @return TrjZjxmFeedbackList
     */
    public function setToid($toid)
    {
        $this->toid = $toid;

        return $this;
    }

    /**
     * Get toid
     *
     * @return integer 
     */
    public function getToid()
    {
        return $this->toid;
    }

    /**
     * Set toids
     *
     * @param string $toids
     * @return TrjZjxmFeedbackList
     */
    public function setToids($toids)
    {
        $this->toids = $toids;

        return $this;
    }

    /**
     * Get toids
     *
     * @return string 
     */
    public function getToids()
    {
        return $this->toids;
    }

    /**
     * Set totype
     *
     * @param integer $totype
     * @return TrjZjxmFeedbackList
     */
    public function setTotype($totype)
    {
        $this->totype = $totype;

        return $this;
    }

    /**
     * Get totype
     *
     * @return integer 
     */
    public function getTotype()
    {
        return $this->totype;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjZjxmFeedbackList
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjZjxmFeedbackList
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjZjxmFeedbackList
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
}
