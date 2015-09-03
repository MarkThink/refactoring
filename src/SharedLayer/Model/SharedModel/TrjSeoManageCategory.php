<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSeoManageCategory
 */
class TrjSeoManageCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $catName;

    /**
     * @var integer
     */
    private $category;

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
    private $pId;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set catName
     *
     * @param string $catName
     * @return TrjSeoManageCategory
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string 
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return TrjSeoManageCategory
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjSeoManageCategory
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
     * @return TrjSeoManageCategory
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
     * Set pId
     *
     * @param integer $pId
     * @return TrjSeoManageCategory
     */
    public function setPId($pId)
    {
        $this->pId = $pId;

        return $this;
    }

    /**
     * Get pId
     *
     * @return integer 
     */
    public function getPId()
    {
        return $this->pId;
    }

    /**
     * Set rankBd
     *
     * @param integer $rankBd
     * @return TrjSeoManageCategory
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
     * @return TrjSeoManageCategory
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
     * @return TrjSeoManageCategory
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
}
