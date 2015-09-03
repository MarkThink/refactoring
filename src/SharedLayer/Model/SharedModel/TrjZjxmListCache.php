<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmListCache
 */
class TrjZjxmListCache
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $catPid;

    /**
     * @var integer
     */
    private $catId;

    /**
     * @var integer
     */
    private $provinceId;

    /**
     * @var integer
     */
    private $cityId;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var string
     */
    private $amountIntervalMin;

    /**
     * @var string
     */
    private $amountIntervalMax;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $shortOverview;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $tzIndustry;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var string
     */
    private $xmzcAssass;

    /**
     * @var string
     */
    private $transferPrice;

    /**
     * @var integer
     */
    private $xmlcTzmk;

    /**
     * @var integer
     */
    private $fundsBody;

    /**
     * @var string
     */
    private $iOverview;


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
     * Set title
     *
     * @param string $title
     * @return TrjZjxmListCache
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set catPid
     *
     * @param integer $catPid
     * @return TrjZjxmListCache
     */
    public function setCatPid($catPid)
    {
        $this->catPid = $catPid;

        return $this;
    }

    /**
     * Get catPid
     *
     * @return integer 
     */
    public function getCatPid()
    {
        return $this->catPid;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return TrjZjxmListCache
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjZjxmListCache
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return TrjZjxmListCache
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjZjxmListCache
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;

        return $this;
    }

    /**
     * Get industryId
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * Set amountIntervalMin
     *
     * @param string $amountIntervalMin
     * @return TrjZjxmListCache
     */
    public function setAmountIntervalMin($amountIntervalMin)
    {
        $this->amountIntervalMin = $amountIntervalMin;

        return $this;
    }

    /**
     * Get amountIntervalMin
     *
     * @return string 
     */
    public function getAmountIntervalMin()
    {
        return $this->amountIntervalMin;
    }

    /**
     * Set amountIntervalMax
     *
     * @param string $amountIntervalMax
     * @return TrjZjxmListCache
     */
    public function setAmountIntervalMax($amountIntervalMax)
    {
        $this->amountIntervalMax = $amountIntervalMax;

        return $this;
    }

    /**
     * Get amountIntervalMax
     *
     * @return string 
     */
    public function getAmountIntervalMax()
    {
        return $this->amountIntervalMax;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return TrjZjxmListCache
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set shortOverview
     *
     * @param string $shortOverview
     * @return TrjZjxmListCache
     */
    public function setShortOverview($shortOverview)
    {
        $this->shortOverview = $shortOverview;

        return $this;
    }

    /**
     * Get shortOverview
     *
     * @return string 
     */
    public function getShortOverview()
    {
        return $this->shortOverview;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjZjxmListCache
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
     * Set status
     *
     * @param integer $status
     * @return TrjZjxmListCache
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
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjZjxmListCache
     */
    public function setTzIndustry($tzIndustry)
    {
        $this->tzIndustry = $tzIndustry;

        return $this;
    }

    /**
     * Get tzIndustry
     *
     * @return string 
     */
    public function getTzIndustry()
    {
        return $this->tzIndustry;
    }

    /**
     * Set tzArea
     *
     * @param string $tzArea
     * @return TrjZjxmListCache
     */
    public function setTzArea($tzArea)
    {
        $this->tzArea = $tzArea;

        return $this;
    }

    /**
     * Get tzArea
     *
     * @return string 
     */
    public function getTzArea()
    {
        return $this->tzArea;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjZjxmListCache
     */
    public function setClickNum($clickNum)
    {
        $this->clickNum = $clickNum;

        return $this;
    }

    /**
     * Get clickNum
     *
     * @return integer 
     */
    public function getClickNum()
    {
        return $this->clickNum;
    }

    /**
     * Set xmzcAssass
     *
     * @param string $xmzcAssass
     * @return TrjZjxmListCache
     */
    public function setXmzcAssass($xmzcAssass)
    {
        $this->xmzcAssass = $xmzcAssass;

        return $this;
    }

    /**
     * Get xmzcAssass
     *
     * @return string 
     */
    public function getXmzcAssass()
    {
        return $this->xmzcAssass;
    }

    /**
     * Set transferPrice
     *
     * @param string $transferPrice
     * @return TrjZjxmListCache
     */
    public function setTransferPrice($transferPrice)
    {
        $this->transferPrice = $transferPrice;

        return $this;
    }

    /**
     * Get transferPrice
     *
     * @return string 
     */
    public function getTransferPrice()
    {
        return $this->transferPrice;
    }

    /**
     * Set xmlcTzmk
     *
     * @param integer $xmlcTzmk
     * @return TrjZjxmListCache
     */
    public function setXmlcTzmk($xmlcTzmk)
    {
        $this->xmlcTzmk = $xmlcTzmk;

        return $this;
    }

    /**
     * Get xmlcTzmk
     *
     * @return integer 
     */
    public function getXmlcTzmk()
    {
        return $this->xmlcTzmk;
    }

    /**
     * Set fundsBody
     *
     * @param integer $fundsBody
     * @return TrjZjxmListCache
     */
    public function setFundsBody($fundsBody)
    {
        $this->fundsBody = $fundsBody;

        return $this;
    }

    /**
     * Get fundsBody
     *
     * @return integer 
     */
    public function getFundsBody()
    {
        return $this->fundsBody;
    }

    /**
     * Set iOverview
     *
     * @param string $iOverview
     * @return TrjZjxmListCache
     */
    public function setIOverview($iOverview)
    {
        $this->iOverview = $iOverview;

        return $this;
    }

    /**
     * Get iOverview
     *
     * @return string 
     */
    public function getIOverview()
    {
        return $this->iOverview;
    }
}
