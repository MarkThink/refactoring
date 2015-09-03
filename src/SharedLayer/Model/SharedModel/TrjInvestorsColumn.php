<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjInvestorsColumn
 */
class TrjInvestorsColumn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $iId;

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
     * Set iId
     *
     * @param integer $iId
     * @return TrjInvestorsColumn
     */
    public function setIId($iId)
    {
        $this->iId = $iId;

        return $this;
    }

    /**
     * Get iId
     *
     * @return integer 
     */
    public function getIId()
    {
        return $this->iId;
    }

    /**
     * Set columnTitle
     *
     * @param string $columnTitle
     * @return TrjInvestorsColumn
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
     * @return TrjInvestorsColumn
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
     * @return TrjInvestorsColumn
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
     * @return TrjInvestorsColumn
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
