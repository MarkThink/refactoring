<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSmsCode
 */
class TrjSmsCode
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $siteId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $way;

    /**
     * @var integer
     */
    private $isReg;

    /**
     * @var integer
     */
    private $isProcess;

    /**
     * @var integer
     */
    private $isVoice;

    /**
     * @var integer
     */
    private $voiceNum;

    /**
     * @var integer
     */
    private $voiceTime;

    /**
     * @var integer
     */
    private $fromWeb;

    /**
     * @var string
     */
    private $code;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var string
     */
    private $trackid;

    /**
     * @var string
     */
    private $referer;


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
     * Set siteId
     *
     * @param integer $siteId
     * @return TrjSmsCode
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrjSmsCode
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjSmsCode
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
     * Set way
     *
     * @param string $way
     * @return TrjSmsCode
     */
    public function setWay($way)
    {
        $this->way = $way;

        return $this;
    }

    /**
     * Get way
     *
     * @return string 
     */
    public function getWay()
    {
        return $this->way;
    }

    /**
     * Set isReg
     *
     * @param integer $isReg
     * @return TrjSmsCode
     */
    public function setIsReg($isReg)
    {
        $this->isReg = $isReg;

        return $this;
    }

    /**
     * Get isReg
     *
     * @return integer 
     */
    public function getIsReg()
    {
        return $this->isReg;
    }

    /**
     * Set isProcess
     *
     * @param integer $isProcess
     * @return TrjSmsCode
     */
    public function setIsProcess($isProcess)
    {
        $this->isProcess = $isProcess;

        return $this;
    }

    /**
     * Get isProcess
     *
     * @return integer 
     */
    public function getIsProcess()
    {
        return $this->isProcess;
    }

    /**
     * Set isVoice
     *
     * @param integer $isVoice
     * @return TrjSmsCode
     */
    public function setIsVoice($isVoice)
    {
        $this->isVoice = $isVoice;

        return $this;
    }

    /**
     * Get isVoice
     *
     * @return integer 
     */
    public function getIsVoice()
    {
        return $this->isVoice;
    }

    /**
     * Set voiceNum
     *
     * @param integer $voiceNum
     * @return TrjSmsCode
     */
    public function setVoiceNum($voiceNum)
    {
        $this->voiceNum = $voiceNum;

        return $this;
    }

    /**
     * Get voiceNum
     *
     * @return integer 
     */
    public function getVoiceNum()
    {
        return $this->voiceNum;
    }

    /**
     * Set voiceTime
     *
     * @param integer $voiceTime
     * @return TrjSmsCode
     */
    public function setVoiceTime($voiceTime)
    {
        $this->voiceTime = $voiceTime;

        return $this;
    }

    /**
     * Get voiceTime
     *
     * @return integer 
     */
    public function getVoiceTime()
    {
        return $this->voiceTime;
    }

    /**
     * Set fromWeb
     *
     * @param integer $fromWeb
     * @return TrjSmsCode
     */
    public function setFromWeb($fromWeb)
    {
        $this->fromWeb = $fromWeb;

        return $this;
    }

    /**
     * Get fromWeb
     *
     * @return integer 
     */
    public function getFromWeb()
    {
        return $this->fromWeb;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TrjSmsCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjSmsCode
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjSmsCode
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set trackid
     *
     * @param string $trackid
     * @return TrjSmsCode
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return string 
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * Set referer
     *
     * @param string $referer
     * @return TrjSmsCode
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string 
     */
    public function getReferer()
    {
        return $this->referer;
    }
}
