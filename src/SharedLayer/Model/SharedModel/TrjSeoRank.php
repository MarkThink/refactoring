<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSeoRank
 */
class TrjSeoRank
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $rankBd;

    /**
     * @var integer
     */
    private $rank360;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var string
     */
    private $link;

    /**
     * @var integer
     */
    private $attr;

    /**
     * @var integer
     */
    private $index;

    /**
     * @var integer
     */
    private $creator;

    /**
     * @var string
     */
    private $trendBd;

    /**
     * @var string
     */
    private $trend360;


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
     * Set rankBd
     *
     * @param integer $rankBd
     * @return TrjSeoRank
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
     * @return TrjSeoRank
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
     * Set keyword
     *
     * @param string $keyword
     * @return TrjSeoRank
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return TrjSeoRank
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
     * Set attr
     *
     * @param integer $attr
     * @return TrjSeoRank
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;

        return $this;
    }

    /**
     * Get attr
     *
     * @return integer 
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Set index
     *
     * @param integer $index
     * @return TrjSeoRank
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
     * Set creator
     *
     * @param integer $creator
     * @return TrjSeoRank
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
     * Set trendBd
     *
     * @param string $trendBd
     * @return TrjSeoRank
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
     * @return TrjSeoRank
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
}
