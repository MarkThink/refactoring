<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTravelRaffle
 */
class TrjTravelRaffle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $raffleName;

    /**
     * @var integer
     */
    private $raffleAllCount;

    /**
     * @var integer
     */
    private $webCount;

    /**
     * @var integer
     */
    private $wapCount;

    /**
     * @var integer
     */
    private $extractWebCount;

    /**
     * @var integer
     */
    private $extractWapCount;

    /**
     * @var string
     */
    private $webRule;

    /**
     * @var string
     */
    private $wapRule;


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
     * Set raffleName
     *
     * @param string $raffleName
     * @return TrjTravelRaffle
     */
    public function setRaffleName($raffleName)
    {
        $this->raffleName = $raffleName;

        return $this;
    }

    /**
     * Get raffleName
     *
     * @return string 
     */
    public function getRaffleName()
    {
        return $this->raffleName;
    }

    /**
     * Set raffleAllCount
     *
     * @param integer $raffleAllCount
     * @return TrjTravelRaffle
     */
    public function setRaffleAllCount($raffleAllCount)
    {
        $this->raffleAllCount = $raffleAllCount;

        return $this;
    }

    /**
     * Get raffleAllCount
     *
     * @return integer 
     */
    public function getRaffleAllCount()
    {
        return $this->raffleAllCount;
    }

    /**
     * Set webCount
     *
     * @param integer $webCount
     * @return TrjTravelRaffle
     */
    public function setWebCount($webCount)
    {
        $this->webCount = $webCount;

        return $this;
    }

    /**
     * Get webCount
     *
     * @return integer 
     */
    public function getWebCount()
    {
        return $this->webCount;
    }

    /**
     * Set wapCount
     *
     * @param integer $wapCount
     * @return TrjTravelRaffle
     */
    public function setWapCount($wapCount)
    {
        $this->wapCount = $wapCount;

        return $this;
    }

    /**
     * Get wapCount
     *
     * @return integer 
     */
    public function getWapCount()
    {
        return $this->wapCount;
    }

    /**
     * Set extractWebCount
     *
     * @param integer $extractWebCount
     * @return TrjTravelRaffle
     */
    public function setExtractWebCount($extractWebCount)
    {
        $this->extractWebCount = $extractWebCount;

        return $this;
    }

    /**
     * Get extractWebCount
     *
     * @return integer 
     */
    public function getExtractWebCount()
    {
        return $this->extractWebCount;
    }

    /**
     * Set extractWapCount
     *
     * @param integer $extractWapCount
     * @return TrjTravelRaffle
     */
    public function setExtractWapCount($extractWapCount)
    {
        $this->extractWapCount = $extractWapCount;

        return $this;
    }

    /**
     * Get extractWapCount
     *
     * @return integer 
     */
    public function getExtractWapCount()
    {
        return $this->extractWapCount;
    }

    /**
     * Set webRule
     *
     * @param string $webRule
     * @return TrjTravelRaffle
     */
    public function setWebRule($webRule)
    {
        $this->webRule = $webRule;

        return $this;
    }

    /**
     * Get webRule
     *
     * @return string 
     */
    public function getWebRule()
    {
        return $this->webRule;
    }

    /**
     * Set wapRule
     *
     * @param string $wapRule
     * @return TrjTravelRaffle
     */
    public function setWapRule($wapRule)
    {
        $this->wapRule = $wapRule;

        return $this;
    }

    /**
     * Get wapRule
     *
     * @return string 
     */
    public function getWapRule()
    {
        return $this->wapRule;
    }
}
