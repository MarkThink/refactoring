<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormAttr
 */
class TrjFormAttr
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var string
     */
    private $word;

    /**
     * @var integer
     */
    private $catId;

    /**
     * @var integer
     */
    private $enabled;

    /**
     * @var integer
     */
    private $readonly;

    /**
     * @var integer
     */
    private $childNum;


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
     * Set pid
     *
     * @param integer $pid
     * @return TrjFormAttr
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
     * Set name
     *
     * @param string $name
     * @return TrjFormAttr
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjFormAttr
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set word
     *
     * @param string $word
     * @return TrjFormAttr
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return TrjFormAttr
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
     * Set enabled
     *
     * @param integer $enabled
     * @return TrjFormAttr
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set readonly
     *
     * @param integer $readonly
     * @return TrjFormAttr
     */
    public function setReadonly($readonly)
    {
        $this->readonly = $readonly;

        return $this;
    }

    /**
     * Get readonly
     *
     * @return integer 
     */
    public function getReadonly()
    {
        return $this->readonly;
    }

    /**
     * Set childNum
     *
     * @param integer $childNum
     * @return TrjFormAttr
     */
    public function setChildNum($childNum)
    {
        $this->childNum = $childNum;

        return $this;
    }

    /**
     * Get childNum
     *
     * @return integer 
     */
    public function getChildNum()
    {
        return $this->childNum;
    }
}
