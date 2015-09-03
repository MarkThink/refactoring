<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmList
 */
class TrjZjxmList
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
    private $verId;

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
    private $typeId;

    /**
     * @var integer
     */
    private $countryId;

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
    private $areaId;

    /**
     * @var integer
     */
    private $lastAreaId;

    /**
     * @var integer
     */
    private $industryId;

    /**
     * @var string
     */
    private $tradeWay;

    /**
     * @var string
     */
    private $transferPrice;

    /**
     * @var string
     */
    private $transferDateend;

    /**
     * @var string
     */
    private $transferType;

    /**
     * @var string
     */
    private $xmrzType;

    /**
     * @var integer
     */
    private $xmrzBody;

    /**
     * @var string
     */
    private $xmrzUsage;

    /**
     * @var string
     */
    private $xmrzRevenue;

    /**
     * @var string
     */
    private $xmrzAsset;

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
     * @var integer
     */
    private $fundsBody;

    /**
     * @var string
     */
    private $xmrzIntention;

    /**
     * @var integer
     */
    private $xmzcType;

    /**
     * @var string
     */
    private $xmzcAssass;

    /**
     * @var integer
     */
    private $xmlcFxph;

    /**
     * @var integer
     */
    private $xmlcTzmk;

    /**
     * @var integer
     */
    private $xmlcTzqx;

    /**
     * @var integer
     */
    private $xmgqPeriod;

    /**
     * @var integer
     */
    private $tzlcType;

    /**
     * @var integer
     */
    private $viewNum;

    /**
     * @var integer
     */
    private $showNum;

    /**
     * @var integer
     */
    private $followNum;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $collectNum;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $reportNum;

    /**
     * @var integer
     */
    private $deliveryNum;

    /**
     * @var integer
     */
    private $receivedDeliveryNum;

    /**
     * @var integer
     */
    private $beInviteNum;

    /**
     * @var integer
     */
    private $beDeliveryNum;

    /**
     * @var string
     */
    private $shortOverview;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var string
     */
    private $userUsername;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $isEntrustRefresh;

    /**
     * @var integer
     */
    private $isDefault;

    /**
     * @var integer
     */
    private $zjxmAuth;

    /**
     * @var integer
     */
    private $searchUpdated;

    /**
     * @var integer
     */
    private $iPicFlag;

    /**
     * @var integer
     */
    private $source;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $infoPercent;

    /**
     * @var integer
     */
    private $infoPercentSort;

    /**
     * @var integer
     */
    private $verifyReasonId;

    /**
     * @var integer
     */
    private $verifyId;

    /**
     * @var integer
     */
    private $verifyProcess;

    /**
     * @var string
     */
    private $verifyReason;

    /**
     * @var integer
     */
    private $verifyStatus;

    /**
     * @var integer
     */
    private $verifyNum;

    /**
     * @var integer
     */
    private $verifyTime;

    /**
     * @var string
     */
    private $verifySign;

    /**
     * @var integer
     */
    private $tgxxQi;

    /**
     * @var integer
     */
    private $isPage;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $infoLevel;

    /**
     * @var string
     */
    private $tzIndustry;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var string
     */
    private $zjfTzType;

    /**
     * @var string
     */
    private $zjfTzType675Extra;

    /**
     * @var string
     */
    private $zjfTzPeriod;

    /**
     * @var string
     */
    private $zjfFkClaim;

    /**
     * @var integer
     */
    private $zjfFxLike;

    /**
     * @var string
     */
    private $zjfTpLike;

    /**
     * @var string
     */
    private $zjfPayBack;

    /**
     * @var string
     */
    private $xmfZsWay;

    /**
     * @var integer
     */
    private $minfoId;

    /**
     * @var integer
     */
    private $crmUid;

    /**
     * @var integer
     */
    private $adminUid;

    /**
     * @var integer
     */
    private $isYzzj;

    /**
     * @var integer
     */
    private $isTj;

    /**
     * @var integer
     */
    private $cityOrder;

    /**
     * @var integer
     */
    private $certScore;

    /**
     * @var integer
     */
    private $updatedDay;

    /**
     * @var integer
     */
    private $isQuery;

    /**
     * @var integer
     */
    private $trackFlag;


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
     * @return TrjZjxmList
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
     * Set verId
     *
     * @param integer $verId
     * @return TrjZjxmList
     */
    public function setVerId($verId)
    {
        $this->verId = $verId;

        return $this;
    }

    /**
     * Get verId
     *
     * @return integer 
     */
    public function getVerId()
    {
        return $this->verId;
    }

    /**
     * Set catPid
     *
     * @param integer $catPid
     * @return TrjZjxmList
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
     * @return TrjZjxmList
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
     * Set typeId
     *
     * @param integer $typeId
     * @return TrjZjxmList
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return TrjZjxmList
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjZjxmList
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
     * @return TrjZjxmList
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
     * Set areaId
     *
     * @param integer $areaId
     * @return TrjZjxmList
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set lastAreaId
     *
     * @param integer $lastAreaId
     * @return TrjZjxmList
     */
    public function setLastAreaId($lastAreaId)
    {
        $this->lastAreaId = $lastAreaId;

        return $this;
    }

    /**
     * Get lastAreaId
     *
     * @return integer 
     */
    public function getLastAreaId()
    {
        return $this->lastAreaId;
    }

    /**
     * Set industryId
     *
     * @param integer $industryId
     * @return TrjZjxmList
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
     * Set tradeWay
     *
     * @param string $tradeWay
     * @return TrjZjxmList
     */
    public function setTradeWay($tradeWay)
    {
        $this->tradeWay = $tradeWay;

        return $this;
    }

    /**
     * Get tradeWay
     *
     * @return string 
     */
    public function getTradeWay()
    {
        return $this->tradeWay;
    }

    /**
     * Set transferPrice
     *
     * @param string $transferPrice
     * @return TrjZjxmList
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
     * Set transferDateend
     *
     * @param string $transferDateend
     * @return TrjZjxmList
     */
    public function setTransferDateend($transferDateend)
    {
        $this->transferDateend = $transferDateend;

        return $this;
    }

    /**
     * Get transferDateend
     *
     * @return string 
     */
    public function getTransferDateend()
    {
        return $this->transferDateend;
    }

    /**
     * Set transferType
     *
     * @param string $transferType
     * @return TrjZjxmList
     */
    public function setTransferType($transferType)
    {
        $this->transferType = $transferType;

        return $this;
    }

    /**
     * Get transferType
     *
     * @return string 
     */
    public function getTransferType()
    {
        return $this->transferType;
    }

    /**
     * Set xmrzType
     *
     * @param string $xmrzType
     * @return TrjZjxmList
     */
    public function setXmrzType($xmrzType)
    {
        $this->xmrzType = $xmrzType;

        return $this;
    }

    /**
     * Get xmrzType
     *
     * @return string 
     */
    public function getXmrzType()
    {
        return $this->xmrzType;
    }

    /**
     * Set xmrzBody
     *
     * @param integer $xmrzBody
     * @return TrjZjxmList
     */
    public function setXmrzBody($xmrzBody)
    {
        $this->xmrzBody = $xmrzBody;

        return $this;
    }

    /**
     * Get xmrzBody
     *
     * @return integer 
     */
    public function getXmrzBody()
    {
        return $this->xmrzBody;
    }

    /**
     * Set xmrzUsage
     *
     * @param string $xmrzUsage
     * @return TrjZjxmList
     */
    public function setXmrzUsage($xmrzUsage)
    {
        $this->xmrzUsage = $xmrzUsage;

        return $this;
    }

    /**
     * Get xmrzUsage
     *
     * @return string 
     */
    public function getXmrzUsage()
    {
        return $this->xmrzUsage;
    }

    /**
     * Set xmrzRevenue
     *
     * @param string $xmrzRevenue
     * @return TrjZjxmList
     */
    public function setXmrzRevenue($xmrzRevenue)
    {
        $this->xmrzRevenue = $xmrzRevenue;

        return $this;
    }

    /**
     * Get xmrzRevenue
     *
     * @return string 
     */
    public function getXmrzRevenue()
    {
        return $this->xmrzRevenue;
    }

    /**
     * Set xmrzAsset
     *
     * @param string $xmrzAsset
     * @return TrjZjxmList
     */
    public function setXmrzAsset($xmrzAsset)
    {
        $this->xmrzAsset = $xmrzAsset;

        return $this;
    }

    /**
     * Get xmrzAsset
     *
     * @return string 
     */
    public function getXmrzAsset()
    {
        return $this->xmrzAsset;
    }

    /**
     * Set amountIntervalMin
     *
     * @param string $amountIntervalMin
     * @return TrjZjxmList
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
     * @return TrjZjxmList
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
     * @return TrjZjxmList
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
     * Set fundsBody
     *
     * @param integer $fundsBody
     * @return TrjZjxmList
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
     * Set xmrzIntention
     *
     * @param string $xmrzIntention
     * @return TrjZjxmList
     */
    public function setXmrzIntention($xmrzIntention)
    {
        $this->xmrzIntention = $xmrzIntention;

        return $this;
    }

    /**
     * Get xmrzIntention
     *
     * @return string 
     */
    public function getXmrzIntention()
    {
        return $this->xmrzIntention;
    }

    /**
     * Set xmzcType
     *
     * @param integer $xmzcType
     * @return TrjZjxmList
     */
    public function setXmzcType($xmzcType)
    {
        $this->xmzcType = $xmzcType;

        return $this;
    }

    /**
     * Get xmzcType
     *
     * @return integer 
     */
    public function getXmzcType()
    {
        return $this->xmzcType;
    }

    /**
     * Set xmzcAssass
     *
     * @param string $xmzcAssass
     * @return TrjZjxmList
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
     * Set xmlcFxph
     *
     * @param integer $xmlcFxph
     * @return TrjZjxmList
     */
    public function setXmlcFxph($xmlcFxph)
    {
        $this->xmlcFxph = $xmlcFxph;

        return $this;
    }

    /**
     * Get xmlcFxph
     *
     * @return integer 
     */
    public function getXmlcFxph()
    {
        return $this->xmlcFxph;
    }

    /**
     * Set xmlcTzmk
     *
     * @param integer $xmlcTzmk
     * @return TrjZjxmList
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
     * Set xmlcTzqx
     *
     * @param integer $xmlcTzqx
     * @return TrjZjxmList
     */
    public function setXmlcTzqx($xmlcTzqx)
    {
        $this->xmlcTzqx = $xmlcTzqx;

        return $this;
    }

    /**
     * Get xmlcTzqx
     *
     * @return integer 
     */
    public function getXmlcTzqx()
    {
        return $this->xmlcTzqx;
    }

    /**
     * Set xmgqPeriod
     *
     * @param integer $xmgqPeriod
     * @return TrjZjxmList
     */
    public function setXmgqPeriod($xmgqPeriod)
    {
        $this->xmgqPeriod = $xmgqPeriod;

        return $this;
    }

    /**
     * Get xmgqPeriod
     *
     * @return integer 
     */
    public function getXmgqPeriod()
    {
        return $this->xmgqPeriod;
    }

    /**
     * Set tzlcType
     *
     * @param integer $tzlcType
     * @return TrjZjxmList
     */
    public function setTzlcType($tzlcType)
    {
        $this->tzlcType = $tzlcType;

        return $this;
    }

    /**
     * Get tzlcType
     *
     * @return integer 
     */
    public function getTzlcType()
    {
        return $this->tzlcType;
    }

    /**
     * Set viewNum
     *
     * @param integer $viewNum
     * @return TrjZjxmList
     */
    public function setViewNum($viewNum)
    {
        $this->viewNum = $viewNum;

        return $this;
    }

    /**
     * Get viewNum
     *
     * @return integer 
     */
    public function getViewNum()
    {
        return $this->viewNum;
    }

    /**
     * Set showNum
     *
     * @param integer $showNum
     * @return TrjZjxmList
     */
    public function setShowNum($showNum)
    {
        $this->showNum = $showNum;

        return $this;
    }

    /**
     * Get showNum
     *
     * @return integer 
     */
    public function getShowNum()
    {
        return $this->showNum;
    }

    /**
     * Set followNum
     *
     * @param integer $followNum
     * @return TrjZjxmList
     */
    public function setFollowNum($followNum)
    {
        $this->followNum = $followNum;

        return $this;
    }

    /**
     * Get followNum
     *
     * @return integer 
     */
    public function getFollowNum()
    {
        return $this->followNum;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjZjxmList
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
     * Set collectNum
     *
     * @param integer $collectNum
     * @return TrjZjxmList
     */
    public function setCollectNum($collectNum)
    {
        $this->collectNum = $collectNum;

        return $this;
    }

    /**
     * Get collectNum
     *
     * @return integer 
     */
    public function getCollectNum()
    {
        return $this->collectNum;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjZjxmList
     */
    public function setCommentNum($commentNum)
    {
        $this->commentNum = $commentNum;

        return $this;
    }

    /**
     * Get commentNum
     *
     * @return integer 
     */
    public function getCommentNum()
    {
        return $this->commentNum;
    }

    /**
     * Set reportNum
     *
     * @param integer $reportNum
     * @return TrjZjxmList
     */
    public function setReportNum($reportNum)
    {
        $this->reportNum = $reportNum;

        return $this;
    }

    /**
     * Get reportNum
     *
     * @return integer 
     */
    public function getReportNum()
    {
        return $this->reportNum;
    }

    /**
     * Set deliveryNum
     *
     * @param integer $deliveryNum
     * @return TrjZjxmList
     */
    public function setDeliveryNum($deliveryNum)
    {
        $this->deliveryNum = $deliveryNum;

        return $this;
    }

    /**
     * Get deliveryNum
     *
     * @return integer 
     */
    public function getDeliveryNum()
    {
        return $this->deliveryNum;
    }

    /**
     * Set receivedDeliveryNum
     *
     * @param integer $receivedDeliveryNum
     * @return TrjZjxmList
     */
    public function setReceivedDeliveryNum($receivedDeliveryNum)
    {
        $this->receivedDeliveryNum = $receivedDeliveryNum;

        return $this;
    }

    /**
     * Get receivedDeliveryNum
     *
     * @return integer 
     */
    public function getReceivedDeliveryNum()
    {
        return $this->receivedDeliveryNum;
    }

    /**
     * Set beInviteNum
     *
     * @param integer $beInviteNum
     * @return TrjZjxmList
     */
    public function setBeInviteNum($beInviteNum)
    {
        $this->beInviteNum = $beInviteNum;

        return $this;
    }

    /**
     * Get beInviteNum
     *
     * @return integer 
     */
    public function getBeInviteNum()
    {
        return $this->beInviteNum;
    }

    /**
     * Set beDeliveryNum
     *
     * @param integer $beDeliveryNum
     * @return TrjZjxmList
     */
    public function setBeDeliveryNum($beDeliveryNum)
    {
        $this->beDeliveryNum = $beDeliveryNum;

        return $this;
    }

    /**
     * Get beDeliveryNum
     *
     * @return integer 
     */
    public function getBeDeliveryNum()
    {
        return $this->beDeliveryNum;
    }

    /**
     * Set shortOverview
     *
     * @param string $shortOverview
     * @return TrjZjxmList
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
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjZjxmList
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmList
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjZjxmList
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjZjxmList
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
     * Set userType
     *
     * @param integer $userType
     * @return TrjZjxmList
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userUsername
     *
     * @param string $userUsername
     * @return TrjZjxmList
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * Get userUsername
     *
     * @return string 
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjZjxmList
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
     * Set isEntrustRefresh
     *
     * @param integer $isEntrustRefresh
     * @return TrjZjxmList
     */
    public function setIsEntrustRefresh($isEntrustRefresh)
    {
        $this->isEntrustRefresh = $isEntrustRefresh;

        return $this;
    }

    /**
     * Get isEntrustRefresh
     *
     * @return integer 
     */
    public function getIsEntrustRefresh()
    {
        return $this->isEntrustRefresh;
    }

    /**
     * Set isDefault
     *
     * @param integer $isDefault
     * @return TrjZjxmList
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return integer 
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set zjxmAuth
     *
     * @param integer $zjxmAuth
     * @return TrjZjxmList
     */
    public function setZjxmAuth($zjxmAuth)
    {
        $this->zjxmAuth = $zjxmAuth;

        return $this;
    }

    /**
     * Get zjxmAuth
     *
     * @return integer 
     */
    public function getZjxmAuth()
    {
        return $this->zjxmAuth;
    }

    /**
     * Set searchUpdated
     *
     * @param integer $searchUpdated
     * @return TrjZjxmList
     */
    public function setSearchUpdated($searchUpdated)
    {
        $this->searchUpdated = $searchUpdated;

        return $this;
    }

    /**
     * Get searchUpdated
     *
     * @return integer 
     */
    public function getSearchUpdated()
    {
        return $this->searchUpdated;
    }

    /**
     * Set iPicFlag
     *
     * @param integer $iPicFlag
     * @return TrjZjxmList
     */
    public function setIPicFlag($iPicFlag)
    {
        $this->iPicFlag = $iPicFlag;

        return $this;
    }

    /**
     * Get iPicFlag
     *
     * @return integer 
     */
    public function getIPicFlag()
    {
        return $this->iPicFlag;
    }

    /**
     * Set source
     *
     * @param integer $source
     * @return TrjZjxmList
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return integer 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjZjxmList
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
     * Set infoPercent
     *
     * @param integer $infoPercent
     * @return TrjZjxmList
     */
    public function setInfoPercent($infoPercent)
    {
        $this->infoPercent = $infoPercent;

        return $this;
    }

    /**
     * Get infoPercent
     *
     * @return integer 
     */
    public function getInfoPercent()
    {
        return $this->infoPercent;
    }

    /**
     * Set infoPercentSort
     *
     * @param integer $infoPercentSort
     * @return TrjZjxmList
     */
    public function setInfoPercentSort($infoPercentSort)
    {
        $this->infoPercentSort = $infoPercentSort;

        return $this;
    }

    /**
     * Get infoPercentSort
     *
     * @return integer 
     */
    public function getInfoPercentSort()
    {
        return $this->infoPercentSort;
    }

    /**
     * Set verifyReasonId
     *
     * @param integer $verifyReasonId
     * @return TrjZjxmList
     */
    public function setVerifyReasonId($verifyReasonId)
    {
        $this->verifyReasonId = $verifyReasonId;

        return $this;
    }

    /**
     * Get verifyReasonId
     *
     * @return integer 
     */
    public function getVerifyReasonId()
    {
        return $this->verifyReasonId;
    }

    /**
     * Set verifyId
     *
     * @param integer $verifyId
     * @return TrjZjxmList
     */
    public function setVerifyId($verifyId)
    {
        $this->verifyId = $verifyId;

        return $this;
    }

    /**
     * Get verifyId
     *
     * @return integer 
     */
    public function getVerifyId()
    {
        return $this->verifyId;
    }

    /**
     * Set verifyProcess
     *
     * @param integer $verifyProcess
     * @return TrjZjxmList
     */
    public function setVerifyProcess($verifyProcess)
    {
        $this->verifyProcess = $verifyProcess;

        return $this;
    }

    /**
     * Get verifyProcess
     *
     * @return integer 
     */
    public function getVerifyProcess()
    {
        return $this->verifyProcess;
    }

    /**
     * Set verifyReason
     *
     * @param string $verifyReason
     * @return TrjZjxmList
     */
    public function setVerifyReason($verifyReason)
    {
        $this->verifyReason = $verifyReason;

        return $this;
    }

    /**
     * Get verifyReason
     *
     * @return string 
     */
    public function getVerifyReason()
    {
        return $this->verifyReason;
    }

    /**
     * Set verifyStatus
     *
     * @param integer $verifyStatus
     * @return TrjZjxmList
     */
    public function setVerifyStatus($verifyStatus)
    {
        $this->verifyStatus = $verifyStatus;

        return $this;
    }

    /**
     * Get verifyStatus
     *
     * @return integer 
     */
    public function getVerifyStatus()
    {
        return $this->verifyStatus;
    }

    /**
     * Set verifyNum
     *
     * @param integer $verifyNum
     * @return TrjZjxmList
     */
    public function setVerifyNum($verifyNum)
    {
        $this->verifyNum = $verifyNum;

        return $this;
    }

    /**
     * Get verifyNum
     *
     * @return integer 
     */
    public function getVerifyNum()
    {
        return $this->verifyNum;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     * @return TrjZjxmList
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
     * Set verifySign
     *
     * @param string $verifySign
     * @return TrjZjxmList
     */
    public function setVerifySign($verifySign)
    {
        $this->verifySign = $verifySign;

        return $this;
    }

    /**
     * Get verifySign
     *
     * @return string 
     */
    public function getVerifySign()
    {
        return $this->verifySign;
    }

    /**
     * Set tgxxQi
     *
     * @param integer $tgxxQi
     * @return TrjZjxmList
     */
    public function setTgxxQi($tgxxQi)
    {
        $this->tgxxQi = $tgxxQi;

        return $this;
    }

    /**
     * Get tgxxQi
     *
     * @return integer 
     */
    public function getTgxxQi()
    {
        return $this->tgxxQi;
    }

    /**
     * Set isPage
     *
     * @param integer $isPage
     * @return TrjZjxmList
     */
    public function setIsPage($isPage)
    {
        $this->isPage = $isPage;

        return $this;
    }

    /**
     * Get isPage
     *
     * @return integer 
     */
    public function getIsPage()
    {
        return $this->isPage;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjZjxmList
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set infoLevel
     *
     * @param integer $infoLevel
     * @return TrjZjxmList
     */
    public function setInfoLevel($infoLevel)
    {
        $this->infoLevel = $infoLevel;

        return $this;
    }

    /**
     * Get infoLevel
     *
     * @return integer 
     */
    public function getInfoLevel()
    {
        return $this->infoLevel;
    }

    /**
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjZjxmList
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
     * @return TrjZjxmList
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
     * Set zjfTzType
     *
     * @param string $zjfTzType
     * @return TrjZjxmList
     */
    public function setZjfTzType($zjfTzType)
    {
        $this->zjfTzType = $zjfTzType;

        return $this;
    }

    /**
     * Get zjfTzType
     *
     * @return string 
     */
    public function getZjfTzType()
    {
        return $this->zjfTzType;
    }

    /**
     * Set zjfTzType675Extra
     *
     * @param string $zjfTzType675Extra
     * @return TrjZjxmList
     */
    public function setZjfTzType675Extra($zjfTzType675Extra)
    {
        $this->zjfTzType675Extra = $zjfTzType675Extra;

        return $this;
    }

    /**
     * Get zjfTzType675Extra
     *
     * @return string 
     */
    public function getZjfTzType675Extra()
    {
        return $this->zjfTzType675Extra;
    }

    /**
     * Set zjfTzPeriod
     *
     * @param string $zjfTzPeriod
     * @return TrjZjxmList
     */
    public function setZjfTzPeriod($zjfTzPeriod)
    {
        $this->zjfTzPeriod = $zjfTzPeriod;

        return $this;
    }

    /**
     * Get zjfTzPeriod
     *
     * @return string 
     */
    public function getZjfTzPeriod()
    {
        return $this->zjfTzPeriod;
    }

    /**
     * Set zjfFkClaim
     *
     * @param string $zjfFkClaim
     * @return TrjZjxmList
     */
    public function setZjfFkClaim($zjfFkClaim)
    {
        $this->zjfFkClaim = $zjfFkClaim;

        return $this;
    }

    /**
     * Get zjfFkClaim
     *
     * @return string 
     */
    public function getZjfFkClaim()
    {
        return $this->zjfFkClaim;
    }

    /**
     * Set zjfFxLike
     *
     * @param integer $zjfFxLike
     * @return TrjZjxmList
     */
    public function setZjfFxLike($zjfFxLike)
    {
        $this->zjfFxLike = $zjfFxLike;

        return $this;
    }

    /**
     * Get zjfFxLike
     *
     * @return integer 
     */
    public function getZjfFxLike()
    {
        return $this->zjfFxLike;
    }

    /**
     * Set zjfTpLike
     *
     * @param string $zjfTpLike
     * @return TrjZjxmList
     */
    public function setZjfTpLike($zjfTpLike)
    {
        $this->zjfTpLike = $zjfTpLike;

        return $this;
    }

    /**
     * Get zjfTpLike
     *
     * @return string 
     */
    public function getZjfTpLike()
    {
        return $this->zjfTpLike;
    }

    /**
     * Set zjfPayBack
     *
     * @param string $zjfPayBack
     * @return TrjZjxmList
     */
    public function setZjfPayBack($zjfPayBack)
    {
        $this->zjfPayBack = $zjfPayBack;

        return $this;
    }

    /**
     * Get zjfPayBack
     *
     * @return string 
     */
    public function getZjfPayBack()
    {
        return $this->zjfPayBack;
    }

    /**
     * Set xmfZsWay
     *
     * @param string $xmfZsWay
     * @return TrjZjxmList
     */
    public function setXmfZsWay($xmfZsWay)
    {
        $this->xmfZsWay = $xmfZsWay;

        return $this;
    }

    /**
     * Get xmfZsWay
     *
     * @return string 
     */
    public function getXmfZsWay()
    {
        return $this->xmfZsWay;
    }

    /**
     * Set minfoId
     *
     * @param integer $minfoId
     * @return TrjZjxmList
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
     * Set crmUid
     *
     * @param integer $crmUid
     * @return TrjZjxmList
     */
    public function setCrmUid($crmUid)
    {
        $this->crmUid = $crmUid;

        return $this;
    }

    /**
     * Get crmUid
     *
     * @return integer 
     */
    public function getCrmUid()
    {
        return $this->crmUid;
    }

    /**
     * Set adminUid
     *
     * @param integer $adminUid
     * @return TrjZjxmList
     */
    public function setAdminUid($adminUid)
    {
        $this->adminUid = $adminUid;

        return $this;
    }

    /**
     * Get adminUid
     *
     * @return integer 
     */
    public function getAdminUid()
    {
        return $this->adminUid;
    }

    /**
     * Set isYzzj
     *
     * @param integer $isYzzj
     * @return TrjZjxmList
     */
    public function setIsYzzj($isYzzj)
    {
        $this->isYzzj = $isYzzj;

        return $this;
    }

    /**
     * Get isYzzj
     *
     * @return integer 
     */
    public function getIsYzzj()
    {
        return $this->isYzzj;
    }

    /**
     * Set isTj
     *
     * @param integer $isTj
     * @return TrjZjxmList
     */
    public function setIsTj($isTj)
    {
        $this->isTj = $isTj;

        return $this;
    }

    /**
     * Get isTj
     *
     * @return integer 
     */
    public function getIsTj()
    {
        return $this->isTj;
    }

    /**
     * Set cityOrder
     *
     * @param integer $cityOrder
     * @return TrjZjxmList
     */
    public function setCityOrder($cityOrder)
    {
        $this->cityOrder = $cityOrder;

        return $this;
    }

    /**
     * Get cityOrder
     *
     * @return integer 
     */
    public function getCityOrder()
    {
        return $this->cityOrder;
    }

    /**
     * Set certScore
     *
     * @param integer $certScore
     * @return TrjZjxmList
     */
    public function setCertScore($certScore)
    {
        $this->certScore = $certScore;

        return $this;
    }

    /**
     * Get certScore
     *
     * @return integer 
     */
    public function getCertScore()
    {
        return $this->certScore;
    }

    /**
     * Set updatedDay
     *
     * @param integer $updatedDay
     * @return TrjZjxmList
     */
    public function setUpdatedDay($updatedDay)
    {
        $this->updatedDay = $updatedDay;

        return $this;
    }

    /**
     * Get updatedDay
     *
     * @return integer 
     */
    public function getUpdatedDay()
    {
        return $this->updatedDay;
    }

    /**
     * Set isQuery
     *
     * @param integer $isQuery
     * @return TrjZjxmList
     */
    public function setIsQuery($isQuery)
    {
        $this->isQuery = $isQuery;

        return $this;
    }

    /**
     * Get isQuery
     *
     * @return integer 
     */
    public function getIsQuery()
    {
        return $this->isQuery;
    }

    /**
     * Set trackFlag
     *
     * @param integer $trackFlag
     * @return TrjZjxmList
     */
    public function setTrackFlag($trackFlag)
    {
        $this->trackFlag = $trackFlag;

        return $this;
    }

    /**
     * Get trackFlag
     *
     * @return integer 
     */
    public function getTrackFlag()
    {
        return $this->trackFlag;
    }
}
