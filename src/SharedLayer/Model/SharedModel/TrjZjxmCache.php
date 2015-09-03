<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmCache
 */
class TrjZjxmCache
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cat;

    /**
     * @var string
     */
    private $area;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $fundbody;

    /**
     * @var string
     */
    private $equityinversttype;

    /**
     * @var string
     */
    private $period;

    /**
     * @var string
     */
    private $investindustry;

    /**
     * @var string
     */
    private $investarea;

    /**
     * @var string
     */
    private $investproducttype;

    /**
     * @var string
     */
    private $investtimelimit;

    /**
     * @var string
     */
    private $fundway;

    /**
     * @var string
     */
    private $tradetype;

    /**
     * @var string
     */
    private $tradeway;

    /**
     * @var string
     */
    private $transferamount;

    /**
     * @var string
     */
    private $accountedunit;

    /**
     * @var string
     */
    private $exitminyear;

    /**
     * @var string
     */
    private $exitway;

    /**
     * @var string
     */
    private $canhighestinterest;

    /**
     * @var string
     */
    private $fundtaketime;

    /**
     * @var string
     */
    private $riskcontrol;

    /**
     * @var string
     */
    private $ikeywords;

    /**
     * @var string
     */
    private $repaysource;

    /**
     * @var string
     */
    private $matchdata;


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
     * Set cat
     *
     * @param string $cat
     * @return TrjZjxmCache
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return TrjZjxmCache
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return TrjZjxmCache
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return TrjZjxmCache
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
     * Set method
     *
     * @param string $method
     * @return TrjZjxmCache
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set fundbody
     *
     * @param string $fundbody
     * @return TrjZjxmCache
     */
    public function setFundbody($fundbody)
    {
        $this->fundbody = $fundbody;

        return $this;
    }

    /**
     * Get fundbody
     *
     * @return string 
     */
    public function getFundbody()
    {
        return $this->fundbody;
    }

    /**
     * Set equityinversttype
     *
     * @param string $equityinversttype
     * @return TrjZjxmCache
     */
    public function setEquityinversttype($equityinversttype)
    {
        $this->equityinversttype = $equityinversttype;

        return $this;
    }

    /**
     * Get equityinversttype
     *
     * @return string 
     */
    public function getEquityinversttype()
    {
        return $this->equityinversttype;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return TrjZjxmCache
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set investindustry
     *
     * @param string $investindustry
     * @return TrjZjxmCache
     */
    public function setInvestindustry($investindustry)
    {
        $this->investindustry = $investindustry;

        return $this;
    }

    /**
     * Get investindustry
     *
     * @return string 
     */
    public function getInvestindustry()
    {
        return $this->investindustry;
    }

    /**
     * Set investarea
     *
     * @param string $investarea
     * @return TrjZjxmCache
     */
    public function setInvestarea($investarea)
    {
        $this->investarea = $investarea;

        return $this;
    }

    /**
     * Get investarea
     *
     * @return string 
     */
    public function getInvestarea()
    {
        return $this->investarea;
    }

    /**
     * Set investproducttype
     *
     * @param string $investproducttype
     * @return TrjZjxmCache
     */
    public function setInvestproducttype($investproducttype)
    {
        $this->investproducttype = $investproducttype;

        return $this;
    }

    /**
     * Get investproducttype
     *
     * @return string 
     */
    public function getInvestproducttype()
    {
        return $this->investproducttype;
    }

    /**
     * Set investtimelimit
     *
     * @param string $investtimelimit
     * @return TrjZjxmCache
     */
    public function setInvesttimelimit($investtimelimit)
    {
        $this->investtimelimit = $investtimelimit;

        return $this;
    }

    /**
     * Get investtimelimit
     *
     * @return string 
     */
    public function getInvesttimelimit()
    {
        return $this->investtimelimit;
    }

    /**
     * Set fundway
     *
     * @param string $fundway
     * @return TrjZjxmCache
     */
    public function setFundway($fundway)
    {
        $this->fundway = $fundway;

        return $this;
    }

    /**
     * Get fundway
     *
     * @return string 
     */
    public function getFundway()
    {
        return $this->fundway;
    }

    /**
     * Set tradetype
     *
     * @param string $tradetype
     * @return TrjZjxmCache
     */
    public function setTradetype($tradetype)
    {
        $this->tradetype = $tradetype;

        return $this;
    }

    /**
     * Get tradetype
     *
     * @return string 
     */
    public function getTradetype()
    {
        return $this->tradetype;
    }

    /**
     * Set tradeway
     *
     * @param string $tradeway
     * @return TrjZjxmCache
     */
    public function setTradeway($tradeway)
    {
        $this->tradeway = $tradeway;

        return $this;
    }

    /**
     * Get tradeway
     *
     * @return string 
     */
    public function getTradeway()
    {
        return $this->tradeway;
    }

    /**
     * Set transferamount
     *
     * @param string $transferamount
     * @return TrjZjxmCache
     */
    public function setTransferamount($transferamount)
    {
        $this->transferamount = $transferamount;

        return $this;
    }

    /**
     * Get transferamount
     *
     * @return string 
     */
    public function getTransferamount()
    {
        return $this->transferamount;
    }

    /**
     * Set accountedunit
     *
     * @param string $accountedunit
     * @return TrjZjxmCache
     */
    public function setAccountedunit($accountedunit)
    {
        $this->accountedunit = $accountedunit;

        return $this;
    }

    /**
     * Get accountedunit
     *
     * @return string 
     */
    public function getAccountedunit()
    {
        return $this->accountedunit;
    }

    /**
     * Set exitminyear
     *
     * @param string $exitminyear
     * @return TrjZjxmCache
     */
    public function setExitminyear($exitminyear)
    {
        $this->exitminyear = $exitminyear;

        return $this;
    }

    /**
     * Get exitminyear
     *
     * @return string 
     */
    public function getExitminyear()
    {
        return $this->exitminyear;
    }

    /**
     * Set exitway
     *
     * @param string $exitway
     * @return TrjZjxmCache
     */
    public function setExitway($exitway)
    {
        $this->exitway = $exitway;

        return $this;
    }

    /**
     * Get exitway
     *
     * @return string 
     */
    public function getExitway()
    {
        return $this->exitway;
    }

    /**
     * Set canhighestinterest
     *
     * @param string $canhighestinterest
     * @return TrjZjxmCache
     */
    public function setCanhighestinterest($canhighestinterest)
    {
        $this->canhighestinterest = $canhighestinterest;

        return $this;
    }

    /**
     * Get canhighestinterest
     *
     * @return string 
     */
    public function getCanhighestinterest()
    {
        return $this->canhighestinterest;
    }

    /**
     * Set fundtaketime
     *
     * @param string $fundtaketime
     * @return TrjZjxmCache
     */
    public function setFundtaketime($fundtaketime)
    {
        $this->fundtaketime = $fundtaketime;

        return $this;
    }

    /**
     * Get fundtaketime
     *
     * @return string 
     */
    public function getFundtaketime()
    {
        return $this->fundtaketime;
    }

    /**
     * Set riskcontrol
     *
     * @param string $riskcontrol
     * @return TrjZjxmCache
     */
    public function setRiskcontrol($riskcontrol)
    {
        $this->riskcontrol = $riskcontrol;

        return $this;
    }

    /**
     * Get riskcontrol
     *
     * @return string 
     */
    public function getRiskcontrol()
    {
        return $this->riskcontrol;
    }

    /**
     * Set ikeywords
     *
     * @param string $ikeywords
     * @return TrjZjxmCache
     */
    public function setIkeywords($ikeywords)
    {
        $this->ikeywords = $ikeywords;

        return $this;
    }

    /**
     * Get ikeywords
     *
     * @return string 
     */
    public function getIkeywords()
    {
        return $this->ikeywords;
    }

    /**
     * Set repaysource
     *
     * @param string $repaysource
     * @return TrjZjxmCache
     */
    public function setRepaysource($repaysource)
    {
        $this->repaysource = $repaysource;

        return $this;
    }

    /**
     * Get repaysource
     *
     * @return string 
     */
    public function getRepaysource()
    {
        return $this->repaysource;
    }

    /**
     * Set matchdata
     *
     * @param string $matchdata
     * @return TrjZjxmCache
     */
    public function setMatchdata($matchdata)
    {
        $this->matchdata = $matchdata;

        return $this;
    }

    /**
     * Get matchdata
     *
     * @return string 
     */
    public function getMatchdata()
    {
        return $this->matchdata;
    }
}
