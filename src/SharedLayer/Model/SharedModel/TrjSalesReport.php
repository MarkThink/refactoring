<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSalesReport
 */
class TrjSalesReport
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $memberId;

    /**
     * @var string
     */
    private $memberAccount;

    /**
     * @var string
     */
    private $memberCode;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $regNum;

    /**
     * @var integer
     */
    private $vipNum;

    /**
     * @var integer
     */
    private $created;


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
     * Set memberId
     *
     * @param integer $memberId
     * @return TrjSalesReport
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set memberAccount
     *
     * @param string $memberAccount
     * @return TrjSalesReport
     */
    public function setMemberAccount($memberAccount)
    {
        $this->memberAccount = $memberAccount;

        return $this;
    }

    /**
     * Get memberAccount
     *
     * @return string 
     */
    public function getMemberAccount()
    {
        return $this->memberAccount;
    }

    /**
     * Set memberCode
     *
     * @param string $memberCode
     * @return TrjSalesReport
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;

        return $this;
    }

    /**
     * Get memberCode
     *
     * @return string 
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjSalesReport
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
     * Set regNum
     *
     * @param integer $regNum
     * @return TrjSalesReport
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;

        return $this;
    }

    /**
     * Get regNum
     *
     * @return integer 
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Set vipNum
     *
     * @param integer $vipNum
     * @return TrjSalesReport
     */
    public function setVipNum($vipNum)
    {
        $this->vipNum = $vipNum;

        return $this;
    }

    /**
     * Get vipNum
     *
     * @return integer 
     */
    public function getVipNum()
    {
        return $this->vipNum;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjSalesReport
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
}
