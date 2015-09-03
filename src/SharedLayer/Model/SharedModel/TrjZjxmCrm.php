<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmCrm
 */
class TrjZjxmCrm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var string
     */
    private $mobile;


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
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjZjxmCrm
     */
    public function setZjxmId($zjxmId)
    {
        $this->zjxmId = $zjxmId;

        return $this;
    }

    /**
     * Get zjxmId
     *
     * @return integer 
     */
    public function getZjxmId()
    {
        return $this->zjxmId;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjZjxmCrm
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
