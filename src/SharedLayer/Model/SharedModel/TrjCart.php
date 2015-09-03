<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCart
 */
class TrjCart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $rowid;

    /**
     * @var integer
     */
    private $xmId;

    /**
     * @var string
     */
    private $xmName;

    /**
     * @var integer
     */
    private $xmUid;

    /**
     * @var string
     */
    private $xmMobile;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var integer
     */
    private $feedbackId;

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
     * Set rowid
     *
     * @param string $rowid
     * @return TrjCart
     */
    public function setRowid($rowid)
    {
        $this->rowid = $rowid;

        return $this;
    }

    /**
     * Get rowid
     *
     * @return string 
     */
    public function getRowid()
    {
        return $this->rowid;
    }

    /**
     * Set xmId
     *
     * @param integer $xmId
     * @return TrjCart
     */
    public function setXmId($xmId)
    {
        $this->xmId = $xmId;

        return $this;
    }

    /**
     * Get xmId
     *
     * @return integer 
     */
    public function getXmId()
    {
        return $this->xmId;
    }

    /**
     * Set xmName
     *
     * @param string $xmName
     * @return TrjCart
     */
    public function setXmName($xmName)
    {
        $this->xmName = $xmName;

        return $this;
    }

    /**
     * Get xmName
     *
     * @return string 
     */
    public function getXmName()
    {
        return $this->xmName;
    }

    /**
     * Set xmUid
     *
     * @param integer $xmUid
     * @return TrjCart
     */
    public function setXmUid($xmUid)
    {
        $this->xmUid = $xmUid;

        return $this;
    }

    /**
     * Get xmUid
     *
     * @return integer 
     */
    public function getXmUid()
    {
        return $this->xmUid;
    }

    /**
     * Set xmMobile
     *
     * @param string $xmMobile
     * @return TrjCart
     */
    public function setXmMobile($xmMobile)
    {
        $this->xmMobile = $xmMobile;

        return $this;
    }

    /**
     * Get xmMobile
     *
     * @return string 
     */
    public function getXmMobile()
    {
        return $this->xmMobile;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     * @return TrjCart
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string 
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjCart
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
     * Set sessionId
     *
     * @param string $sessionId
     * @return TrjCart
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
     * Set feedbackId
     *
     * @param integer $feedbackId
     * @return TrjCart
     */
    public function setFeedbackId($feedbackId)
    {
        $this->feedbackId = $feedbackId;

        return $this;
    }

    /**
     * Get feedbackId
     *
     * @return integer 
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjCart
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
