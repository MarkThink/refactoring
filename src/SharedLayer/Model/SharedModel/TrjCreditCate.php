<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCreditCate
 */
class TrjCreditCate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeName;

    /**
     * @var integer
     */
    private $itemType;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $typeSort;

    /**
     * @var string
     */
    private $desc;


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
     * Set typeName
     *
     * @param string $typeName
     * @return TrjCreditCate
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string 
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjCreditCate
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return integer 
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return TrjCreditCate
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrjCreditCate
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typeSort
     *
     * @param integer $typeSort
     * @return TrjCreditCate
     */
    public function setTypeSort($typeSort)
    {
        $this->typeSort = $typeSort;

        return $this;
    }

    /**
     * Get typeSort
     *
     * @return integer 
     */
    public function getTypeSort()
    {
        return $this->typeSort;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return TrjCreditCate
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }
}
