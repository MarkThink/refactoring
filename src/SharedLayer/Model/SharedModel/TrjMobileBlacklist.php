<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMobileBlacklist
 */
class TrjMobileBlacklist
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $type;


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
     * Set mobile
     *
     * @param string $mobile
     * @return TrjMobileBlacklist
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

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjMobileBlacklist
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

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjMobileBlacklist
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
}
