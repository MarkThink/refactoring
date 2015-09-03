<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityRedpacket
 */
class TrjActivityRedpacket
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
    private $traceId;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $reward;

    /**
     * @var integer
     */
    private $isNew;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $openid;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var integer
     */
    private $traceUserId;

    /**
     * @var integer
     */
    private $paySuccess;

    /**
     * @var integer
     */
    private $paySuccessTrace;


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
     * @return TrjActivityRedpacket
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
     * Set traceId
     *
     * @param string $traceId
     * @return TrjActivityRedpacket
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;

        return $this;
    }

    /**
     * Get traceId
     *
     * @return string 
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjActivityRedpacket
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
     * Set type
     *
     * @param integer $type
     * @return TrjActivityRedpacket
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
     * Set reward
     *
     * @param integer $reward
     * @return TrjActivityRedpacket
     */
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get reward
     *
     * @return integer 
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set isNew
     *
     * @param integer $isNew
     * @return TrjActivityRedpacket
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return integer 
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjActivityRedpacket
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
     * Set openid
     *
     * @param string $openid
     * @return TrjActivityRedpacket
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * Get openid
     *
     * @return string 
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjActivityRedpacket
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

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjActivityRedpacket
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
     * Set traceUserId
     *
     * @param integer $traceUserId
     * @return TrjActivityRedpacket
     */
    public function setTraceUserId($traceUserId)
    {
        $this->traceUserId = $traceUserId;

        return $this;
    }

    /**
     * Get traceUserId
     *
     * @return integer 
     */
    public function getTraceUserId()
    {
        return $this->traceUserId;
    }

    /**
     * Set paySuccess
     *
     * @param integer $paySuccess
     * @return TrjActivityRedpacket
     */
    public function setPaySuccess($paySuccess)
    {
        $this->paySuccess = $paySuccess;

        return $this;
    }

    /**
     * Get paySuccess
     *
     * @return integer 
     */
    public function getPaySuccess()
    {
        return $this->paySuccess;
    }

    /**
     * Set paySuccessTrace
     *
     * @param integer $paySuccessTrace
     * @return TrjActivityRedpacket
     */
    public function setPaySuccessTrace($paySuccessTrace)
    {
        $this->paySuccessTrace = $paySuccessTrace;

        return $this;
    }

    /**
     * Get paySuccessTrace
     *
     * @return integer 
     */
    public function getPaySuccessTrace()
    {
        return $this->paySuccessTrace;
    }
}
