<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebcast
 */
class TrjWebcast
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
    private $webcastId;

    /**
     * @var string
     */
    private $recordId;

    /**
     * @var integer
     */
    private $classify;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var string
     */
    private $linkInfo;

    /**
     * @var string
     */
    private $tolable;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $startTime;

    /**
     * @var integer
     */
    private $endTime;

    /**
     * @var integer
     */
    private $takeTime;

    /**
     * @var integer
     */
    private $deadTime;

    /**
     * @var string
     */
    private $frontCover;

    /**
     * @var string
     */
    private $roadShowPpt;

    /**
     * @var integer
     */
    private $loginRequired;

    /**
     * @var integer
     */
    private $opened;

    /**
     * @var string
     */
    private $plan;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $speakerInfo;

    /**
     * @var integer
     */
    private $viewPurview;

    /**
     * @var integer
     */
    private $switchClient;

    /**
     * @var string
     */
    private $organizerToken;

    /**
     * @var string
     */
    private $panelistToken;

    /**
     * @var string
     */
    private $attendeeToken;

    /**
     * @var integer
     */
    private $realtime;

    /**
     * @var integer
     */
    private $maxAttendees;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $verify;

    /**
     * @var integer
     */
    private $isSuccess;

    /**
     * @var string
     */
    private $organizerJoinUrl;

    /**
     * @var string
     */
    private $panelistJoinUrl;

    /**
     * @var string
     */
    private $attendeeJoinUrl;

    /**
     * @var string
     */
    private $webcastNumber;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $kefu;

    /**
     * @var integer
     */
    private $flowNum;

    /**
     * @var integer
     */
    private $viewNum;

    /**
     * @var integer
     */
    private $viewTotal;

    /**
     * @var integer
     */
    private $intentionNum;

    /**
     * @var string
     */
    private $totalUsers;

    /**
     * @var string
     */
    private $shenUsername;

    /**
     * @var integer
     */
    private $shenTime;

    /**
     * @var integer
     */
    private $created;


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
     * @return TrjWebcast
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
     * Set webcastId
     *
     * @param string $webcastId
     * @return TrjWebcast
     */
    public function setWebcastId($webcastId)
    {
        $this->webcastId = $webcastId;

        return $this;
    }

    /**
     * Get webcastId
     *
     * @return string 
     */
    public function getWebcastId()
    {
        return $this->webcastId;
    }

    /**
     * Set recordId
     *
     * @param string $recordId
     * @return TrjWebcast
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * Get recordId
     *
     * @return string 
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Set classify
     *
     * @param integer $classify
     * @return TrjWebcast
     */
    public function setClassify($classify)
    {
        $this->classify = $classify;

        return $this;
    }

    /**
     * Get classify
     *
     * @return integer 
     */
    public function getClassify()
    {
        return $this->classify;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjWebcast
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

    /**
     * Set linkInfo
     *
     * @param string $linkInfo
     * @return TrjWebcast
     */
    public function setLinkInfo($linkInfo)
    {
        $this->linkInfo = $linkInfo;

        return $this;
    }

    /**
     * Get linkInfo
     *
     * @return string 
     */
    public function getLinkInfo()
    {
        return $this->linkInfo;
    }

    /**
     * Set tolable
     *
     * @param string $tolable
     * @return TrjWebcast
     */
    public function setTolable($tolable)
    {
        $this->tolable = $tolable;

        return $this;
    }

    /**
     * Get tolable
     *
     * @return string 
     */
    public function getTolable()
    {
        return $this->tolable;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TrjWebcast
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return TrjWebcast
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     * @return TrjWebcast
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     * @return TrjWebcast
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set takeTime
     *
     * @param integer $takeTime
     * @return TrjWebcast
     */
    public function setTakeTime($takeTime)
    {
        $this->takeTime = $takeTime;

        return $this;
    }

    /**
     * Get takeTime
     *
     * @return integer 
     */
    public function getTakeTime()
    {
        return $this->takeTime;
    }

    /**
     * Set deadTime
     *
     * @param integer $deadTime
     * @return TrjWebcast
     */
    public function setDeadTime($deadTime)
    {
        $this->deadTime = $deadTime;

        return $this;
    }

    /**
     * Get deadTime
     *
     * @return integer 
     */
    public function getDeadTime()
    {
        return $this->deadTime;
    }

    /**
     * Set frontCover
     *
     * @param string $frontCover
     * @return TrjWebcast
     */
    public function setFrontCover($frontCover)
    {
        $this->frontCover = $frontCover;

        return $this;
    }

    /**
     * Get frontCover
     *
     * @return string 
     */
    public function getFrontCover()
    {
        return $this->frontCover;
    }

    /**
     * Set roadShowPpt
     *
     * @param string $roadShowPpt
     * @return TrjWebcast
     */
    public function setRoadShowPpt($roadShowPpt)
    {
        $this->roadShowPpt = $roadShowPpt;

        return $this;
    }

    /**
     * Get roadShowPpt
     *
     * @return string 
     */
    public function getRoadShowPpt()
    {
        return $this->roadShowPpt;
    }

    /**
     * Set loginRequired
     *
     * @param integer $loginRequired
     * @return TrjWebcast
     */
    public function setLoginRequired($loginRequired)
    {
        $this->loginRequired = $loginRequired;

        return $this;
    }

    /**
     * Get loginRequired
     *
     * @return integer 
     */
    public function getLoginRequired()
    {
        return $this->loginRequired;
    }

    /**
     * Set opened
     *
     * @param integer $opened
     * @return TrjWebcast
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened
     *
     * @return integer 
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Set plan
     *
     * @param string $plan
     * @return TrjWebcast
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return string 
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrjWebcast
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set speakerInfo
     *
     * @param string $speakerInfo
     * @return TrjWebcast
     */
    public function setSpeakerInfo($speakerInfo)
    {
        $this->speakerInfo = $speakerInfo;

        return $this;
    }

    /**
     * Get speakerInfo
     *
     * @return string 
     */
    public function getSpeakerInfo()
    {
        return $this->speakerInfo;
    }

    /**
     * Set viewPurview
     *
     * @param integer $viewPurview
     * @return TrjWebcast
     */
    public function setViewPurview($viewPurview)
    {
        $this->viewPurview = $viewPurview;

        return $this;
    }

    /**
     * Get viewPurview
     *
     * @return integer 
     */
    public function getViewPurview()
    {
        return $this->viewPurview;
    }

    /**
     * Set switchClient
     *
     * @param integer $switchClient
     * @return TrjWebcast
     */
    public function setSwitchClient($switchClient)
    {
        $this->switchClient = $switchClient;

        return $this;
    }

    /**
     * Get switchClient
     *
     * @return integer 
     */
    public function getSwitchClient()
    {
        return $this->switchClient;
    }

    /**
     * Set organizerToken
     *
     * @param string $organizerToken
     * @return TrjWebcast
     */
    public function setOrganizerToken($organizerToken)
    {
        $this->organizerToken = $organizerToken;

        return $this;
    }

    /**
     * Get organizerToken
     *
     * @return string 
     */
    public function getOrganizerToken()
    {
        return $this->organizerToken;
    }

    /**
     * Set panelistToken
     *
     * @param string $panelistToken
     * @return TrjWebcast
     */
    public function setPanelistToken($panelistToken)
    {
        $this->panelistToken = $panelistToken;

        return $this;
    }

    /**
     * Get panelistToken
     *
     * @return string 
     */
    public function getPanelistToken()
    {
        return $this->panelistToken;
    }

    /**
     * Set attendeeToken
     *
     * @param string $attendeeToken
     * @return TrjWebcast
     */
    public function setAttendeeToken($attendeeToken)
    {
        $this->attendeeToken = $attendeeToken;

        return $this;
    }

    /**
     * Get attendeeToken
     *
     * @return string 
     */
    public function getAttendeeToken()
    {
        return $this->attendeeToken;
    }

    /**
     * Set realtime
     *
     * @param integer $realtime
     * @return TrjWebcast
     */
    public function setRealtime($realtime)
    {
        $this->realtime = $realtime;

        return $this;
    }

    /**
     * Get realtime
     *
     * @return integer 
     */
    public function getRealtime()
    {
        return $this->realtime;
    }

    /**
     * Set maxAttendees
     *
     * @param integer $maxAttendees
     * @return TrjWebcast
     */
    public function setMaxAttendees($maxAttendees)
    {
        $this->maxAttendees = $maxAttendees;

        return $this;
    }

    /**
     * Get maxAttendees
     *
     * @return integer 
     */
    public function getMaxAttendees()
    {
        return $this->maxAttendees;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjWebcast
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
     * Set verify
     *
     * @param integer $verify
     * @return TrjWebcast
     */
    public function setVerify($verify)
    {
        $this->verify = $verify;

        return $this;
    }

    /**
     * Get verify
     *
     * @return integer 
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Set isSuccess
     *
     * @param integer $isSuccess
     * @return TrjWebcast
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;

        return $this;
    }

    /**
     * Get isSuccess
     *
     * @return integer 
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * Set organizerJoinUrl
     *
     * @param string $organizerJoinUrl
     * @return TrjWebcast
     */
    public function setOrganizerJoinUrl($organizerJoinUrl)
    {
        $this->organizerJoinUrl = $organizerJoinUrl;

        return $this;
    }

    /**
     * Get organizerJoinUrl
     *
     * @return string 
     */
    public function getOrganizerJoinUrl()
    {
        return $this->organizerJoinUrl;
    }

    /**
     * Set panelistJoinUrl
     *
     * @param string $panelistJoinUrl
     * @return TrjWebcast
     */
    public function setPanelistJoinUrl($panelistJoinUrl)
    {
        $this->panelistJoinUrl = $panelistJoinUrl;

        return $this;
    }

    /**
     * Get panelistJoinUrl
     *
     * @return string 
     */
    public function getPanelistJoinUrl()
    {
        return $this->panelistJoinUrl;
    }

    /**
     * Set attendeeJoinUrl
     *
     * @param string $attendeeJoinUrl
     * @return TrjWebcast
     */
    public function setAttendeeJoinUrl($attendeeJoinUrl)
    {
        $this->attendeeJoinUrl = $attendeeJoinUrl;

        return $this;
    }

    /**
     * Get attendeeJoinUrl
     *
     * @return string 
     */
    public function getAttendeeJoinUrl()
    {
        return $this->attendeeJoinUrl;
    }

    /**
     * Set webcastNumber
     *
     * @param string $webcastNumber
     * @return TrjWebcast
     */
    public function setWebcastNumber($webcastNumber)
    {
        $this->webcastNumber = $webcastNumber;

        return $this;
    }

    /**
     * Get webcastNumber
     *
     * @return string 
     */
    public function getWebcastNumber()
    {
        return $this->webcastNumber;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjWebcast
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
     * Set mobile
     *
     * @param string $mobile
     * @return TrjWebcast
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
     * Set kefu
     *
     * @param string $kefu
     * @return TrjWebcast
     */
    public function setKefu($kefu)
    {
        $this->kefu = $kefu;

        return $this;
    }

    /**
     * Get kefu
     *
     * @return string 
     */
    public function getKefu()
    {
        return $this->kefu;
    }

    /**
     * Set flowNum
     *
     * @param integer $flowNum
     * @return TrjWebcast
     */
    public function setFlowNum($flowNum)
    {
        $this->flowNum = $flowNum;

        return $this;
    }

    /**
     * Get flowNum
     *
     * @return integer 
     */
    public function getFlowNum()
    {
        return $this->flowNum;
    }

    /**
     * Set viewNum
     *
     * @param integer $viewNum
     * @return TrjWebcast
     */
    public function setViewNum($viewNum)
    {
        $this->viewNum = $viewNum;

        return $this;
    }

    /**
     * Get viewNum
     *
     * @return integer 
     */
    public function getViewNum()
    {
        return $this->viewNum;
    }

    /**
     * Set viewTotal
     *
     * @param integer $viewTotal
     * @return TrjWebcast
     */
    public function setViewTotal($viewTotal)
    {
        $this->viewTotal = $viewTotal;

        return $this;
    }

    /**
     * Get viewTotal
     *
     * @return integer 
     */
    public function getViewTotal()
    {
        return $this->viewTotal;
    }

    /**
     * Set intentionNum
     *
     * @param integer $intentionNum
     * @return TrjWebcast
     */
    public function setIntentionNum($intentionNum)
    {
        $this->intentionNum = $intentionNum;

        return $this;
    }

    /**
     * Get intentionNum
     *
     * @return integer 
     */
    public function getIntentionNum()
    {
        return $this->intentionNum;
    }

    /**
     * Set totalUsers
     *
     * @param string $totalUsers
     * @return TrjWebcast
     */
    public function setTotalUsers($totalUsers)
    {
        $this->totalUsers = $totalUsers;

        return $this;
    }

    /**
     * Get totalUsers
     *
     * @return string 
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    /**
     * Set shenUsername
     *
     * @param string $shenUsername
     * @return TrjWebcast
     */
    public function setShenUsername($shenUsername)
    {
        $this->shenUsername = $shenUsername;

        return $this;
    }

    /**
     * Get shenUsername
     *
     * @return string 
     */
    public function getShenUsername()
    {
        return $this->shenUsername;
    }

    /**
     * Set shenTime
     *
     * @param integer $shenTime
     * @return TrjWebcast
     */
    public function setShenTime($shenTime)
    {
        $this->shenTime = $shenTime;

        return $this;
    }

    /**
     * Get shenTime
     *
     * @return integer 
     */
    public function getShenTime()
    {
        return $this->shenTime;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjWebcast
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
