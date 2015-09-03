<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvPlace
 */
class TrjAdvPlace
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var integer
     */
    private $qid;

    /**
     * @var string
     */
    private $ennameNo;

    /**
     * @var integer
     */
    private $pAdvType;

    /**
     * @var string
     */
    private $pAdvSize;

    /**
     * @var string
     */
    private $placeName;

    /**
     * @var integer
     */
    private $advPrice;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $initAdvName;

    /**
     * @var string
     */
    private $initAdvUrl;

    /**
     * @var integer
     */
    private $initOid;

    /**
     * @var string
     */
    private $initAdvImg;

    /**
     * @var string
     */
    private $initAdvMemo;

    /**
     * @var integer
     */
    private $initAdvStatus;

    /**
     * @var integer
     */
    private $addtime;


    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return TrjAdvPlace
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

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
     * Set qid
     *
     * @param integer $qid
     * @return TrjAdvPlace
     */
    public function setQid($qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return integer 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set ennameNo
     *
     * @param string $ennameNo
     * @return TrjAdvPlace
     */
    public function setEnnameNo($ennameNo)
    {
        $this->ennameNo = $ennameNo;

        return $this;
    }

    /**
     * Get ennameNo
     *
     * @return string 
     */
    public function getEnnameNo()
    {
        return $this->ennameNo;
    }

    /**
     * Set pAdvType
     *
     * @param integer $pAdvType
     * @return TrjAdvPlace
     */
    public function setPAdvType($pAdvType)
    {
        $this->pAdvType = $pAdvType;

        return $this;
    }

    /**
     * Get pAdvType
     *
     * @return integer 
     */
    public function getPAdvType()
    {
        return $this->pAdvType;
    }

    /**
     * Set pAdvSize
     *
     * @param string $pAdvSize
     * @return TrjAdvPlace
     */
    public function setPAdvSize($pAdvSize)
    {
        $this->pAdvSize = $pAdvSize;

        return $this;
    }

    /**
     * Get pAdvSize
     *
     * @return string 
     */
    public function getPAdvSize()
    {
        return $this->pAdvSize;
    }

    /**
     * Set placeName
     *
     * @param string $placeName
     * @return TrjAdvPlace
     */
    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;

        return $this;
    }

    /**
     * Get placeName
     *
     * @return string 
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Set advPrice
     *
     * @param integer $advPrice
     * @return TrjAdvPlace
     */
    public function setAdvPrice($advPrice)
    {
        $this->advPrice = $advPrice;

        return $this;
    }

    /**
     * Get advPrice
     *
     * @return integer 
     */
    public function getAdvPrice()
    {
        return $this->advPrice;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjAdvPlace
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
     * Set initAdvName
     *
     * @param string $initAdvName
     * @return TrjAdvPlace
     */
    public function setInitAdvName($initAdvName)
    {
        $this->initAdvName = $initAdvName;

        return $this;
    }

    /**
     * Get initAdvName
     *
     * @return string 
     */
    public function getInitAdvName()
    {
        return $this->initAdvName;
    }

    /**
     * Set initAdvUrl
     *
     * @param string $initAdvUrl
     * @return TrjAdvPlace
     */
    public function setInitAdvUrl($initAdvUrl)
    {
        $this->initAdvUrl = $initAdvUrl;

        return $this;
    }

    /**
     * Get initAdvUrl
     *
     * @return string 
     */
    public function getInitAdvUrl()
    {
        return $this->initAdvUrl;
    }

    /**
     * Set initOid
     *
     * @param integer $initOid
     * @return TrjAdvPlace
     */
    public function setInitOid($initOid)
    {
        $this->initOid = $initOid;

        return $this;
    }

    /**
     * Get initOid
     *
     * @return integer 
     */
    public function getInitOid()
    {
        return $this->initOid;
    }

    /**
     * Set initAdvImg
     *
     * @param string $initAdvImg
     * @return TrjAdvPlace
     */
    public function setInitAdvImg($initAdvImg)
    {
        $this->initAdvImg = $initAdvImg;

        return $this;
    }

    /**
     * Get initAdvImg
     *
     * @return string 
     */
    public function getInitAdvImg()
    {
        return $this->initAdvImg;
    }

    /**
     * Set initAdvMemo
     *
     * @param string $initAdvMemo
     * @return TrjAdvPlace
     */
    public function setInitAdvMemo($initAdvMemo)
    {
        $this->initAdvMemo = $initAdvMemo;

        return $this;
    }

    /**
     * Get initAdvMemo
     *
     * @return string 
     */
    public function getInitAdvMemo()
    {
        return $this->initAdvMemo;
    }

    /**
     * Set initAdvStatus
     *
     * @param integer $initAdvStatus
     * @return TrjAdvPlace
     */
    public function setInitAdvStatus($initAdvStatus)
    {
        $this->initAdvStatus = $initAdvStatus;

        return $this;
    }

    /**
     * Get initAdvStatus
     *
     * @return integer 
     */
    public function getInitAdvStatus()
    {
        return $this->initAdvStatus;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjAdvPlace
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
}
