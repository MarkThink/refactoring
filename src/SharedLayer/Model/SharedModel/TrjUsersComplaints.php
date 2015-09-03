<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersComplaints
 */
class TrjUsersComplaints
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $trackno;

    /**
     * @var string
     */
    private $fromusername;

    /**
     * @var integer
     */
    private $fromuid;

    /**
     * @var string
     */
    private $fromReason1;

    /**
     * @var string
     */
    private $fromProof1;

    /**
     * @var integer
     */
    private $fromTime1;

    /**
     * @var integer
     */
    private $fromStatus1;

    /**
     * @var string
     */
    private $fromReason2;

    /**
     * @var string
     */
    private $fromProof2;

    /**
     * @var integer
     */
    private $fromTime2;

    /**
     * @var integer
     */
    private $fromStatus2;

    /**
     * @var string
     */
    private $tousername;

    /**
     * @var integer
     */
    private $touid;

    /**
     * @var integer
     */
    private $toType;

    /**
     * @var integer
     */
    private $toInfoId;

    /**
     * @var string
     */
    private $toInfoTitle;

    /**
     * @var string
     */
    private $toReason1;

    /**
     * @var string
     */
    private $toProof1;

    /**
     * @var integer
     */
    private $toTime1;

    /**
     * @var integer
     */
    private $toStatus1;

    /**
     * @var string
     */
    private $toReason2;

    /**
     * @var string
     */
    private $toProof2;

    /**
     * @var integer
     */
    private $toTime2;

    /**
     * @var integer
     */
    private $isView;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $complaintsNum;

    /**
     * @var integer
     */
    private $proofTime;

    /**
     * @var string
     */
    private $resultUsername;

    /**
     * @var integer
     */
    private $resultUid;

    /**
     * @var integer
     */
    private $resultStatus;

    /**
     * @var string
     */
    private $resultContent;

    /**
     * @var integer
     */
    private $resultShow;

    /**
     * @var string
     */
    private $resultReport;

    /**
     * @var string
     */
    private $resultFile;

    /**
     * @var integer
     */
    private $resultTime;

    /**
     * @var integer
     */
    private $isdel;


    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set trackno
     *
     * @param string $trackno
     * @return TrjUsersComplaints
     */
    public function setTrackno($trackno)
    {
        $this->trackno = $trackno;

        return $this;
    }

    /**
     * Get trackno
     *
     * @return string 
     */
    public function getTrackno()
    {
        return $this->trackno;
    }

    /**
     * Set fromusername
     *
     * @param string $fromusername
     * @return TrjUsersComplaints
     */
    public function setFromusername($fromusername)
    {
        $this->fromusername = $fromusername;

        return $this;
    }

    /**
     * Get fromusername
     *
     * @return string 
     */
    public function getFromusername()
    {
        return $this->fromusername;
    }

    /**
     * Set fromuid
     *
     * @param integer $fromuid
     * @return TrjUsersComplaints
     */
    public function setFromuid($fromuid)
    {
        $this->fromuid = $fromuid;

        return $this;
    }

    /**
     * Get fromuid
     *
     * @return integer 
     */
    public function getFromuid()
    {
        return $this->fromuid;
    }

    /**
     * Set fromReason1
     *
     * @param string $fromReason1
     * @return TrjUsersComplaints
     */
    public function setFromReason1($fromReason1)
    {
        $this->fromReason1 = $fromReason1;

        return $this;
    }

    /**
     * Get fromReason1
     *
     * @return string 
     */
    public function getFromReason1()
    {
        return $this->fromReason1;
    }

    /**
     * Set fromProof1
     *
     * @param string $fromProof1
     * @return TrjUsersComplaints
     */
    public function setFromProof1($fromProof1)
    {
        $this->fromProof1 = $fromProof1;

        return $this;
    }

    /**
     * Get fromProof1
     *
     * @return string 
     */
    public function getFromProof1()
    {
        return $this->fromProof1;
    }

    /**
     * Set fromTime1
     *
     * @param integer $fromTime1
     * @return TrjUsersComplaints
     */
    public function setFromTime1($fromTime1)
    {
        $this->fromTime1 = $fromTime1;

        return $this;
    }

    /**
     * Get fromTime1
     *
     * @return integer 
     */
    public function getFromTime1()
    {
        return $this->fromTime1;
    }

    /**
     * Set fromStatus1
     *
     * @param integer $fromStatus1
     * @return TrjUsersComplaints
     */
    public function setFromStatus1($fromStatus1)
    {
        $this->fromStatus1 = $fromStatus1;

        return $this;
    }

    /**
     * Get fromStatus1
     *
     * @return integer 
     */
    public function getFromStatus1()
    {
        return $this->fromStatus1;
    }

    /**
     * Set fromReason2
     *
     * @param string $fromReason2
     * @return TrjUsersComplaints
     */
    public function setFromReason2($fromReason2)
    {
        $this->fromReason2 = $fromReason2;

        return $this;
    }

    /**
     * Get fromReason2
     *
     * @return string 
     */
    public function getFromReason2()
    {
        return $this->fromReason2;
    }

    /**
     * Set fromProof2
     *
     * @param string $fromProof2
     * @return TrjUsersComplaints
     */
    public function setFromProof2($fromProof2)
    {
        $this->fromProof2 = $fromProof2;

        return $this;
    }

    /**
     * Get fromProof2
     *
     * @return string 
     */
    public function getFromProof2()
    {
        return $this->fromProof2;
    }

    /**
     * Set fromTime2
     *
     * @param integer $fromTime2
     * @return TrjUsersComplaints
     */
    public function setFromTime2($fromTime2)
    {
        $this->fromTime2 = $fromTime2;

        return $this;
    }

    /**
     * Get fromTime2
     *
     * @return integer 
     */
    public function getFromTime2()
    {
        return $this->fromTime2;
    }

    /**
     * Set fromStatus2
     *
     * @param integer $fromStatus2
     * @return TrjUsersComplaints
     */
    public function setFromStatus2($fromStatus2)
    {
        $this->fromStatus2 = $fromStatus2;

        return $this;
    }

    /**
     * Get fromStatus2
     *
     * @return integer 
     */
    public function getFromStatus2()
    {
        return $this->fromStatus2;
    }

    /**
     * Set tousername
     *
     * @param string $tousername
     * @return TrjUsersComplaints
     */
    public function setTousername($tousername)
    {
        $this->tousername = $tousername;

        return $this;
    }

    /**
     * Get tousername
     *
     * @return string 
     */
    public function getTousername()
    {
        return $this->tousername;
    }

    /**
     * Set touid
     *
     * @param integer $touid
     * @return TrjUsersComplaints
     */
    public function setTouid($touid)
    {
        $this->touid = $touid;

        return $this;
    }

    /**
     * Get touid
     *
     * @return integer 
     */
    public function getTouid()
    {
        return $this->touid;
    }

    /**
     * Set toType
     *
     * @param integer $toType
     * @return TrjUsersComplaints
     */
    public function setToType($toType)
    {
        $this->toType = $toType;

        return $this;
    }

    /**
     * Get toType
     *
     * @return integer 
     */
    public function getToType()
    {
        return $this->toType;
    }

    /**
     * Set toInfoId
     *
     * @param integer $toInfoId
     * @return TrjUsersComplaints
     */
    public function setToInfoId($toInfoId)
    {
        $this->toInfoId = $toInfoId;

        return $this;
    }

    /**
     * Get toInfoId
     *
     * @return integer 
     */
    public function getToInfoId()
    {
        return $this->toInfoId;
    }

    /**
     * Set toInfoTitle
     *
     * @param string $toInfoTitle
     * @return TrjUsersComplaints
     */
    public function setToInfoTitle($toInfoTitle)
    {
        $this->toInfoTitle = $toInfoTitle;

        return $this;
    }

    /**
     * Get toInfoTitle
     *
     * @return string 
     */
    public function getToInfoTitle()
    {
        return $this->toInfoTitle;
    }

    /**
     * Set toReason1
     *
     * @param string $toReason1
     * @return TrjUsersComplaints
     */
    public function setToReason1($toReason1)
    {
        $this->toReason1 = $toReason1;

        return $this;
    }

    /**
     * Get toReason1
     *
     * @return string 
     */
    public function getToReason1()
    {
        return $this->toReason1;
    }

    /**
     * Set toProof1
     *
     * @param string $toProof1
     * @return TrjUsersComplaints
     */
    public function setToProof1($toProof1)
    {
        $this->toProof1 = $toProof1;

        return $this;
    }

    /**
     * Get toProof1
     *
     * @return string 
     */
    public function getToProof1()
    {
        return $this->toProof1;
    }

    /**
     * Set toTime1
     *
     * @param integer $toTime1
     * @return TrjUsersComplaints
     */
    public function setToTime1($toTime1)
    {
        $this->toTime1 = $toTime1;

        return $this;
    }

    /**
     * Get toTime1
     *
     * @return integer 
     */
    public function getToTime1()
    {
        return $this->toTime1;
    }

    /**
     * Set toStatus1
     *
     * @param integer $toStatus1
     * @return TrjUsersComplaints
     */
    public function setToStatus1($toStatus1)
    {
        $this->toStatus1 = $toStatus1;

        return $this;
    }

    /**
     * Get toStatus1
     *
     * @return integer 
     */
    public function getToStatus1()
    {
        return $this->toStatus1;
    }

    /**
     * Set toReason2
     *
     * @param string $toReason2
     * @return TrjUsersComplaints
     */
    public function setToReason2($toReason2)
    {
        $this->toReason2 = $toReason2;

        return $this;
    }

    /**
     * Get toReason2
     *
     * @return string 
     */
    public function getToReason2()
    {
        return $this->toReason2;
    }

    /**
     * Set toProof2
     *
     * @param string $toProof2
     * @return TrjUsersComplaints
     */
    public function setToProof2($toProof2)
    {
        $this->toProof2 = $toProof2;

        return $this;
    }

    /**
     * Get toProof2
     *
     * @return string 
     */
    public function getToProof2()
    {
        return $this->toProof2;
    }

    /**
     * Set toTime2
     *
     * @param integer $toTime2
     * @return TrjUsersComplaints
     */
    public function setToTime2($toTime2)
    {
        $this->toTime2 = $toTime2;

        return $this;
    }

    /**
     * Get toTime2
     *
     * @return integer 
     */
    public function getToTime2()
    {
        return $this->toTime2;
    }

    /**
     * Set isView
     *
     * @param integer $isView
     * @return TrjUsersComplaints
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
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersComplaints
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set complaintsNum
     *
     * @param integer $complaintsNum
     * @return TrjUsersComplaints
     */
    public function setComplaintsNum($complaintsNum)
    {
        $this->complaintsNum = $complaintsNum;

        return $this;
    }

    /**
     * Get complaintsNum
     *
     * @return integer 
     */
    public function getComplaintsNum()
    {
        return $this->complaintsNum;
    }

    /**
     * Set proofTime
     *
     * @param integer $proofTime
     * @return TrjUsersComplaints
     */
    public function setProofTime($proofTime)
    {
        $this->proofTime = $proofTime;

        return $this;
    }

    /**
     * Get proofTime
     *
     * @return integer 
     */
    public function getProofTime()
    {
        return $this->proofTime;
    }

    /**
     * Set resultUsername
     *
     * @param string $resultUsername
     * @return TrjUsersComplaints
     */
    public function setResultUsername($resultUsername)
    {
        $this->resultUsername = $resultUsername;

        return $this;
    }

    /**
     * Get resultUsername
     *
     * @return string 
     */
    public function getResultUsername()
    {
        return $this->resultUsername;
    }

    /**
     * Set resultUid
     *
     * @param integer $resultUid
     * @return TrjUsersComplaints
     */
    public function setResultUid($resultUid)
    {
        $this->resultUid = $resultUid;

        return $this;
    }

    /**
     * Get resultUid
     *
     * @return integer 
     */
    public function getResultUid()
    {
        return $this->resultUid;
    }

    /**
     * Set resultStatus
     *
     * @param integer $resultStatus
     * @return TrjUsersComplaints
     */
    public function setResultStatus($resultStatus)
    {
        $this->resultStatus = $resultStatus;

        return $this;
    }

    /**
     * Get resultStatus
     *
     * @return integer 
     */
    public function getResultStatus()
    {
        return $this->resultStatus;
    }

    /**
     * Set resultContent
     *
     * @param string $resultContent
     * @return TrjUsersComplaints
     */
    public function setResultContent($resultContent)
    {
        $this->resultContent = $resultContent;

        return $this;
    }

    /**
     * Get resultContent
     *
     * @return string 
     */
    public function getResultContent()
    {
        return $this->resultContent;
    }

    /**
     * Set resultShow
     *
     * @param integer $resultShow
     * @return TrjUsersComplaints
     */
    public function setResultShow($resultShow)
    {
        $this->resultShow = $resultShow;

        return $this;
    }

    /**
     * Get resultShow
     *
     * @return integer 
     */
    public function getResultShow()
    {
        return $this->resultShow;
    }

    /**
     * Set resultReport
     *
     * @param string $resultReport
     * @return TrjUsersComplaints
     */
    public function setResultReport($resultReport)
    {
        $this->resultReport = $resultReport;

        return $this;
    }

    /**
     * Get resultReport
     *
     * @return string 
     */
    public function getResultReport()
    {
        return $this->resultReport;
    }

    /**
     * Set resultFile
     *
     * @param string $resultFile
     * @return TrjUsersComplaints
     */
    public function setResultFile($resultFile)
    {
        $this->resultFile = $resultFile;

        return $this;
    }

    /**
     * Get resultFile
     *
     * @return string 
     */
    public function getResultFile()
    {
        return $this->resultFile;
    }

    /**
     * Set resultTime
     *
     * @param integer $resultTime
     * @return TrjUsersComplaints
     */
    public function setResultTime($resultTime)
    {
        $this->resultTime = $resultTime;

        return $this;
    }

    /**
     * Get resultTime
     *
     * @return integer 
     */
    public function getResultTime()
    {
        return $this->resultTime;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjUsersComplaints
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
