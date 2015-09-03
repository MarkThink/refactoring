<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebcastRecord
 */
class TrjWebcastRecord
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $webcastId;

    /**
     * @var string
     */
    private $recordId;

    /**
     * @var string
     */
    private $recordPwd;

    /**
     * @var integer
     */
    private $recordStartTime;

    /**
     * @var integer
     */
    private $recordEndTime;

    /**
     * @var integer
     */
    private $recordSize;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $pushUrl;

    /**
     * @var integer
     */
    private $status;


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
     * Set webcastId
     *
     * @param string $webcastId
     * @return TrjWebcastRecord
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
     * @return TrjWebcastRecord
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
     * Set recordPwd
     *
     * @param string $recordPwd
     * @return TrjWebcastRecord
     */
    public function setRecordPwd($recordPwd)
    {
        $this->recordPwd = $recordPwd;

        return $this;
    }

    /**
     * Get recordPwd
     *
     * @return string 
     */
    public function getRecordPwd()
    {
        return $this->recordPwd;
    }

    /**
     * Set recordStartTime
     *
     * @param integer $recordStartTime
     * @return TrjWebcastRecord
     */
    public function setRecordStartTime($recordStartTime)
    {
        $this->recordStartTime = $recordStartTime;

        return $this;
    }

    /**
     * Get recordStartTime
     *
     * @return integer 
     */
    public function getRecordStartTime()
    {
        return $this->recordStartTime;
    }

    /**
     * Set recordEndTime
     *
     * @param integer $recordEndTime
     * @return TrjWebcastRecord
     */
    public function setRecordEndTime($recordEndTime)
    {
        $this->recordEndTime = $recordEndTime;

        return $this;
    }

    /**
     * Get recordEndTime
     *
     * @return integer 
     */
    public function getRecordEndTime()
    {
        return $this->recordEndTime;
    }

    /**
     * Set recordSize
     *
     * @param integer $recordSize
     * @return TrjWebcastRecord
     */
    public function setRecordSize($recordSize)
    {
        $this->recordSize = $recordSize;

        return $this;
    }

    /**
     * Get recordSize
     *
     * @return integer 
     */
    public function getRecordSize()
    {
        return $this->recordSize;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TrjWebcastRecord
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
     * Set url
     *
     * @param string $url
     * @return TrjWebcastRecord
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set pushUrl
     *
     * @param string $pushUrl
     * @return TrjWebcastRecord
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;

        return $this;
    }

    /**
     * Get pushUrl
     *
     * @return string 
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjWebcastRecord
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
}
