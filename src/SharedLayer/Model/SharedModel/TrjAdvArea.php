<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvArea
 */
class TrjAdvArea
{
    /**
     * @var integer
     */
    private $qid;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var string
     */
    private $areaname;

    /**
     * @var string
     */
    private $areaurl;

    /**
     * @var string
     */
    private $enname;

    /**
     * @var integer
     */
    private $ennum;

    /**
     * @var integer
     */
    private $islimit;

    /**
     * @var integer
     */
    private $iswap;

    /**
     * @var integer
     */
    private $advType;

    /**
     * @var string
     */
    private $advSize;

    /**
     * @var string
     */
    private $memo;

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
    private $areaType;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var string
     */
    private $updatePoster;

    /**
     * @var integer
     */
    private $updateDatetime;


    /**
     * Get qid
     *
     * @return integer 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return TrjAdvArea
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

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
     * Set areaname
     *
     * @param string $areaname
     * @return TrjAdvArea
     */
    public function setAreaname($areaname)
    {
        $this->areaname = $areaname;

        return $this;
    }

    /**
     * Get areaname
     *
     * @return string 
     */
    public function getAreaname()
    {
        return $this->areaname;
    }

    /**
     * Set areaurl
     *
     * @param string $areaurl
     * @return TrjAdvArea
     */
    public function setAreaurl($areaurl)
    {
        $this->areaurl = $areaurl;

        return $this;
    }

    /**
     * Get areaurl
     *
     * @return string 
     */
    public function getAreaurl()
    {
        return $this->areaurl;
    }

    /**
     * Set enname
     *
     * @param string $enname
     * @return TrjAdvArea
     */
    public function setEnname($enname)
    {
        $this->enname = $enname;

        return $this;
    }

    /**
     * Get enname
     *
     * @return string 
     */
    public function getEnname()
    {
        return $this->enname;
    }

    /**
     * Set ennum
     *
     * @param integer $ennum
     * @return TrjAdvArea
     */
    public function setEnnum($ennum)
    {
        $this->ennum = $ennum;

        return $this;
    }

    /**
     * Get ennum
     *
     * @return integer 
     */
    public function getEnnum()
    {
        return $this->ennum;
    }

    /**
     * Set islimit
     *
     * @param integer $islimit
     * @return TrjAdvArea
     */
    public function setIslimit($islimit)
    {
        $this->islimit = $islimit;

        return $this;
    }

    /**
     * Get islimit
     *
     * @return integer 
     */
    public function getIslimit()
    {
        return $this->islimit;
    }

    /**
     * Set iswap
     *
     * @param integer $iswap
     * @return TrjAdvArea
     */
    public function setIswap($iswap)
    {
        $this->iswap = $iswap;

        return $this;
    }

    /**
     * Get iswap
     *
     * @return integer 
     */
    public function getIswap()
    {
        return $this->iswap;
    }

    /**
     * Set advType
     *
     * @param integer $advType
     * @return TrjAdvArea
     */
    public function setAdvType($advType)
    {
        $this->advType = $advType;

        return $this;
    }

    /**
     * Get advType
     *
     * @return integer 
     */
    public function getAdvType()
    {
        return $this->advType;
    }

    /**
     * Set advSize
     *
     * @param string $advSize
     * @return TrjAdvArea
     */
    public function setAdvSize($advSize)
    {
        $this->advSize = $advSize;

        return $this;
    }

    /**
     * Get advSize
     *
     * @return string 
     */
    public function getAdvSize()
    {
        return $this->advSize;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return TrjAdvArea
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
     * Set placeNum
     *
     * @param integer $placeNum
     * @return TrjAdvArea
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
     * @return TrjAdvArea
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
     * Set areaType
     *
     * @param integer $areaType
     * @return TrjAdvArea
     */
    public function setAreaType($areaType)
    {
        $this->areaType = $areaType;

        return $this;
    }

    /**
     * Get areaType
     *
     * @return integer 
     */
    public function getAreaType()
    {
        return $this->areaType;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjAdvArea
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

    /**
     * Set updatePoster
     *
     * @param string $updatePoster
     * @return TrjAdvArea
     */
    public function setUpdatePoster($updatePoster)
    {
        $this->updatePoster = $updatePoster;

        return $this;
    }

    /**
     * Get updatePoster
     *
     * @return string 
     */
    public function getUpdatePoster()
    {
        return $this->updatePoster;
    }

    /**
     * Set updateDatetime
     *
     * @param integer $updateDatetime
     * @return TrjAdvArea
     */
    public function setUpdateDatetime($updateDatetime)
    {
        $this->updateDatetime = $updateDatetime;

        return $this;
    }

    /**
     * Get updateDatetime
     *
     * @return integer 
     */
    public function getUpdateDatetime()
    {
        return $this->updateDatetime;
    }
}
