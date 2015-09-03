<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrderDeliveryPackage
 */
class TrjOrderDeliveryPackage
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $productPrice;

    /**
     * @var integer
     */
    private $productUnit;

    /**
     * @var integer
     */
    private $productNum;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var string
     */
    private $totalAmount;


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
     * Set orderId
     *
     * @param integer $orderId
     * @return TrjOrderDeliveryPackage
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return TrjOrderDeliveryPackage
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
     * Set productPrice
     *
     * @param string $productPrice
     * @return TrjOrderDeliveryPackage
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productUnit
     *
     * @param integer $productUnit
     * @return TrjOrderDeliveryPackage
     */
    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;

        return $this;
    }

    /**
     * Get productUnit
     *
     * @return integer 
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * Set productNum
     *
     * @param integer $productNum
     * @return TrjOrderDeliveryPackage
     */
    public function setProductNum($productNum)
    {
        $this->productNum = $productNum;

        return $this;
    }

    /**
     * Get productNum
     *
     * @return integer 
     */
    public function getProductNum()
    {
        return $this->productNum;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return TrjOrderDeliveryPackage
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
     * Set totalAmount
     *
     * @param string $totalAmount
     * @return TrjOrderDeliveryPackage
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return string 
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
