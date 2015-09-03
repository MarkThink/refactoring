<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdList
 */
class TrjAdList
{
    /**
     * @var integer
     */
    private $adId;

    /**
     * @var integer
     */
    private $positionId;

    /**
     * @var integer
     */
    private $mediaType;

    /**
     * @var string
     */
    private $adName;

    /**
     * @var string
     */
    private $adLink;

    /**
     * @var string
     */
    private $adCode;

    /**
     * @var integer
     */
    private $adSort;

    /**
     * @var integer
     */
    private $startTime;

    /**
     * @var integer
     */
    private $endTime;

    /**
     * @var string
     */
    private $linkMan;

    /**
     * @var string
     */
    private $linkEmail;

    /**
     * @var string
     */
    private $linkPhone;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $enabled;

    /**
     * @var integer
     */
    private $speed;


    /**
     * Get adId
     *
     * @return integer 
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * Set positionId
     *
     * @param integer $positionId
     * @return TrjAdList
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;

        return $this;
    }

    /**
     * Get positionId
     *
     * @return integer 
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * Set mediaType
     *
     * @param integer $mediaType
     * @return TrjAdList
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return integer 
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set adName
     *
     * @param string $adName
     * @return TrjAdList
     */
    public function setAdName($adName)
    {
        $this->adName = $adName;

        return $this;
    }

    /**
     * Get adName
     *
     * @return string 
     */
    public function getAdName()
    {
        return $this->adName;
    }

    /**
     * Set adLink
     *
     * @param string $adLink
     * @return TrjAdList
     */
    public function setAdLink($adLink)
    {
        $this->adLink = $adLink;

        return $this;
    }

    /**
     * Get adLink
     *
     * @return string 
     */
    public function getAdLink()
    {
        return $this->adLink;
    }

    /**
     * Set adCode
     *
     * @param string $adCode
     * @return TrjAdList
     */
    public function setAdCode($adCode)
    {
        $this->adCode = $adCode;

        return $this;
    }

    /**
     * Get adCode
     *
     * @return string 
     */
    public function getAdCode()
    {
        return $this->adCode;
    }

    /**
     * Set adSort
     *
     * @param integer $adSort
     * @return TrjAdList
     */
    public function setAdSort($adSort)
    {
        $this->adSort = $adSort;

        return $this;
    }

    /**
     * Get adSort
     *
     * @return integer 
     */
    public function getAdSort()
    {
        return $this->adSort;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     * @return TrjAdList
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     * @return TrjAdList
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set linkMan
     *
     * @param string $linkMan
     * @return TrjAdList
     */
    public function setLinkMan($linkMan)
    {
        $this->linkMan = $linkMan;

        return $this;
    }

    /**
     * Get linkMan
     *
     * @return string 
     */
    public function getLinkMan()
    {
        return $this->linkMan;
    }

    /**
     * Set linkEmail
     *
     * @param string $linkEmail
     * @return TrjAdList
     */
    public function setLinkEmail($linkEmail)
    {
        $this->linkEmail = $linkEmail;

        return $this;
    }

    /**
     * Get linkEmail
     *
     * @return string 
     */
    public function getLinkEmail()
    {
        return $this->linkEmail;
    }

    /**
     * Set linkPhone
     *
     * @param string $linkPhone
     * @return TrjAdList
     */
    public function setLinkPhone($linkPhone)
    {
        $this->linkPhone = $linkPhone;

        return $this;
    }

    /**
     * Get linkPhone
     *
     * @return string 
     */
    public function getLinkPhone()
    {
        return $this->linkPhone;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjAdList
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
     * Set enabled
     *
     * @param integer $enabled
     * @return TrjAdList
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     * @return TrjAdList
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer 
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}
