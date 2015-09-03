<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersBusinessConfig
 */
class TrjUsersBusinessConfig
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
    private $fundsBodyFrom;

    /**
     * @var string
     */
    private $fundTypes;

    /**
     * @var string
     */
    private $stage;

    /**
     * @var string
     */
    private $investMode;

    /**
     * @var string
     */
    private $tzindustrys;

    /**
     * @var string
     */
    private $industrysParent;

    /**
     * @var string
     */
    private $industrys;

    /**
     * @var string
     */
    private $areas;

    /**
     * @var string
     */
    private $cats;

    /**
     * @var string
     */
    private $utypes;

    /**
     * @var integer
     */
    private $isEmail;

    /**
     * @var integer
     */
    private $sendDate;

    /**
     * @var integer
     */
    private $publishDay;

    /**
     * @var integer
     */
    private $cycle;


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
     * @return TrjUsersBusinessConfig
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
     * Set fundsBodyFrom
     *
     * @param string $fundsBodyFrom
     * @return TrjUsersBusinessConfig
     */
    public function setFundsBodyFrom($fundsBodyFrom)
    {
        $this->fundsBodyFrom = $fundsBodyFrom;

        return $this;
    }

    /**
     * Get fundsBodyFrom
     *
     * @return string 
     */
    public function getFundsBodyFrom()
    {
        return $this->fundsBodyFrom;
    }

    /**
     * Set fundTypes
     *
     * @param string $fundTypes
     * @return TrjUsersBusinessConfig
     */
    public function setFundTypes($fundTypes)
    {
        $this->fundTypes = $fundTypes;

        return $this;
    }

    /**
     * Get fundTypes
     *
     * @return string 
     */
    public function getFundTypes()
    {
        return $this->fundTypes;
    }

    /**
     * Set stage
     *
     * @param string $stage
     * @return TrjUsersBusinessConfig
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set investMode
     *
     * @param string $investMode
     * @return TrjUsersBusinessConfig
     */
    public function setInvestMode($investMode)
    {
        $this->investMode = $investMode;

        return $this;
    }

    /**
     * Get investMode
     *
     * @return string 
     */
    public function getInvestMode()
    {
        return $this->investMode;
    }

    /**
     * Set tzindustrys
     *
     * @param string $tzindustrys
     * @return TrjUsersBusinessConfig
     */
    public function setTzindustrys($tzindustrys)
    {
        $this->tzindustrys = $tzindustrys;

        return $this;
    }

    /**
     * Get tzindustrys
     *
     * @return string 
     */
    public function getTzindustrys()
    {
        return $this->tzindustrys;
    }

    /**
     * Set industrysParent
     *
     * @param string $industrysParent
     * @return TrjUsersBusinessConfig
     */
    public function setIndustrysParent($industrysParent)
    {
        $this->industrysParent = $industrysParent;

        return $this;
    }

    /**
     * Get industrysParent
     *
     * @return string 
     */
    public function getIndustrysParent()
    {
        return $this->industrysParent;
    }

    /**
     * Set industrys
     *
     * @param string $industrys
     * @return TrjUsersBusinessConfig
     */
    public function setIndustrys($industrys)
    {
        $this->industrys = $industrys;

        return $this;
    }

    /**
     * Get industrys
     *
     * @return string 
     */
    public function getIndustrys()
    {
        return $this->industrys;
    }

    /**
     * Set areas
     *
     * @param string $areas
     * @return TrjUsersBusinessConfig
     */
    public function setAreas($areas)
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get areas
     *
     * @return string 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Set cats
     *
     * @param string $cats
     * @return TrjUsersBusinessConfig
     */
    public function setCats($cats)
    {
        $this->cats = $cats;

        return $this;
    }

    /**
     * Get cats
     *
     * @return string 
     */
    public function getCats()
    {
        return $this->cats;
    }

    /**
     * Set utypes
     *
     * @param string $utypes
     * @return TrjUsersBusinessConfig
     */
    public function setUtypes($utypes)
    {
        $this->utypes = $utypes;

        return $this;
    }

    /**
     * Get utypes
     *
     * @return string 
     */
    public function getUtypes()
    {
        return $this->utypes;
    }

    /**
     * Set isEmail
     *
     * @param integer $isEmail
     * @return TrjUsersBusinessConfig
     */
    public function setIsEmail($isEmail)
    {
        $this->isEmail = $isEmail;

        return $this;
    }

    /**
     * Get isEmail
     *
     * @return integer 
     */
    public function getIsEmail()
    {
        return $this->isEmail;
    }

    /**
     * Set sendDate
     *
     * @param integer $sendDate
     * @return TrjUsersBusinessConfig
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return integer 
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set publishDay
     *
     * @param integer $publishDay
     * @return TrjUsersBusinessConfig
     */
    public function setPublishDay($publishDay)
    {
        $this->publishDay = $publishDay;

        return $this;
    }

    /**
     * Get publishDay
     *
     * @return integer 
     */
    public function getPublishDay()
    {
        return $this->publishDay;
    }

    /**
     * Set cycle
     *
     * @param integer $cycle
     * @return TrjUsersBusinessConfig
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return integer 
     */
    public function getCycle()
    {
        return $this->cycle;
    }
}
