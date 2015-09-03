<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSeoManage
 */
class TrjSeoManage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyName;

    /**
     * @var integer
     */
    private $catId;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var integer
     */
    private $isDelete;

    /**
     * @var integer
     */
    private $rankBd;

    /**
     * @var integer
     */
    private $rank360;

    /**
     * @var integer
     */
    private $rankIndex;

    /**
     * @var string
     */
    private $link;

    /**
     * @var integer
     */
    private $index;

    /**
     * @var string
     */
    private $trendBd;

    /**
     * @var string
     */
    private $trend360;

    /**
     * @var integer
     */
    private $creator;

    /**
     * @var integer
     */
    private $recordBd;

    /**
     * @var integer
     */
    private $record360;


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
     * Set keyName
     *
     * @param string $keyName
     * @return TrjSeoManage
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;

        return $this;
    }

    /**
     * Get keyName
     *
     * @return string 
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return TrjSeoManage
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjSeoManage
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

    /**
     * Set isDelete
     *
     * @param integer $isDelete
     * @return TrjSeoManage
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return integer 
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }

    /**
     * Set rankBd
     *
     * @param integer $rankBd
     * @return TrjSeoManage
     */
    public function setRankBd($rankBd)
    {
        $this->rankBd = $rankBd;

        return $this;
    }

    /**
     * Get rankBd
     *
     * @return integer 
     */
    public function getRankBd()
    {
        return $this->rankBd;
    }

    /**
     * Set rank360
     *
     * @param integer $rank360
     * @return TrjSeoManage
     */
    public function setRank360($rank360)
    {
        $this->rank360 = $rank360;

        return $this;
    }

    /**
     * Get rank360
     *
     * @return integer 
     */
    public function getRank360()
    {
        return $this->rank360;
    }

    /**
     * Set rankIndex
     *
     * @param integer $rankIndex
     * @return TrjSeoManage
     */
    public function setRankIndex($rankIndex)
    {
        $this->rankIndex = $rankIndex;

        return $this;
    }

    /**
     * Get rankIndex
     *
     * @return integer 
     */
    public function getRankIndex()
    {
        return $this->rankIndex;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return TrjSeoManage
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set index
     *
     * @param integer $index
     * @return TrjSeoManage
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * @return integer 
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set trendBd
     *
     * @param string $trendBd
     * @return TrjSeoManage
     */
    public function setTrendBd($trendBd)
    {
        $this->trendBd = $trendBd;

        return $this;
    }

    /**
     * Get trendBd
     *
     * @return string 
     */
    public function getTrendBd()
    {
        return $this->trendBd;
    }

    /**
     * Set trend360
     *
     * @param string $trend360
     * @return TrjSeoManage
     */
    public function setTrend360($trend360)
    {
        $this->trend360 = $trend360;

        return $this;
    }

    /**
     * Get trend360
     *
     * @return string 
     */
    public function getTrend360()
    {
        return $this->trend360;
    }

    /**
     * Set creator
     *
     * @param integer $creator
     * @return TrjSeoManage
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return integer 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set recordBd
     *
     * @param integer $recordBd
     * @return TrjSeoManage
     */
    public function setRecordBd($recordBd)
    {
        $this->recordBd = $recordBd;

        return $this;
    }

    /**
     * Get recordBd
     *
     * @return integer 
     */
    public function getRecordBd()
    {
        return $this->recordBd;
    }

    /**
     * Set record360
     *
     * @param integer $record360
     * @return TrjSeoManage
     */
    public function setRecord360($record360)
    {
        $this->record360 = $record360;

        return $this;
    }

    /**
     * Get record360
     *
     * @return integer 
     */
    public function getRecord360()
    {
        return $this->record360;
    }
}
