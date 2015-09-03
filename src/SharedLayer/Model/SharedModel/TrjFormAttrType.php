<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormAttrType
 */
class TrjFormAttrType
{
    /**
     * @var integer
     */
    private $catId;

    /**
     * @var string
     */
    private $catName;

    /**
     * @var integer
     */
    private $catType;

    /**
     * @var integer
     */
    private $isMulti;

    /**
     * @var integer
     */
    private $isPackage;

    /**
     * @var integer
     */
    private $enabled;


    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set catName
     *
     * @param string $catName
     * @return TrjFormAttrType
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string 
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Set catType
     *
     * @param integer $catType
     * @return TrjFormAttrType
     */
    public function setCatType($catType)
    {
        $this->catType = $catType;

        return $this;
    }

    /**
     * Get catType
     *
     * @return integer 
     */
    public function getCatType()
    {
        return $this->catType;
    }

    /**
     * Set isMulti
     *
     * @param integer $isMulti
     * @return TrjFormAttrType
     */
    public function setIsMulti($isMulti)
    {
        $this->isMulti = $isMulti;

        return $this;
    }

    /**
     * Get isMulti
     *
     * @return integer 
     */
    public function getIsMulti()
    {
        return $this->isMulti;
    }

    /**
     * Set isPackage
     *
     * @param integer $isPackage
     * @return TrjFormAttrType
     */
    public function setIsPackage($isPackage)
    {
        $this->isPackage = $isPackage;

        return $this;
    }

    /**
     * Get isPackage
     *
     * @return integer 
     */
    public function getIsPackage()
    {
        return $this->isPackage;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return TrjFormAttrType
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
