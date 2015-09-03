<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvShenhe
 */
class TrjAdvShenhe
{
    /**
     * @var integer
     */
    private $sid;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var string
     */
    private $createTruename;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var integer
     */
    private $qid;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $advType;

    /**
     * @var integer
     */
    private $adSdate;

    /**
     * @var integer
     */
    private $adEdate;

    /**
     * @var integer
     */
    private $adDaynum;

    /**
     * @var string
     */
    private $orderPrice;

    /**
     * @var integer
     */
    private $orderType;

    /**
     * @var integer
     */
    private $adSource;

    /**
     * @var string
     */
    private $adTitle;

    /**
     * @var string
     */
    private $adDes;

    /**
     * @var string
     */
    private $adAsk;

    /**
     * @var string
     */
    private $adUrl;

    /**
     * @var string
     */
    private $adAtt;

    /**
     * @var string
     */
    private $minfoCompany;

    /**
     * @var string
     */
    private $minfoName;

    /**
     * @var string
     */
    private $minfoMobile;

    /**
     * @var string
     */
    private $adImages;

    /**
     * @var integer
     */
    private $fromType;

    /**
     * @var integer
     */
    private $fromAdid;


    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjAdvShenhe
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
     * Set createName
     *
     * @param string $createName
     * @return TrjAdvShenhe
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
     * Set createTruename
     *
     * @param string $createTruename
     * @return TrjAdvShenhe
     */
    public function setCreateTruename($createTruename)
    {
        $this->createTruename = $createTruename;

        return $this;
    }

    /**
     * Get createTruename
     *
     * @return string 
     */
    public function getCreateTruename()
    {
        return $this->createTruename;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjAdvShenhe
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
     * Set number
     *
     * @param integer $number
     * @return TrjAdvShenhe
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return TrjAdvShenhe
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
     * @return TrjAdvShenhe
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
     * Set aid
     *
     * @param integer $aid
     * @return TrjAdvShenhe
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

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
     * Set advType
     *
     * @param integer $advType
     * @return TrjAdvShenhe
     */
    public function setAdvType($advType)
    {
        $this->advType = $advType;

        return $this;
    }

    /**
     * Get advType
     *
     * @return integer 
     */
    public function getAdvType()
    {
        return $this->advType;
    }

    /**
     * Set adSdate
     *
     * @param integer $adSdate
     * @return TrjAdvShenhe
     */
    public function setAdSdate($adSdate)
    {
        $this->adSdate = $adSdate;

        return $this;
    }

    /**
     * Get adSdate
     *
     * @return integer 
     */
    public function getAdSdate()
    {
        return $this->adSdate;
    }

    /**
     * Set adEdate
     *
     * @param integer $adEdate
     * @return TrjAdvShenhe
     */
    public function setAdEdate($adEdate)
    {
        $this->adEdate = $adEdate;

        return $this;
    }

    /**
     * Get adEdate
     *
     * @return integer 
     */
    public function getAdEdate()
    {
        return $this->adEdate;
    }

    /**
     * Set adDaynum
     *
     * @param integer $adDaynum
     * @return TrjAdvShenhe
     */
    public function setAdDaynum($adDaynum)
    {
        $this->adDaynum = $adDaynum;

        return $this;
    }

    /**
     * Get adDaynum
     *
     * @return integer 
     */
    public function getAdDaynum()
    {
        return $this->adDaynum;
    }

    /**
     * Set orderPrice
     *
     * @param string $orderPrice
     * @return TrjAdvShenhe
     */
    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    /**
     * Get orderPrice
     *
     * @return string 
     */
    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    /**
     * Set orderType
     *
     * @param integer $orderType
     * @return TrjAdvShenhe
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return integer 
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set adSource
     *
     * @param integer $adSource
     * @return TrjAdvShenhe
     */
    public function setAdSource($adSource)
    {
        $this->adSource = $adSource;

        return $this;
    }

    /**
     * Get adSource
     *
     * @return integer 
     */
    public function getAdSource()
    {
        return $this->adSource;
    }

    /**
     * Set adTitle
     *
     * @param string $adTitle
     * @return TrjAdvShenhe
     */
    public function setAdTitle($adTitle)
    {
        $this->adTitle = $adTitle;

        return $this;
    }

    /**
     * Get adTitle
     *
     * @return string 
     */
    public function getAdTitle()
    {
        return $this->adTitle;
    }

    /**
     * Set adDes
     *
     * @param string $adDes
     * @return TrjAdvShenhe
     */
    public function setAdDes($adDes)
    {
        $this->adDes = $adDes;

        return $this;
    }

    /**
     * Get adDes
     *
     * @return string 
     */
    public function getAdDes()
    {
        return $this->adDes;
    }

    /**
     * Set adAsk
     *
     * @param string $adAsk
     * @return TrjAdvShenhe
     */
    public function setAdAsk($adAsk)
    {
        $this->adAsk = $adAsk;

        return $this;
    }

    /**
     * Get adAsk
     *
     * @return string 
     */
    public function getAdAsk()
    {
        return $this->adAsk;
    }

    /**
     * Set adUrl
     *
     * @param string $adUrl
     * @return TrjAdvShenhe
     */
    public function setAdUrl($adUrl)
    {
        $this->adUrl = $adUrl;

        return $this;
    }

    /**
     * Get adUrl
     *
     * @return string 
     */
    public function getAdUrl()
    {
        return $this->adUrl;
    }

    /**
     * Set adAtt
     *
     * @param string $adAtt
     * @return TrjAdvShenhe
     */
    public function setAdAtt($adAtt)
    {
        $this->adAtt = $adAtt;

        return $this;
    }

    /**
     * Get adAtt
     *
     * @return string 
     */
    public function getAdAtt()
    {
        return $this->adAtt;
    }

    /**
     * Set minfoCompany
     *
     * @param string $minfoCompany
     * @return TrjAdvShenhe
     */
    public function setMinfoCompany($minfoCompany)
    {
        $this->minfoCompany = $minfoCompany;

        return $this;
    }

    /**
     * Get minfoCompany
     *
     * @return string 
     */
    public function getMinfoCompany()
    {
        return $this->minfoCompany;
    }

    /**
     * Set minfoName
     *
     * @param string $minfoName
     * @return TrjAdvShenhe
     */
    public function setMinfoName($minfoName)
    {
        $this->minfoName = $minfoName;

        return $this;
    }

    /**
     * Get minfoName
     *
     * @return string 
     */
    public function getMinfoName()
    {
        return $this->minfoName;
    }

    /**
     * Set minfoMobile
     *
     * @param string $minfoMobile
     * @return TrjAdvShenhe
     */
    public function setMinfoMobile($minfoMobile)
    {
        $this->minfoMobile = $minfoMobile;

        return $this;
    }

    /**
     * Get minfoMobile
     *
     * @return string 
     */
    public function getMinfoMobile()
    {
        return $this->minfoMobile;
    }

    /**
     * Set adImages
     *
     * @param string $adImages
     * @return TrjAdvShenhe
     */
    public function setAdImages($adImages)
    {
        $this->adImages = $adImages;

        return $this;
    }

    /**
     * Get adImages
     *
     * @return string 
     */
    public function getAdImages()
    {
        return $this->adImages;
    }

    /**
     * Set fromType
     *
     * @param integer $fromType
     * @return TrjAdvShenhe
     */
    public function setFromType($fromType)
    {
        $this->fromType = $fromType;

        return $this;
    }

    /**
     * Get fromType
     *
     * @return integer 
     */
    public function getFromType()
    {
        return $this->fromType;
    }

    /**
     * Set fromAdid
     *
     * @param integer $fromAdid
     * @return TrjAdvShenhe
     */
    public function setFromAdid($fromAdid)
    {
        $this->fromAdid = $fromAdid;

        return $this;
    }

    /**
     * Get fromAdid
     *
     * @return integer 
     */
    public function getFromAdid()
    {
        return $this->fromAdid;
    }
}
