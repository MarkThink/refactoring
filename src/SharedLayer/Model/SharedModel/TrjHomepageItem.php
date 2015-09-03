<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageItem
 */
class TrjHomepageItem
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var integer
     */
    private $cateId;


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
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjHomepageItem
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

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
     * Set cateId
     *
     * @param integer $cateId
     * @return TrjHomepageItem
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;

        return $this;
    }

    /**
     * Get cateId
     *
     * @return integer 
     */
    public function getCateId()
    {
        return $this->cateId;
    }
}
