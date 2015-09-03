<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCreditConfig
 */
class TrjCreditConfig
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var integer
     */
    private $itemType;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $typeName;

    /**
     * @var string
     */
    private $typeContent;

    /**
     * @var integer
     */
    private $typeCat;

    /**
     * @var integer
     */
    private $typeScore;

    /**
     * @var integer
     */
    private $itemScore;

    /**
     * @var integer
     */
    private $typeSort;

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
     * Set userType
     *
     * @param integer $userType
     * @return TrjCreditConfig
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
     * Set itemType
     *
     * @param integer $itemType
     * @return TrjCreditConfig
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
     * Set type
     *
     * @param string $type
     * @return TrjCreditConfig
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
     * Set typeName
     *
     * @param string $typeName
     * @return TrjCreditConfig
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
     * Set typeContent
     *
     * @param string $typeContent
     * @return TrjCreditConfig
     */
    public function setTypeContent($typeContent)
    {
        $this->typeContent = $typeContent;

        return $this;
    }

    /**
     * Get typeContent
     *
     * @return string 
     */
    public function getTypeContent()
    {
        return $this->typeContent;
    }

    /**
     * Set typeCat
     *
     * @param integer $typeCat
     * @return TrjCreditConfig
     */
    public function setTypeCat($typeCat)
    {
        $this->typeCat = $typeCat;

        return $this;
    }

    /**
     * Get typeCat
     *
     * @return integer 
     */
    public function getTypeCat()
    {
        return $this->typeCat;
    }

    /**
     * Set typeScore
     *
     * @param integer $typeScore
     * @return TrjCreditConfig
     */
    public function setTypeScore($typeScore)
    {
        $this->typeScore = $typeScore;

        return $this;
    }

    /**
     * Get typeScore
     *
     * @return integer 
     */
    public function getTypeScore()
    {
        return $this->typeScore;
    }

    /**
     * Set itemScore
     *
     * @param integer $itemScore
     * @return TrjCreditConfig
     */
    public function setItemScore($itemScore)
    {
        $this->itemScore = $itemScore;

        return $this;
    }

    /**
     * Get itemScore
     *
     * @return integer 
     */
    public function getItemScore()
    {
        return $this->itemScore;
    }

    /**
     * Set typeSort
     *
     * @param integer $typeSort
     * @return TrjCreditConfig
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
     * Set status
     *
     * @param integer $status
     * @return TrjCreditConfig
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
