<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmLog
 */
class TrjZjxmLog
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
     * @var integer
     */
    private $catPid;

    /**
     * @var integer
     */
    private $ctime;


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
     * @return TrjZjxmLog
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
     * Set catPid
     *
     * @param integer $catPid
     * @return TrjZjxmLog
     */
    public function setCatPid($catPid)
    {
        $this->catPid = $catPid;

        return $this;
    }

    /**
     * Get catPid
     *
     * @return integer 
     */
    public function getCatPid()
    {
        return $this->catPid;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjZjxmLog
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
