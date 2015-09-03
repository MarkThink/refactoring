<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersEvaluate
 */
class TrjUsersEvaluate
{
    /**
     * @var integer
     */
    private $pid;

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
    private $tousername;

    /**
     * @var integer
     */
    private $touid;

    /**
     * @var integer
     */
    private $infoid;

    /**
     * @var integer
     */
    private $score;

    /**
     * @var string
     */
    private $scoreContent;

    /**
     * @var string
     */
    private $sourceTitle;

    /**
     * @var integer
     */
    private $validNum;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $ishidden;

    /**
     * @var string
     */
    private $postip;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $shenhe;

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
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set fromusername
     *
     * @param string $fromusername
     * @return TrjUsersEvaluate
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
     * @return TrjUsersEvaluate
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
     * Set tousername
     *
     * @param string $tousername
     * @return TrjUsersEvaluate
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
     * @return TrjUsersEvaluate
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
     * Set infoid
     *
     * @param integer $infoid
     * @return TrjUsersEvaluate
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
     * Set score
     *
     * @param integer $score
     * @return TrjUsersEvaluate
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set scoreContent
     *
     * @param string $scoreContent
     * @return TrjUsersEvaluate
     */
    public function setScoreContent($scoreContent)
    {
        $this->scoreContent = $scoreContent;

        return $this;
    }

    /**
     * Get scoreContent
     *
     * @return string 
     */
    public function getScoreContent()
    {
        return $this->scoreContent;
    }

    /**
     * Set sourceTitle
     *
     * @param string $sourceTitle
     * @return TrjUsersEvaluate
     */
    public function setSourceTitle($sourceTitle)
    {
        $this->sourceTitle = $sourceTitle;

        return $this;
    }

    /**
     * Get sourceTitle
     *
     * @return string 
     */
    public function getSourceTitle()
    {
        return $this->sourceTitle;
    }

    /**
     * Set validNum
     *
     * @param integer $validNum
     * @return TrjUsersEvaluate
     */
    public function setValidNum($validNum)
    {
        $this->validNum = $validNum;

        return $this;
    }

    /**
     * Get validNum
     *
     * @return integer 
     */
    public function getValidNum()
    {
        return $this->validNum;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjUsersEvaluate
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
     * Set ishidden
     *
     * @param integer $ishidden
     * @return TrjUsersEvaluate
     */
    public function setIshidden($ishidden)
    {
        $this->ishidden = $ishidden;

        return $this;
    }

    /**
     * Get ishidden
     *
     * @return integer 
     */
    public function getIshidden()
    {
        return $this->ishidden;
    }

    /**
     * Set postip
     *
     * @param string $postip
     * @return TrjUsersEvaluate
     */
    public function setPostip($postip)
    {
        $this->postip = $postip;

        return $this;
    }

    /**
     * Get postip
     *
     * @return string 
     */
    public function getPostip()
    {
        return $this->postip;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersEvaluate
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
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjUsersEvaluate
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
     * Set shenheTime
     *
     * @param integer $shenheTime
     * @return TrjUsersEvaluate
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
     * @return TrjUsersEvaluate
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
     * @return TrjUsersEvaluate
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
}
