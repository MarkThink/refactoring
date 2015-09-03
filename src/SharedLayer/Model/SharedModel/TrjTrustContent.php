<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTrustContent
 */
class TrjTrustContent
{
    /**
     * @var integer
     */
    private $totId;

    /**
     * @var string
     */
    private $totRevenueRule;

    /**
     * @var string
     */
    private $totFundUse;

    /**
     * @var string
     */
    private $totRiskControl;

    /**
     * @var string
     */
    private $totIntro;


    /**
     * Get totId
     *
     * @return integer 
     */
    public function getTotId()
    {
        return $this->totId;
    }

    /**
     * Set totRevenueRule
     *
     * @param string $totRevenueRule
     * @return TrjTrustContent
     */
    public function setTotRevenueRule($totRevenueRule)
    {
        $this->totRevenueRule = $totRevenueRule;

        return $this;
    }

    /**
     * Get totRevenueRule
     *
     * @return string 
     */
    public function getTotRevenueRule()
    {
        return $this->totRevenueRule;
    }

    /**
     * Set totFundUse
     *
     * @param string $totFundUse
     * @return TrjTrustContent
     */
    public function setTotFundUse($totFundUse)
    {
        $this->totFundUse = $totFundUse;

        return $this;
    }

    /**
     * Get totFundUse
     *
     * @return string 
     */
    public function getTotFundUse()
    {
        return $this->totFundUse;
    }

    /**
     * Set totRiskControl
     *
     * @param string $totRiskControl
     * @return TrjTrustContent
     */
    public function setTotRiskControl($totRiskControl)
    {
        $this->totRiskControl = $totRiskControl;

        return $this;
    }

    /**
     * Get totRiskControl
     *
     * @return string 
     */
    public function getTotRiskControl()
    {
        return $this->totRiskControl;
    }

    /**
     * Set totIntro
     *
     * @param string $totIntro
     * @return TrjTrustContent
     */
    public function setTotIntro($totIntro)
    {
        $this->totIntro = $totIntro;

        return $this;
    }

    /**
     * Get totIntro
     *
     * @return string 
     */
    public function getTotIntro()
    {
        return $this->totIntro;
    }
}
