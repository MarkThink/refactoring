<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivitie
 */
class TrjActivitie
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
    private $activitieType;

    /**
     * @var integer
     */
    private $pageType;

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
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $bStart;

    /**
     * @var integer
     */
    private $bEnd;

    /**
     * @var integer
     */
    private $aStart;

    /**
     * @var integer
     */
    private $aEnd;

    /**
     * @var integer
     */
    private $isOpen;

    /**
     * @var integer
     */
    private $isDjs;

    /**
     * @var integer
     */
    private $isBaoming;

    /**
     * @var integer
     */
    private $isReview;

    /**
     * @var string
     */
    private $listImg;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var string
     */
    private $iImg;

    /**
     * @var string
     */
    private $iAtt;

    /**
     * @var string
     */
    private $iAttName;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $contactMobile;

    /**
     * @var string
     */
    private $contactFax;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $baomingNum;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $goodNum;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $isPage;

    /**
     * @var integer
     */
    private $trjFlag;

    /**
     * @var integer
     */
    private $isTouch;


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
     * @return TrjActivitie
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
     * Set activitieType
     *
     * @param integer $activitieType
     * @return TrjActivitie
     */
    public function setActivitieType($activitieType)
    {
        $this->activitieType = $activitieType;

        return $this;
    }

    /**
     * Get activitieType
     *
     * @return integer 
     */
    public function getActivitieType()
    {
        return $this->activitieType;
    }

    /**
     * Set pageType
     *
     * @param integer $pageType
     * @return TrjActivitie
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;

        return $this;
    }

    /**
     * Get pageType
     *
     * @return integer 
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjActivitie
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
     * @return TrjActivitie
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
     * @return TrjActivitie
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
     * Set address
     *
     * @param string $address
     * @return TrjActivitie
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set bStart
     *
     * @param integer $bStart
     * @return TrjActivitie
     */
    public function setBStart($bStart)
    {
        $this->bStart = $bStart;

        return $this;
    }

    /**
     * Get bStart
     *
     * @return integer 
     */
    public function getBStart()
    {
        return $this->bStart;
    }

    /**
     * Set bEnd
     *
     * @param integer $bEnd
     * @return TrjActivitie
     */
    public function setBEnd($bEnd)
    {
        $this->bEnd = $bEnd;

        return $this;
    }

    /**
     * Get bEnd
     *
     * @return integer 
     */
    public function getBEnd()
    {
        return $this->bEnd;
    }

    /**
     * Set aStart
     *
     * @param integer $aStart
     * @return TrjActivitie
     */
    public function setAStart($aStart)
    {
        $this->aStart = $aStart;

        return $this;
    }

    /**
     * Get aStart
     *
     * @return integer 
     */
    public function getAStart()
    {
        return $this->aStart;
    }

    /**
     * Set aEnd
     *
     * @param integer $aEnd
     * @return TrjActivitie
     */
    public function setAEnd($aEnd)
    {
        $this->aEnd = $aEnd;

        return $this;
    }

    /**
     * Get aEnd
     *
     * @return integer 
     */
    public function getAEnd()
    {
        return $this->aEnd;
    }

    /**
     * Set isOpen
     *
     * @param integer $isOpen
     * @return TrjActivitie
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * Get isOpen
     *
     * @return integer 
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * Set isDjs
     *
     * @param integer $isDjs
     * @return TrjActivitie
     */
    public function setIsDjs($isDjs)
    {
        $this->isDjs = $isDjs;

        return $this;
    }

    /**
     * Get isDjs
     *
     * @return integer 
     */
    public function getIsDjs()
    {
        return $this->isDjs;
    }

    /**
     * Set isBaoming
     *
     * @param integer $isBaoming
     * @return TrjActivitie
     */
    public function setIsBaoming($isBaoming)
    {
        $this->isBaoming = $isBaoming;

        return $this;
    }

    /**
     * Get isBaoming
     *
     * @return integer 
     */
    public function getIsBaoming()
    {
        return $this->isBaoming;
    }

    /**
     * Set isReview
     *
     * @param integer $isReview
     * @return TrjActivitie
     */
    public function setIsReview($isReview)
    {
        $this->isReview = $isReview;

        return $this;
    }

    /**
     * Get isReview
     *
     * @return integer 
     */
    public function getIsReview()
    {
        return $this->isReview;
    }

    /**
     * Set listImg
     *
     * @param string $listImg
     * @return TrjActivitie
     */
    public function setListImg($listImg)
    {
        $this->listImg = $listImg;

        return $this;
    }

    /**
     * Get listImg
     *
     * @return string 
     */
    public function getListImg()
    {
        return $this->listImg;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return TrjActivitie
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set iImg
     *
     * @param string $iImg
     * @return TrjActivitie
     */
    public function setIImg($iImg)
    {
        $this->iImg = $iImg;

        return $this;
    }

    /**
     * Get iImg
     *
     * @return string 
     */
    public function getIImg()
    {
        return $this->iImg;
    }

    /**
     * Set iAtt
     *
     * @param string $iAtt
     * @return TrjActivitie
     */
    public function setIAtt($iAtt)
    {
        $this->iAtt = $iAtt;

        return $this;
    }

    /**
     * Get iAtt
     *
     * @return string 
     */
    public function getIAtt()
    {
        return $this->iAtt;
    }

    /**
     * Set iAttName
     *
     * @param string $iAttName
     * @return TrjActivitie
     */
    public function setIAttName($iAttName)
    {
        $this->iAttName = $iAttName;

        return $this;
    }

    /**
     * Get iAttName
     *
     * @return string 
     */
    public function getIAttName()
    {
        return $this->iAttName;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjActivitie
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactMobile
     *
     * @param string $contactMobile
     * @return TrjActivitie
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;

        return $this;
    }

    /**
     * Get contactMobile
     *
     * @return string 
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Set contactFax
     *
     * @param string $contactFax
     * @return TrjActivitie
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;

        return $this;
    }

    /**
     * Get contactFax
     *
     * @return string 
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return TrjActivitie
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return TrjActivitie
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjActivitie
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
     * Set createId
     *
     * @param integer $createId
     * @return TrjActivitie
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
     * @return TrjActivitie
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
     * Set created
     *
     * @param integer $created
     * @return TrjActivitie
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
     * Set baomingNum
     *
     * @param integer $baomingNum
     * @return TrjActivitie
     */
    public function setBaomingNum($baomingNum)
    {
        $this->baomingNum = $baomingNum;

        return $this;
    }

    /**
     * Get baomingNum
     *
     * @return integer 
     */
    public function getBaomingNum()
    {
        return $this->baomingNum;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjActivitie
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
     * Set goodNum
     *
     * @param integer $goodNum
     * @return TrjActivitie
     */
    public function setGoodNum($goodNum)
    {
        $this->goodNum = $goodNum;

        return $this;
    }

    /**
     * Get goodNum
     *
     * @return integer 
     */
    public function getGoodNum()
    {
        return $this->goodNum;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjActivitie
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
     * Set isPage
     *
     * @param integer $isPage
     * @return TrjActivitie
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
     * Set trjFlag
     *
     * @param integer $trjFlag
     * @return TrjActivitie
     */
    public function setTrjFlag($trjFlag)
    {
        $this->trjFlag = $trjFlag;

        return $this;
    }

    /**
     * Get trjFlag
     *
     * @return integer 
     */
    public function getTrjFlag()
    {
        return $this->trjFlag;
    }

    /**
     * Set isTouch
     *
     * @param integer $isTouch
     * @return TrjActivitie
     */
    public function setIsTouch($isTouch)
    {
        $this->isTouch = $isTouch;

        return $this;
    }

    /**
     * Get isTouch
     *
     * @return integer 
     */
    public function getIsTouch()
    {
        return $this->isTouch;
    }
}
