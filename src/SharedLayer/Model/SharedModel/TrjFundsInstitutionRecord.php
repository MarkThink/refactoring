<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFundsInstitutionRecord
 */
class TrjFundsInstitutionRecord
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $institutId;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var integer
     */
    private $dtime;

    /**
     * @var integer
     */
    private $weight;


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
     * Set institutId
     *
     * @param integer $institutId
     * @return TrjFundsInstitutionRecord
     */
    public function setInstitutId($institutId)
    {
        $this->institutId = $institutId;

        return $this;
    }

    /**
     * Get institutId
     *
     * @return integer 
     */
    public function getInstitutId()
    {
        return $this->institutId;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return TrjFundsInstitutionRecord
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return TrjFundsInstitutionRecord
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
     * Set industry
     *
     * @param string $industry
     * @return TrjFundsInstitutionRecord
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
     * Set dtime
     *
     * @param integer $dtime
     * @return TrjFundsInstitutionRecord
     */
    public function setDtime($dtime)
    {
        $this->dtime = $dtime;

        return $this;
    }

    /**
     * Get dtime
     *
     * @return integer 
     */
    public function getDtime()
    {
        return $this->dtime;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return TrjFundsInstitutionRecord
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
