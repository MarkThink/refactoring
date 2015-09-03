<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSmsCodeLog
 */
class TrjSmsCodeLog
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
    private $way;

    /**
     * @var string
     */
    private $mobile;

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
    private $isDistribution;

    /**
     * @var integer
     */
    private $fromWeb;

    /**
     * @var string
     */
    private $processRemark;

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
     * @var integer
     */
    private $minfoId;

    /**
     * @var string
     */
    private $trackid;

    /**
     * @var string
     */
    private $referer;

    /**
     * @var integer
     */
    private $seoCat;


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
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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
     * Set way
     *
     * @param string $way
     * @return TrjSmsCodeLog
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
     * Set mobile
     *
     * @param string $mobile
     * @return TrjSmsCodeLog
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
     * Set isReg
     *
     * @param integer $isReg
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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
     * Set isDistribution
     *
     * @param integer $isDistribution
     * @return TrjSmsCodeLog
     */
    public function setIsDistribution($isDistribution)
    {
        $this->isDistribution = $isDistribution;

        return $this;
    }

    /**
     * Get isDistribution
     *
     * @return integer 
     */
    public function getIsDistribution()
    {
        return $this->isDistribution;
    }

    /**
     * Set fromWeb
     *
     * @param integer $fromWeb
     * @return TrjSmsCodeLog
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
     * Set processRemark
     *
     * @param string $processRemark
     * @return TrjSmsCodeLog
     */
    public function setProcessRemark($processRemark)
    {
        $this->processRemark = $processRemark;

        return $this;
    }

    /**
     * Get processRemark
     *
     * @return string 
     */
    public function getProcessRemark()
    {
        return $this->processRemark;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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
     * Set minfoId
     *
     * @param integer $minfoId
     * @return TrjSmsCodeLog
     */
    public function setMinfoId($minfoId)
    {
        $this->minfoId = $minfoId;

        return $this;
    }

    /**
     * Get minfoId
     *
     * @return integer 
     */
    public function getMinfoId()
    {
        return $this->minfoId;
    }

    /**
     * Set trackid
     *
     * @param string $trackid
     * @return TrjSmsCodeLog
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
     * @return TrjSmsCodeLog
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

    /**
     * Set seoCat
     *
     * @param integer $seoCat
     * @return TrjSmsCodeLog
     */
    public function setSeoCat($seoCat)
    {
        $this->seoCat = $seoCat;

        return $this;
    }

    /**
     * Get seoCat
     *
     * @return integer 
     */
    public function getSeoCat()
    {
        return $this->seoCat;
    }
}
