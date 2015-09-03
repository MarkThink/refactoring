<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageModuel
 */
class TrjHomepageModuel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $moduelId;

    /**
     * @var string
     */
    private $moduelName;

    /**
     * @var string
     */
    private $moduelFlag;

    /**
     * @var string
     */
    private $moduelType;

    /**
     * @var string
     */
    private $moduelContent;

    /**
     * @var integer
     */
    private $userId;


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
     * Set moduelId
     *
     * @param integer $moduelId
     * @return TrjHomepageModuel
     */
    public function setModuelId($moduelId)
    {
        $this->moduelId = $moduelId;

        return $this;
    }

    /**
     * Get moduelId
     *
     * @return integer 
     */
    public function getModuelId()
    {
        return $this->moduelId;
    }

    /**
     * Set moduelName
     *
     * @param string $moduelName
     * @return TrjHomepageModuel
     */
    public function setModuelName($moduelName)
    {
        $this->moduelName = $moduelName;

        return $this;
    }

    /**
     * Get moduelName
     *
     * @return string 
     */
    public function getModuelName()
    {
        return $this->moduelName;
    }

    /**
     * Set moduelFlag
     *
     * @param string $moduelFlag
     * @return TrjHomepageModuel
     */
    public function setModuelFlag($moduelFlag)
    {
        $this->moduelFlag = $moduelFlag;

        return $this;
    }

    /**
     * Get moduelFlag
     *
     * @return string 
     */
    public function getModuelFlag()
    {
        return $this->moduelFlag;
    }

    /**
     * Set moduelType
     *
     * @param string $moduelType
     * @return TrjHomepageModuel
     */
    public function setModuelType($moduelType)
    {
        $this->moduelType = $moduelType;

        return $this;
    }

    /**
     * Get moduelType
     *
     * @return string 
     */
    public function getModuelType()
    {
        return $this->moduelType;
    }

    /**
     * Set moduelContent
     *
     * @param string $moduelContent
     * @return TrjHomepageModuel
     */
    public function setModuelContent($moduelContent)
    {
        $this->moduelContent = $moduelContent;

        return $this;
    }

    /**
     * Get moduelContent
     *
     * @return string 
     */
    public function getModuelContent()
    {
        return $this->moduelContent;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepageModuel
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
}
