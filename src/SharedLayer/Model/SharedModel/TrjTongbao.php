<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTongbao
 */
class TrjTongbao
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
     * @var integer
     */
    private $userLevel;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $startDate;

    /**
     * @var integer
     */
    private $stopDate;

    /**
     * @var integer
     */
    private $isTry;

    /**
     * @var string
     */
    private $prodauth;

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
     * Set userId
     *
     * @param integer $userId
     * @return TrjTongbao
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
     * Set userLevel
     *
     * @param integer $userLevel
     * @return TrjTongbao
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    /**
     * Get userLevel
     *
     * @return integer 
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrjTongbao
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
     * Set startDate
     *
     * @param integer $startDate
     * @return TrjTongbao
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return integer 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set stopDate
     *
     * @param integer $stopDate
     * @return TrjTongbao
     */
    public function setStopDate($stopDate)
    {
        $this->stopDate = $stopDate;

        return $this;
    }

    /**
     * Get stopDate
     *
     * @return integer 
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * Set isTry
     *
     * @param integer $isTry
     * @return TrjTongbao
     */
    public function setIsTry($isTry)
    {
        $this->isTry = $isTry;

        return $this;
    }

    /**
     * Get isTry
     *
     * @return integer 
     */
    public function getIsTry()
    {
        return $this->isTry;
    }

    /**
     * Set prodauth
     *
     * @param string $prodauth
     * @return TrjTongbao
     */
    public function setProdauth($prodauth)
    {
        $this->prodauth = $prodauth;

        return $this;
    }

    /**
     * Get prodauth
     *
     * @return string 
     */
    public function getProdauth()
    {
        return $this->prodauth;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjTongbao
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
