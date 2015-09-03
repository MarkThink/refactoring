<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHeadlineUsers
 */
class TrjHeadlineUsers
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
    private $selectMoney;

    /**
     * @var string
     */
    private $selectIndustry;

    /**
     * @var string
     */
    private $selectProvince;

    /**
     * @var string
     */
    private $selectText;

    /**
     * @var integer
     */
    private $addItemTime;


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
     * @return TrjHeadlineUsers
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
     * Set selectMoney
     *
     * @param string $selectMoney
     * @return TrjHeadlineUsers
     */
    public function setSelectMoney($selectMoney)
    {
        $this->selectMoney = $selectMoney;

        return $this;
    }

    /**
     * Get selectMoney
     *
     * @return string 
     */
    public function getSelectMoney()
    {
        return $this->selectMoney;
    }

    /**
     * Set selectIndustry
     *
     * @param string $selectIndustry
     * @return TrjHeadlineUsers
     */
    public function setSelectIndustry($selectIndustry)
    {
        $this->selectIndustry = $selectIndustry;

        return $this;
    }

    /**
     * Get selectIndustry
     *
     * @return string 
     */
    public function getSelectIndustry()
    {
        return $this->selectIndustry;
    }

    /**
     * Set selectProvince
     *
     * @param string $selectProvince
     * @return TrjHeadlineUsers
     */
    public function setSelectProvince($selectProvince)
    {
        $this->selectProvince = $selectProvince;

        return $this;
    }

    /**
     * Get selectProvince
     *
     * @return string 
     */
    public function getSelectProvince()
    {
        return $this->selectProvince;
    }

    /**
     * Set selectText
     *
     * @param string $selectText
     * @return TrjHeadlineUsers
     */
    public function setSelectText($selectText)
    {
        $this->selectText = $selectText;

        return $this;
    }

    /**
     * Get selectText
     *
     * @return string 
     */
    public function getSelectText()
    {
        return $this->selectText;
    }

    /**
     * Set addItemTime
     *
     * @param integer $addItemTime
     * @return TrjHeadlineUsers
     */
    public function setAddItemTime($addItemTime)
    {
        $this->addItemTime = $addItemTime;

        return $this;
    }

    /**
     * Get addItemTime
     *
     * @return integer 
     */
    public function getAddItemTime()
    {
        return $this->addItemTime;
    }
}
