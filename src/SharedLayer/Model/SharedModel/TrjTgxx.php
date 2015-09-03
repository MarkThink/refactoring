<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTgxx
 */
class TrjTgxx
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $qi;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $templete;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $content1;

    /**
     * @var string
     */
    private $content2;

    /**
     * @var string
     */
    private $content3;

    /**
     * @var string
     */
    private $content4;

    /**
     * @var string
     */
    private $content5;

    /**
     * @var integer
     */
    private $sendDatetime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $isInit;

    /**
     * @var integer
     */
    private $flag;

    /**
     * @var integer
     */
    private $isResult;

    /**
     * @var integer
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
     * Set qi
     *
     * @param integer $qi
     * @return TrjTgxx
     */
    public function setQi($qi)
    {
        $this->qi = $qi;

        return $this;
    }

    /**
     * Get qi
     *
     * @return integer 
     */
    public function getQi()
    {
        return $this->qi;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TrjTgxx
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
     * Set templete
     *
     * @param string $templete
     * @return TrjTgxx
     */
    public function setTemplete($templete)
    {
        $this->templete = $templete;

        return $this;
    }

    /**
     * Get templete
     *
     * @return string 
     */
    public function getTemplete()
    {
        return $this->templete;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjTgxx
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
     * Set content1
     *
     * @param string $content1
     * @return TrjTgxx
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content1
     *
     * @return string 
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set content2
     *
     * @param string $content2
     * @return TrjTgxx
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content2
     *
     * @return string 
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set content3
     *
     * @param string $content3
     * @return TrjTgxx
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;

        return $this;
    }

    /**
     * Get content3
     *
     * @return string 
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * Set content4
     *
     * @param string $content4
     * @return TrjTgxx
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;

        return $this;
    }

    /**
     * Get content4
     *
     * @return string 
     */
    public function getContent4()
    {
        return $this->content4;
    }

    /**
     * Set content5
     *
     * @param string $content5
     * @return TrjTgxx
     */
    public function setContent5($content5)
    {
        $this->content5 = $content5;

        return $this;
    }

    /**
     * Get content5
     *
     * @return string 
     */
    public function getContent5()
    {
        return $this->content5;
    }

    /**
     * Set sendDatetime
     *
     * @param integer $sendDatetime
     * @return TrjTgxx
     */
    public function setSendDatetime($sendDatetime)
    {
        $this->sendDatetime = $sendDatetime;

        return $this;
    }

    /**
     * Get sendDatetime
     *
     * @return integer 
     */
    public function getSendDatetime()
    {
        return $this->sendDatetime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjTgxx
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
     * Set createName
     *
     * @param string $createName
     * @return TrjTgxx
     */
    public function setCreateName($createName)
    {
        $this->createName = $createName;

        return $this;
    }

    /**
     * Get createName
     *
     * @return string 
     */
    public function getCreateName()
    {
        return $this->createName;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjTgxx
     */
    public function setCreateId($createId)
    {
        $this->createId = $createId;

        return $this;
    }

    /**
     * Get createId
     *
     * @return integer 
     */
    public function getCreateId()
    {
        return $this->createId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjTgxx
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
     * Set isInit
     *
     * @param integer $isInit
     * @return TrjTgxx
     */
    public function setIsInit($isInit)
    {
        $this->isInit = $isInit;

        return $this;
    }

    /**
     * Get isInit
     *
     * @return integer 
     */
    public function getIsInit()
    {
        return $this->isInit;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjTgxx
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set isResult
     *
     * @param integer $isResult
     * @return TrjTgxx
     */
    public function setIsResult($isResult)
    {
        $this->isResult = $isResult;

        return $this;
    }

    /**
     * Get isResult
     *
     * @return integer 
     */
    public function getIsResult()
    {
        return $this->isResult;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjTgxx
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
}
