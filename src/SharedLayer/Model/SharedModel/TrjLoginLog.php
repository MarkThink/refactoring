<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjLoginLog
 */
class TrjLoginLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $ip;

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
     * Set ip
     *
     * @param integer $ip
     * @return TrjLoginLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjLoginLog
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
