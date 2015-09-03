<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZtLog
 */
class TrjZtLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ztCode;

    /**
     * @var string
     */
    private $ztTitle;

    /**
     * @var integer
     */
    private $viewUid;

    /**
     * @var integer
     */
    private $ymdh;

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
     * Set ztCode
     *
     * @param string $ztCode
     * @return TrjZtLog
     */
    public function setZtCode($ztCode)
    {
        $this->ztCode = $ztCode;

        return $this;
    }

    /**
     * Get ztCode
     *
     * @return string 
     */
    public function getZtCode()
    {
        return $this->ztCode;
    }

    /**
     * Set ztTitle
     *
     * @param string $ztTitle
     * @return TrjZtLog
     */
    public function setZtTitle($ztTitle)
    {
        $this->ztTitle = $ztTitle;

        return $this;
    }

    /**
     * Get ztTitle
     *
     * @return string 
     */
    public function getZtTitle()
    {
        return $this->ztTitle;
    }

    /**
     * Set viewUid
     *
     * @param integer $viewUid
     * @return TrjZtLog
     */
    public function setViewUid($viewUid)
    {
        $this->viewUid = $viewUid;

        return $this;
    }

    /**
     * Get viewUid
     *
     * @return integer 
     */
    public function getViewUid()
    {
        return $this->viewUid;
    }

    /**
     * Set ymdh
     *
     * @param integer $ymdh
     * @return TrjZtLog
     */
    public function setYmdh($ymdh)
    {
        $this->ymdh = $ymdh;

        return $this;
    }

    /**
     * Get ymdh
     *
     * @return integer 
     */
    public function getYmdh()
    {
        return $this->ymdh;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjZtLog
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
     * @return TrjZtLog
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
