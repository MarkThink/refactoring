<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTongjiHost
 */
class TrjTongjiHost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $homepageId;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var string
     */
    private $page;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $agent;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $stayTime;

    /**
     * @var integer
     */
    private $isZjxm;

    /**
     * @var integer
     */
    private $flag;


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
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjTongjiHost
     */
    public function setHomepageId($homepageId)
    {
        $this->homepageId = $homepageId;

        return $this;
    }

    /**
     * Get homepageId
     *
     * @return integer 
     */
    public function getHomepageId()
    {
        return $this->homepageId;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return TrjTongjiHost
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return TrjTongjiHost
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return TrjTongjiHost
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set agent
     *
     * @param string $agent
     * @return TrjTongjiHost
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return string 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set ip
     *
     * @param integer $ip
     * @return TrjTongjiHost
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
     * Set stayTime
     *
     * @param integer $stayTime
     * @return TrjTongjiHost
     */
    public function setStayTime($stayTime)
    {
        $this->stayTime = $stayTime;

        return $this;
    }

    /**
     * Get stayTime
     *
     * @return integer 
     */
    public function getStayTime()
    {
        return $this->stayTime;
    }

    /**
     * Set isZjxm
     *
     * @param integer $isZjxm
     * @return TrjTongjiHost
     */
    public function setIsZjxm($isZjxm)
    {
        $this->isZjxm = $isZjxm;

        return $this;
    }

    /**
     * Get isZjxm
     *
     * @return integer 
     */
    public function getIsZjxm()
    {
        return $this->isZjxm;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TrjTongjiHost
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }
}
