<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityHeadlineWechat
 */
class TrjActivityHeadlineWechat
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
    private $addTime;

    /**
     * @var string
     */
    private $itemText;


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
     * @return TrjActivityHeadlineWechat
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
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjActivityHeadlineWechat
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set itemText
     *
     * @param string $itemText
     * @return TrjActivityHeadlineWechat
     */
    public function setItemText($itemText)
    {
        $this->itemText = $itemText;

        return $this;
    }

    /**
     * Get itemText
     *
     * @return string 
     */
    public function getItemText()
    {
        return $this->itemText;
    }
}
