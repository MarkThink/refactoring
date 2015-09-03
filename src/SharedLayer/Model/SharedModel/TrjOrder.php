<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrder
 */
class TrjOrder
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
    private $username;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var integer
     */
    private $orderPayment;

    /**
     * @var string
     */
    private $orderSn;

    /**
     * @var string
     */
    private $orderPrice;

    /**
     * @var integer
     */
    private $orderStatus;

    /**
     * @var integer
     */
    private $orderType;

    /**
     * @var integer
     */
    private $isConfirm;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var integer
     */
    private $orderCreate;

    /**
     * @var integer
     */
    private $orderPaytime;

    /**
     * @var integer
     */
    private $pmodeId;

    /**
     * @var integer
     */
    private $orderIp;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var \DateTime
     */
    private $orderUpdate;

    /**
     * @var string
     */
    private $orderFile;

    /**
     * @var integer
     */
    private $useDeliveryNum;

    /**
     * @var integer
     */
    private $isDeliveryPackage;

    /**
     * @var string
     */
    private $payAmount;

    /**
     * @var string
     */
    private $cart;

    /**
     * @var string
     */
    private $toItemId;

    /**
     * @var string
     */
    private $fromItemId;

    /**
     * @var string
     */
    private $updateCode;

    /**
     * @var integer
     */
    private $fromType;

    /**
     * @var string
     */
    private $alipayTradeStatus;

    /**
     * @var string
     */
    private $alipayTradeNo;


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
     * @return TrjOrder
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
     * Set username
     *
     * @param string $username
     * @return TrjOrder
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjOrder
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set orderPayment
     *
     * @param integer $orderPayment
     * @return TrjOrder
     */
    public function setOrderPayment($orderPayment)
    {
        $this->orderPayment = $orderPayment;

        return $this;
    }

    /**
     * Get orderPayment
     *
     * @return integer 
     */
    public function getOrderPayment()
    {
        return $this->orderPayment;
    }

    /**
     * Set orderSn
     *
     * @param string $orderSn
     * @return TrjOrder
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
     * Set orderPrice
     *
     * @param string $orderPrice
     * @return TrjOrder
     */
    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    /**
     * Get orderPrice
     *
     * @return string 
     */
    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    /**
     * Set orderStatus
     *
     * @param integer $orderStatus
     * @return TrjOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return integer 
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set orderType
     *
     * @param integer $orderType
     * @return TrjOrder
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return integer 
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set isConfirm
     *
     * @param integer $isConfirm
     * @return TrjOrder
     */
    public function setIsConfirm($isConfirm)
    {
        $this->isConfirm = $isConfirm;

        return $this;
    }

    /**
     * Get isConfirm
     *
     * @return integer 
     */
    public function getIsConfirm()
    {
        return $this->isConfirm;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return TrjOrder
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set orderCreate
     *
     * @param integer $orderCreate
     * @return TrjOrder
     */
    public function setOrderCreate($orderCreate)
    {
        $this->orderCreate = $orderCreate;

        return $this;
    }

    /**
     * Get orderCreate
     *
     * @return integer 
     */
    public function getOrderCreate()
    {
        return $this->orderCreate;
    }

    /**
     * Set orderPaytime
     *
     * @param integer $orderPaytime
     * @return TrjOrder
     */
    public function setOrderPaytime($orderPaytime)
    {
        $this->orderPaytime = $orderPaytime;

        return $this;
    }

    /**
     * Get orderPaytime
     *
     * @return integer 
     */
    public function getOrderPaytime()
    {
        return $this->orderPaytime;
    }

    /**
     * Set pmodeId
     *
     * @param integer $pmodeId
     * @return TrjOrder
     */
    public function setPmodeId($pmodeId)
    {
        $this->pmodeId = $pmodeId;

        return $this;
    }

    /**
     * Get pmodeId
     *
     * @return integer 
     */
    public function getPmodeId()
    {
        return $this->pmodeId;
    }

    /**
     * Set orderIp
     *
     * @param integer $orderIp
     * @return TrjOrder
     */
    public function setOrderIp($orderIp)
    {
        $this->orderIp = $orderIp;

        return $this;
    }

    /**
     * Get orderIp
     *
     * @return integer 
     */
    public function getOrderIp()
    {
        return $this->orderIp;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return TrjOrder
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return TrjOrder
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     * @return TrjOrder
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string 
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set orderUpdate
     *
     * @param \DateTime $orderUpdate
     * @return TrjOrder
     */
    public function setOrderUpdate($orderUpdate)
    {
        $this->orderUpdate = $orderUpdate;

        return $this;
    }

    /**
     * Get orderUpdate
     *
     * @return \DateTime 
     */
    public function getOrderUpdate()
    {
        return $this->orderUpdate;
    }

    /**
     * Set orderFile
     *
     * @param string $orderFile
     * @return TrjOrder
     */
    public function setOrderFile($orderFile)
    {
        $this->orderFile = $orderFile;

        return $this;
    }

    /**
     * Get orderFile
     *
     * @return string 
     */
    public function getOrderFile()
    {
        return $this->orderFile;
    }

    /**
     * Set useDeliveryNum
     *
     * @param integer $useDeliveryNum
     * @return TrjOrder
     */
    public function setUseDeliveryNum($useDeliveryNum)
    {
        $this->useDeliveryNum = $useDeliveryNum;

        return $this;
    }

    /**
     * Get useDeliveryNum
     *
     * @return integer 
     */
    public function getUseDeliveryNum()
    {
        return $this->useDeliveryNum;
    }

    /**
     * Set isDeliveryPackage
     *
     * @param integer $isDeliveryPackage
     * @return TrjOrder
     */
    public function setIsDeliveryPackage($isDeliveryPackage)
    {
        $this->isDeliveryPackage = $isDeliveryPackage;

        return $this;
    }

    /**
     * Get isDeliveryPackage
     *
     * @return integer 
     */
    public function getIsDeliveryPackage()
    {
        return $this->isDeliveryPackage;
    }

    /**
     * Set payAmount
     *
     * @param string $payAmount
     * @return TrjOrder
     */
    public function setPayAmount($payAmount)
    {
        $this->payAmount = $payAmount;

        return $this;
    }

    /**
     * Get payAmount
     *
     * @return string 
     */
    public function getPayAmount()
    {
        return $this->payAmount;
    }

    /**
     * Set cart
     *
     * @param string $cart
     * @return TrjOrder
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return string 
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set toItemId
     *
     * @param string $toItemId
     * @return TrjOrder
     */
    public function setToItemId($toItemId)
    {
        $this->toItemId = $toItemId;

        return $this;
    }

    /**
     * Get toItemId
     *
     * @return string 
     */
    public function getToItemId()
    {
        return $this->toItemId;
    }

    /**
     * Set fromItemId
     *
     * @param string $fromItemId
     * @return TrjOrder
     */
    public function setFromItemId($fromItemId)
    {
        $this->fromItemId = $fromItemId;

        return $this;
    }

    /**
     * Get fromItemId
     *
     * @return string 
     */
    public function getFromItemId()
    {
        return $this->fromItemId;
    }

    /**
     * Set updateCode
     *
     * @param string $updateCode
     * @return TrjOrder
     */
    public function setUpdateCode($updateCode)
    {
        $this->updateCode = $updateCode;

        return $this;
    }

    /**
     * Get updateCode
     *
     * @return string 
     */
    public function getUpdateCode()
    {
        return $this->updateCode;
    }

    /**
     * Set fromType
     *
     * @param integer $fromType
     * @return TrjOrder
     */
    public function setFromType($fromType)
    {
        $this->fromType = $fromType;

        return $this;
    }

    /**
     * Get fromType
     *
     * @return integer 
     */
    public function getFromType()
    {
        return $this->fromType;
    }

    /**
     * Set alipayTradeStatus
     *
     * @param string $alipayTradeStatus
     * @return TrjOrder
     */
    public function setAlipayTradeStatus($alipayTradeStatus)
    {
        $this->alipayTradeStatus = $alipayTradeStatus;

        return $this;
    }

    /**
     * Get alipayTradeStatus
     *
     * @return string 
     */
    public function getAlipayTradeStatus()
    {
        return $this->alipayTradeStatus;
    }

    /**
     * Set alipayTradeNo
     *
     * @param string $alipayTradeNo
     * @return TrjOrder
     */
    public function setAlipayTradeNo($alipayTradeNo)
    {
        $this->alipayTradeNo = $alipayTradeNo;

        return $this;
    }

    /**
     * Get alipayTradeNo
     *
     * @return string 
     */
    public function getAlipayTradeNo()
    {
        return $this->alipayTradeNo;
    }
}
