<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTag
 */
class TrjTag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tagName;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $itemNumber;

    /**
     * @var integer
     */
    private $fundsNumber;

    /**
     * @var integer
     */
    private $articleNumber;

    /**
     * @var integer
     */
    private $sumNumber;

    /**
     * @var integer
     */
    private $times;

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
     * Set tagName
     *
     * @param string $tagName
     * @return TrjTag
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * Get tagName
     *
     * @return string 
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjTag
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjTag
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set itemNumber
     *
     * @param integer $itemNumber
     * @return TrjTag
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get itemNumber
     *
     * @return integer 
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set fundsNumber
     *
     * @param integer $fundsNumber
     * @return TrjTag
     */
    public function setFundsNumber($fundsNumber)
    {
        $this->fundsNumber = $fundsNumber;

        return $this;
    }

    /**
     * Get fundsNumber
     *
     * @return integer 
     */
    public function getFundsNumber()
    {
        return $this->fundsNumber;
    }

    /**
     * Set articleNumber
     *
     * @param integer $articleNumber
     * @return TrjTag
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * Get articleNumber
     *
     * @return integer 
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Set sumNumber
     *
     * @param integer $sumNumber
     * @return TrjTag
     */
    public function setSumNumber($sumNumber)
    {
        $this->sumNumber = $sumNumber;

        return $this;
    }

    /**
     * Get sumNumber
     *
     * @return integer 
     */
    public function getSumNumber()
    {
        return $this->sumNumber;
    }

    /**
     * Set times
     *
     * @param integer $times
     * @return TrjTag
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjTag
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
