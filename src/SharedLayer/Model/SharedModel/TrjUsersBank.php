<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersBank
 */
class TrjUsersBank
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
    private $idName;

    /**
     * @var string
     */
    private $idNo;

    /**
     * @var string
     */
    private $bankAccount;

    /**
     * @var string
     */
    private $bankCode;

    /**
     * @var string
     */
    private $bankMobile;

    /**
     * @var string
     */
    private $orderSn;

    /**
     * @var integer
     */
    private $status;


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
     * @return TrjUsersBank
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
     * Set idName
     *
     * @param string $idName
     * @return TrjUsersBank
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;

        return $this;
    }

    /**
     * Get idName
     *
     * @return string 
     */
    public function getIdName()
    {
        return $this->idName;
    }

    /**
     * Set idNo
     *
     * @param string $idNo
     * @return TrjUsersBank
     */
    public function setIdNo($idNo)
    {
        $this->idNo = $idNo;

        return $this;
    }

    /**
     * Get idNo
     *
     * @return string 
     */
    public function getIdNo()
    {
        return $this->idNo;
    }

    /**
     * Set bankAccount
     *
     * @param string $bankAccount
     * @return TrjUsersBank
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return string 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     * @return TrjUsersBank
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankCode
     *
     * @return string 
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set bankMobile
     *
     * @param string $bankMobile
     * @return TrjUsersBank
     */
    public function setBankMobile($bankMobile)
    {
        $this->bankMobile = $bankMobile;

        return $this;
    }

    /**
     * Get bankMobile
     *
     * @return string 
     */
    public function getBankMobile()
    {
        return $this->bankMobile;
    }

    /**
     * Set orderSn
     *
     * @param string $orderSn
     * @return TrjUsersBank
     */
    public function setOrderSn($orderSn)
    {
        $this->orderSn = $orderSn;

        return $this;
    }

    /**
     * Get orderSn
     *
     * @return string 
     */
    public function getOrderSn()
    {
        return $this->orderSn;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersBank
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
}
