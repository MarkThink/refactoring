<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrgColumn
 */
class TrjOrgColumn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $oId;

    /**
     * @var string
     */
    private $columnTitle;

    /**
     * @var string
     */
    private $columnContent;

    /**
     * @var integer
     */
    private $columnSort;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set oId
     *
     * @param integer $oId
     * @return TrjOrgColumn
     */
    public function setOId($oId)
    {
        $this->oId = $oId;

        return $this;
    }

    /**
     * Get oId
     *
     * @return integer 
     */
    public function getOId()
    {
        return $this->oId;
    }

    /**
     * Set columnTitle
     *
     * @param string $columnTitle
     * @return TrjOrgColumn
     */
    public function setColumnTitle($columnTitle)
    {
        $this->columnTitle = $columnTitle;

        return $this;
    }

    /**
     * Get columnTitle
     *
     * @return string 
     */
    public function getColumnTitle()
    {
        return $this->columnTitle;
    }

    /**
     * Set columnContent
     *
     * @param string $columnContent
     * @return TrjOrgColumn
     */
    public function setColumnContent($columnContent)
    {
        $this->columnContent = $columnContent;

        return $this;
    }

    /**
     * Get columnContent
     *
     * @return string 
     */
    public function getColumnContent()
    {
        return $this->columnContent;
    }

    /**
     * Set columnSort
     *
     * @param integer $columnSort
     * @return TrjOrgColumn
     */
    public function setColumnSort($columnSort)
    {
        $this->columnSort = $columnSort;

        return $this;
    }

    /**
     * Get columnSort
     *
     * @return integer 
     */
    public function getColumnSort()
    {
        return $this->columnSort;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjOrgColumn
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
