<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjInfoComment
 */
class TrjInfoComment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $infoId;

    /**
     * @var string
     */
    private $infoTitle;

    /**
     * @var integer
     */
    private $infoType;

    /**
     * @var integer
     */
    private $infoUid;

    /**
     * @var string
     */
    private $infoUsername;

    /**
     * @var integer
     */
    private $commentUid;

    /**
     * @var string
     */
    private $commentUsername;

    /**
     * @var string
     */
    private $commentContent;

    /**
     * @var integer
     */
    private $commentIp;

    /**
     * @var integer
     */
    private $commentTime;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var string
     */
    private $shenheReason;

    /**
     * @var integer
     */
    private $shenheTime;

    /**
     * @var integer
     */
    private $shenheUid;

    /**
     * @var string
     */
    private $shenheUsername;

    /**
     * @var integer
     */
    private $replyShenhe;

    /**
     * @var string
     */
    private $replyContent;

    /**
     * @var string
     */
    private $replyShenheUsername;

    /**
     * @var integer
     */
    private $replyTime;

    /**
     * @var integer
     */
    private $replyShenheTime;

    /**
     * @var integer
     */
    private $emailRemind;

    /**
     * @var integer
     */
    private $dNum;

    /**
     * @var integer
     */
    private $cNum;

    /**
     * @var integer
     */
    private $viewAuth;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set infoId
     *
     * @param integer $infoId
     * @return TrjInfoComment
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return integer 
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set infoTitle
     *
     * @param string $infoTitle
     * @return TrjInfoComment
     */
    public function setInfoTitle($infoTitle)
    {
        $this->infoTitle = $infoTitle;

        return $this;
    }

    /**
     * Get infoTitle
     *
     * @return string 
     */
    public function getInfoTitle()
    {
        return $this->infoTitle;
    }

    /**
     * Set infoType
     *
     * @param integer $infoType
     * @return TrjInfoComment
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;

        return $this;
    }

    /**
     * Get infoType
     *
     * @return integer 
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Set infoUid
     *
     * @param integer $infoUid
     * @return TrjInfoComment
     */
    public function setInfoUid($infoUid)
    {
        $this->infoUid = $infoUid;

        return $this;
    }

    /**
     * Get infoUid
     *
     * @return integer 
     */
    public function getInfoUid()
    {
        return $this->infoUid;
    }

    /**
     * Set infoUsername
     *
     * @param string $infoUsername
     * @return TrjInfoComment
     */
    public function setInfoUsername($infoUsername)
    {
        $this->infoUsername = $infoUsername;

        return $this;
    }

    /**
     * Get infoUsername
     *
     * @return string 
     */
    public function getInfoUsername()
    {
        return $this->infoUsername;
    }

    /**
     * Set commentUid
     *
     * @param integer $commentUid
     * @return TrjInfoComment
     */
    public function setCommentUid($commentUid)
    {
        $this->commentUid = $commentUid;

        return $this;
    }

    /**
     * Get commentUid
     *
     * @return integer 
     */
    public function getCommentUid()
    {
        return $this->commentUid;
    }

    /**
     * Set commentUsername
     *
     * @param string $commentUsername
     * @return TrjInfoComment
     */
    public function setCommentUsername($commentUsername)
    {
        $this->commentUsername = $commentUsername;

        return $this;
    }

    /**
     * Get commentUsername
     *
     * @return string 
     */
    public function getCommentUsername()
    {
        return $this->commentUsername;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     * @return TrjInfoComment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string 
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentIp
     *
     * @param integer $commentIp
     * @return TrjInfoComment
     */
    public function setCommentIp($commentIp)
    {
        $this->commentIp = $commentIp;

        return $this;
    }

    /**
     * Get commentIp
     *
     * @return integer 
     */
    public function getCommentIp()
    {
        return $this->commentIp;
    }

    /**
     * Set commentTime
     *
     * @param integer $commentTime
     * @return TrjInfoComment
     */
    public function setCommentTime($commentTime)
    {
        $this->commentTime = $commentTime;

        return $this;
    }

    /**
     * Get commentTime
     *
     * @return integer 
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjInfoComment
     */
    public function setShenhe($shenhe)
    {
        $this->shenhe = $shenhe;

        return $this;
    }

    /**
     * Get shenhe
     *
     * @return integer 
     */
    public function getShenhe()
    {
        return $this->shenhe;
    }

    /**
     * Set shenheReason
     *
     * @param string $shenheReason
     * @return TrjInfoComment
     */
    public function setShenheReason($shenheReason)
    {
        $this->shenheReason = $shenheReason;

        return $this;
    }

    /**
     * Get shenheReason
     *
     * @return string 
     */
    public function getShenheReason()
    {
        return $this->shenheReason;
    }

    /**
     * Set shenheTime
     *
     * @param integer $shenheTime
     * @return TrjInfoComment
     */
    public function setShenheTime($shenheTime)
    {
        $this->shenheTime = $shenheTime;

        return $this;
    }

    /**
     * Get shenheTime
     *
     * @return integer 
     */
    public function getShenheTime()
    {
        return $this->shenheTime;
    }

    /**
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjInfoComment
     */
    public function setShenheUid($shenheUid)
    {
        $this->shenheUid = $shenheUid;

        return $this;
    }

    /**
     * Get shenheUid
     *
     * @return integer 
     */
    public function getShenheUid()
    {
        return $this->shenheUid;
    }

    /**
     * Set shenheUsername
     *
     * @param string $shenheUsername
     * @return TrjInfoComment
     */
    public function setShenheUsername($shenheUsername)
    {
        $this->shenheUsername = $shenheUsername;

        return $this;
    }

    /**
     * Get shenheUsername
     *
     * @return string 
     */
    public function getShenheUsername()
    {
        return $this->shenheUsername;
    }

    /**
     * Set replyShenhe
     *
     * @param integer $replyShenhe
     * @return TrjInfoComment
     */
    public function setReplyShenhe($replyShenhe)
    {
        $this->replyShenhe = $replyShenhe;

        return $this;
    }

    /**
     * Get replyShenhe
     *
     * @return integer 
     */
    public function getReplyShenhe()
    {
        return $this->replyShenhe;
    }

    /**
     * Set replyContent
     *
     * @param string $replyContent
     * @return TrjInfoComment
     */
    public function setReplyContent($replyContent)
    {
        $this->replyContent = $replyContent;

        return $this;
    }

    /**
     * Get replyContent
     *
     * @return string 
     */
    public function getReplyContent()
    {
        return $this->replyContent;
    }

    /**
     * Set replyShenheUsername
     *
     * @param string $replyShenheUsername
     * @return TrjInfoComment
     */
    public function setReplyShenheUsername($replyShenheUsername)
    {
        $this->replyShenheUsername = $replyShenheUsername;

        return $this;
    }

    /**
     * Get replyShenheUsername
     *
     * @return string 
     */
    public function getReplyShenheUsername()
    {
        return $this->replyShenheUsername;
    }

    /**
     * Set replyTime
     *
     * @param integer $replyTime
     * @return TrjInfoComment
     */
    public function setReplyTime($replyTime)
    {
        $this->replyTime = $replyTime;

        return $this;
    }

    /**
     * Get replyTime
     *
     * @return integer 
     */
    public function getReplyTime()
    {
        return $this->replyTime;
    }

    /**
     * Set replyShenheTime
     *
     * @param integer $replyShenheTime
     * @return TrjInfoComment
     */
    public function setReplyShenheTime($replyShenheTime)
    {
        $this->replyShenheTime = $replyShenheTime;

        return $this;
    }

    /**
     * Get replyShenheTime
     *
     * @return integer 
     */
    public function getReplyShenheTime()
    {
        return $this->replyShenheTime;
    }

    /**
     * Set emailRemind
     *
     * @param integer $emailRemind
     * @return TrjInfoComment
     */
    public function setEmailRemind($emailRemind)
    {
        $this->emailRemind = $emailRemind;

        return $this;
    }

    /**
     * Get emailRemind
     *
     * @return integer 
     */
    public function getEmailRemind()
    {
        return $this->emailRemind;
    }

    /**
     * Set dNum
     *
     * @param integer $dNum
     * @return TrjInfoComment
     */
    public function setDNum($dNum)
    {
        $this->dNum = $dNum;

        return $this;
    }

    /**
     * Get dNum
     *
     * @return integer 
     */
    public function getDNum()
    {
        return $this->dNum;
    }

    /**
     * Set cNum
     *
     * @param integer $cNum
     * @return TrjInfoComment
     */
    public function setCNum($cNum)
    {
        $this->cNum = $cNum;

        return $this;
    }

    /**
     * Get cNum
     *
     * @return integer 
     */
    public function getCNum()
    {
        return $this->cNum;
    }

    /**
     * Set viewAuth
     *
     * @param integer $viewAuth
     * @return TrjInfoComment
     */
    public function setViewAuth($viewAuth)
    {
        $this->viewAuth = $viewAuth;

        return $this;
    }

    /**
     * Get viewAuth
     *
     * @return integer 
     */
    public function getViewAuth()
    {
        return $this->viewAuth;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjInfoComment
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
