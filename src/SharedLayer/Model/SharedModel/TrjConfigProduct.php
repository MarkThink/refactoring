<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjConfigProduct
 */
class TrjConfigProduct
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $originalPrice;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var string
     */
    private $unitName;

    /**
     * @var string
     */
    private $pic;

    /**
     * @var integer
     */
    private $isSale;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $isSystem;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var string
     */
    private $remark;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var integer
     */
    private $canBuy;

    /**
     * @var integer
     */
    private $productType;


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
     * Set type
     *
     * @param integer $type
     * @return TrjConfigProduct
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TrjConfigProduct
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrjConfigProduct
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set originalPrice
     *
     * @param string $originalPrice
     * @return TrjConfigProduct
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;

        return $this;
    }

    /**
     * Get originalPrice
     *
     * @return string 
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrjConfigProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return TrjConfigProduct
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set unitName
     *
     * @param string $unitName
     * @return TrjConfigProduct
     */
    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * Get unitName
     *
     * @return string 
     */
    public function getUnitName()
    {
        return $this->unitName;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return TrjConfigProduct
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set isSale
     *
     * @param integer $isSale
     * @return TrjConfigProduct
     */
    public function setIsSale($isSale)
    {
        $this->isSale = $isSale;

        return $this;
    }

    /**
     * Get isSale
     *
     * @return integer 
     */
    public function getIsSale()
    {
        return $this->isSale;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjConfigProduct
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set isSystem
     *
     * @param integer $isSystem
     * @return TrjConfigProduct
     */
    public function setIsSystem($isSystem)
    {
        $this->isSystem = $isSystem;

        return $this;
    }

    /**
     * Get isSystem
     *
     * @return integer 
     */
    public function getIsSystem()
    {
        return $this->isSystem;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return TrjConfigProduct
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return TrjConfigProduct
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return TrjConfigProduct
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set canBuy
     *
     * @param integer $canBuy
     * @return TrjConfigProduct
     */
    public function setCanBuy($canBuy)
    {
        $this->canBuy = $canBuy;

        return $this;
    }

    /**
     * Get canBuy
     *
     * @return integer 
     */
    public function getCanBuy()
    {
        return $this->canBuy;
    }

    /**
     * Set productType
     *
     * @param integer $productType
     * @return TrjConfigProduct
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return integer 
     */
    public function getProductType()
    {
        return $this->productType;
    }
}
