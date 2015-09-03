<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAsk
 */
class TrjAsk
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cateId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $labels;

    /**
     * @var string
     */
    private $contentAdd;

    /**
     * @var integer
     */
    private $hitNum;

    /**
     * @var integer
     */
    private $answerNum;

    /**
     * @var integer
     */
    private $allAnswerNum;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userUsername;

    /**
     * @var integer
     */
    private $status;

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
     * Set cateId
     *
     * @param integer $cateId
     * @return TrjAsk
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;

        return $this;
    }

    /**
     * Get cateId
     *
     * @return integer 
     */
    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjAsk
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
     * Set content
     *
     * @param string $content
     * @return TrjAsk
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set labels
     *
     * @param string $labels
     * @return TrjAsk
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return string 
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set contentAdd
     *
     * @param string $contentAdd
     * @return TrjAsk
     */
    public function setContentAdd($contentAdd)
    {
        $this->contentAdd = $contentAdd;

        return $this;
    }

    /**
     * Get contentAdd
     *
     * @return string 
     */
    public function getContentAdd()
    {
        return $this->contentAdd;
    }

    /**
     * Set hitNum
     *
     * @param integer $hitNum
     * @return TrjAsk
     */
    public function setHitNum($hitNum)
    {
        $this->hitNum = $hitNum;

        return $this;
    }

    /**
     * Get hitNum
     *
     * @return integer 
     */
    public function getHitNum()
    {
        return $this->hitNum;
    }

    /**
     * Set answerNum
     *
     * @param integer $answerNum
     * @return TrjAsk
     */
    public function setAnswerNum($answerNum)
    {
        $this->answerNum = $answerNum;

        return $this;
    }

    /**
     * Get answerNum
     *
     * @return integer 
     */
    public function getAnswerNum()
    {
        return $this->answerNum;
    }

    /**
     * Set allAnswerNum
     *
     * @param integer $allAnswerNum
     * @return TrjAsk
     */
    public function setAllAnswerNum($allAnswerNum)
    {
        $this->allAnswerNum = $allAnswerNum;

        return $this;
    }

    /**
     * Get allAnswerNum
     *
     * @return integer 
     */
    public function getAllAnswerNum()
    {
        return $this->allAnswerNum;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjAsk
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

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjAsk
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
     * Set userUsername
     *
     * @param string $userUsername
     * @return TrjAsk
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * Get userUsername
     *
     * @return string 
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjAsk
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
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjAsk
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
     * @return TrjAsk
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
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjAsk
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
