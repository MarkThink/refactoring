<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAttachImages
 */
class TrjAttachImages
{
    /**
     * @var integer
     */
    private $attachId;

    /**
     * @var integer
     */
    private $isVerify;

    /**
     * @var string
     */
    private $verifyResult;

    /**
     * @var integer
     */
    private $verifyRid;

    /**
     * @var integer
     */
    private $submitTime;

    /**
     * @var integer
     */
    private $verifyTime;

    /**
     * @var integer
     */
    private $verifyUserid;

    /**
     * @var integer
     */
    private $verifyUsername;

    /**
     * @var integer
     */
    private $trackid;


    /**
     * Get attachId
     *
     * @return integer 
     */
    public function getAttachId()
    {
        return $this->attachId;
    }

    /**
     * Set isVerify
     *
     * @param integer $isVerify
     * @return TrjAttachImages
     */
    public function setIsVerify($isVerify)
    {
        $this->isVerify = $isVerify;

        return $this;
    }

    /**
     * Get isVerify
     *
     * @return integer 
     */
    public function getIsVerify()
    {
        return $this->isVerify;
    }

    /**
     * Set verifyResult
     *
     * @param string $verifyResult
     * @return TrjAttachImages
     */
    public function setVerifyResult($verifyResult)
    {
        $this->verifyResult = $verifyResult;

        return $this;
    }

    /**
     * Get verifyResult
     *
     * @return string 
     */
    public function getVerifyResult()
    {
        return $this->verifyResult;
    }

    /**
     * Set verifyRid
     *
     * @param integer $verifyRid
     * @return TrjAttachImages
     */
    public function setVerifyRid($verifyRid)
    {
        $this->verifyRid = $verifyRid;

        return $this;
    }

    /**
     * Get verifyRid
     *
     * @return integer 
     */
    public function getVerifyRid()
    {
        return $this->verifyRid;
    }

    /**
     * Set submitTime
     *
     * @param integer $submitTime
     * @return TrjAttachImages
     */
    public function setSubmitTime($submitTime)
    {
        $this->submitTime = $submitTime;

        return $this;
    }

    /**
     * Get submitTime
     *
     * @return integer 
     */
    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     * @return TrjAttachImages
     */
    public function setVerifyTime($verifyTime)
    {
        $this->verifyTime = $verifyTime;

        return $this;
    }

    /**
     * Get verifyTime
     *
     * @return integer 
     */
    public function getVerifyTime()
    {
        return $this->verifyTime;
    }

    /**
     * Set verifyUserid
     *
     * @param integer $verifyUserid
     * @return TrjAttachImages
     */
    public function setVerifyUserid($verifyUserid)
    {
        $this->verifyUserid = $verifyUserid;

        return $this;
    }

    /**
     * Get verifyUserid
     *
     * @return integer 
     */
    public function getVerifyUserid()
    {
        return $this->verifyUserid;
    }

    /**
     * Set verifyUsername
     *
     * @param integer $verifyUsername
     * @return TrjAttachImages
     */
    public function setVerifyUsername($verifyUsername)
    {
        $this->verifyUsername = $verifyUsername;

        return $this;
    }

    /**
     * Get verifyUsername
     *
     * @return integer 
     */
    public function getVerifyUsername()
    {
        return $this->verifyUsername;
    }

    /**
     * Set trackid
     *
     * @param integer $trackid
     * @return TrjAttachImages
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return integer 
     */
    public function getTrackid()
    {
        return $this->trackid;
    }
}
