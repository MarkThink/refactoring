<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrgSettleCase
 */
class TrjOrgSettleCase
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $settleId;

    /**
     * @var integer
     */
    private $tzTime;

    /**
     * @var integer
     */
    private $tzMoney;

    /**
     * @var string
     */
    private $tzOrgName;

    /**
     * @var string
     */
    private $equityInvestorName;


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
     * Set settleId
     *
     * @param integer $settleId
     * @return TrjOrgSettleCase
     */
    public function setSettleId($settleId)
    {
        $this->settleId = $settleId;

        return $this;
    }

    /**
     * Get settleId
     *
     * @return integer 
     */
    public function getSettleId()
    {
        return $this->settleId;
    }

    /**
     * Set tzTime
     *
     * @param integer $tzTime
     * @return TrjOrgSettleCase
     */
    public function setTzTime($tzTime)
    {
        $this->tzTime = $tzTime;

        return $this;
    }

    /**
     * Get tzTime
     *
     * @return integer 
     */
    public function getTzTime()
    {
        return $this->tzTime;
    }

    /**
     * Set tzMoney
     *
     * @param integer $tzMoney
     * @return TrjOrgSettleCase
     */
    public function setTzMoney($tzMoney)
    {
        $this->tzMoney = $tzMoney;

        return $this;
    }

    /**
     * Get tzMoney
     *
     * @return integer 
     */
    public function getTzMoney()
    {
        return $this->tzMoney;
    }

    /**
     * Set tzOrgName
     *
     * @param string $tzOrgName
     * @return TrjOrgSettleCase
     */
    public function setTzOrgName($tzOrgName)
    {
        $this->tzOrgName = $tzOrgName;

        return $this;
    }

    /**
     * Get tzOrgName
     *
     * @return string 
     */
    public function getTzOrgName()
    {
        return $this->tzOrgName;
    }

    /**
     * Set equityInvestorName
     *
     * @param string $equityInvestorName
     * @return TrjOrgSettleCase
     */
    public function setEquityInvestorName($equityInvestorName)
    {
        $this->equityInvestorName = $equityInvestorName;

        return $this;
    }

    /**
     * Get equityInvestorName
     *
     * @return string 
     */
    public function getEquityInvestorName()
    {
        return $this->equityInvestorName;
    }
}
