<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvPage
 */
class TrjAdvPage
{
    /**
     * @var integer
     */
    private $pid;

    /**
     * @var string
     */
    private $pagename;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var integer
     */
    private $areaNum;

    /**
     * @var integer
     */
    private $placeNum;

    /**
     * @var integer
     */
    private $orders;

    /**
     * @var integer
     */
    private $addtime;


    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set pagename
     *
     * @param string $pagename
     * @return TrjAdvPage
     */
    public function setPagename($pagename)
    {
        $this->pagename = $pagename;

        return $this;
    }

    /**
     * Get pagename
     *
     * @return string 
     */
    public function getPagename()
    {
        return $this->pagename;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TrjAdvPage
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return TrjAdvPage
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set areaNum
     *
     * @param integer $areaNum
     * @return TrjAdvPage
     */
    public function setAreaNum($areaNum)
    {
        $this->areaNum = $areaNum;

        return $this;
    }

    /**
     * Get areaNum
     *
     * @return integer 
     */
    public function getAreaNum()
    {
        return $this->areaNum;
    }

    /**
     * Set placeNum
     *
     * @param integer $placeNum
     * @return TrjAdvPage
     */
    public function setPlaceNum($placeNum)
    {
        $this->placeNum = $placeNum;

        return $this;
    }

    /**
     * Get placeNum
     *
     * @return integer 
     */
    public function getPlaceNum()
    {
        return $this->placeNum;
    }

    /**
     * Set orders
     *
     * @param integer $orders
     * @return TrjAdvPage
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return integer 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjAdvPage
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}
