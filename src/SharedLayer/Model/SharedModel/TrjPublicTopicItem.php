<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjPublicTopicItem
 */
class TrjPublicTopicItem
{
    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $itemIdNum;

    /**
     * @var integer
     */
    private $itemStyle;

    /**
     * @var string
     */
    private $itemValue;

    /**
     * @var integer
     */
    private $itemSort;


    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return TrjPublicTopicItem
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set itemIdNum
     *
     * @param integer $itemIdNum
     * @return TrjPublicTopicItem
     */
    public function setItemIdNum($itemIdNum)
    {
        $this->itemIdNum = $itemIdNum;

        return $this;
    }

    /**
     * Get itemIdNum
     *
     * @return integer 
     */
    public function getItemIdNum()
    {
        return $this->itemIdNum;
    }

    /**
     * Set itemStyle
     *
     * @param integer $itemStyle
     * @return TrjPublicTopicItem
     */
    public function setItemStyle($itemStyle)
    {
        $this->itemStyle = $itemStyle;

        return $this;
    }

    /**
     * Get itemStyle
     *
     * @return integer 
     */
    public function getItemStyle()
    {
        return $this->itemStyle;
    }

    /**
     * Set itemValue
     *
     * @param string $itemValue
     * @return TrjPublicTopicItem
     */
    public function setItemValue($itemValue)
    {
        $this->itemValue = $itemValue;

        return $this;
    }

    /**
     * Get itemValue
     *
     * @return string 
     */
    public function getItemValue()
    {
        return $this->itemValue;
    }

    /**
     * Set itemSort
     *
     * @param integer $itemSort
     * @return TrjPublicTopicItem
     */
    public function setItemSort($itemSort)
    {
        $this->itemSort = $itemSort;

        return $this;
    }

    /**
     * Get itemSort
     *
     * @return integer 
     */
    public function getItemSort()
    {
        return $this->itemSort;
    }
}
