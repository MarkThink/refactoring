<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdPosition
 */
class TrjAdPosition
{
    /**
     * @var integer
     */
    private $positionId;

    /**
     * @var string
     */
    private $positionName;

    /**
     * @var integer
     */
    private $adWidth;

    /**
     * @var integer
     */
    private $adHeight;

    /**
     * @var string
     */
    private $positionDesc;

    /**
     * @var string
     */
    private $positionStyle;


    /**
     * Get positionId
     *
     * @return integer 
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * Set positionName
     *
     * @param string $positionName
     * @return TrjAdPosition
     */
    public function setPositionName($positionName)
    {
        $this->positionName = $positionName;

        return $this;
    }

    /**
     * Get positionName
     *
     * @return string 
     */
    public function getPositionName()
    {
        return $this->positionName;
    }

    /**
     * Set adWidth
     *
     * @param integer $adWidth
     * @return TrjAdPosition
     */
    public function setAdWidth($adWidth)
    {
        $this->adWidth = $adWidth;

        return $this;
    }

    /**
     * Get adWidth
     *
     * @return integer 
     */
    public function getAdWidth()
    {
        return $this->adWidth;
    }

    /**
     * Set adHeight
     *
     * @param integer $adHeight
     * @return TrjAdPosition
     */
    public function setAdHeight($adHeight)
    {
        $this->adHeight = $adHeight;

        return $this;
    }

    /**
     * Get adHeight
     *
     * @return integer 
     */
    public function getAdHeight()
    {
        return $this->adHeight;
    }

    /**
     * Set positionDesc
     *
     * @param string $positionDesc
     * @return TrjAdPosition
     */
    public function setPositionDesc($positionDesc)
    {
        $this->positionDesc = $positionDesc;

        return $this;
    }

    /**
     * Get positionDesc
     *
     * @return string 
     */
    public function getPositionDesc()
    {
        return $this->positionDesc;
    }

    /**
     * Set positionStyle
     *
     * @param string $positionStyle
     * @return TrjAdPosition
     */
    public function setPositionStyle($positionStyle)
    {
        $this->positionStyle = $positionStyle;

        return $this;
    }

    /**
     * Get positionStyle
     *
     * @return string 
     */
    public function getPositionStyle()
    {
        return $this->positionStyle;
    }
}
