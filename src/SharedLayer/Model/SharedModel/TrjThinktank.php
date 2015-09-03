<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjThinktank
 */
class TrjThinktank
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var integer
     */
    private $cateId;

    /**
     * @var integer
     */
    private $cateId2;

    /**
     * @var integer
     */
    private $cateId3;

    /**
     * @var string
     */
    private $att;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $collectNum;

    /**
     * @var integer
     */
    private $commentNum;

    /**
     * @var integer
     */
    private $clickNum;

    /**
     * @var integer
     */
    private $downNum;

    /**
     * @var string
     */
    private $score;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var integer
     */
    private $trjCreateId;

    /**
     * @var string
     */
    private $trjCreateName;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $ipAddress;


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
     * Set title
     *
     * @param string $title
     * @return TrjThinktank
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return TrjThinktank
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return TrjThinktank
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set cateId
     *
     * @param integer $cateId
     * @return TrjThinktank
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;

        return $this;
    }

    /**
     * Get cateId
     *
     * @return integer 
     */
    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * Set cateId2
     *
     * @param integer $cateId2
     * @return TrjThinktank
     */
    public function setCateId2($cateId2)
    {
        $this->cateId2 = $cateId2;

        return $this;
    }

    /**
     * Get cateId2
     *
     * @return integer 
     */
    public function getCateId2()
    {
        return $this->cateId2;
    }

    /**
     * Set cateId3
     *
     * @param integer $cateId3
     * @return TrjThinktank
     */
    public function setCateId3($cateId3)
    {
        $this->cateId3 = $cateId3;

        return $this;
    }

    /**
     * Get cateId3
     *
     * @return integer 
     */
    public function getCateId3()
    {
        return $this->cateId3;
    }

    /**
     * Set att
     *
     * @param string $att
     * @return TrjThinktank
     */
    public function setAtt($att)
    {
        $this->att = $att;

        return $this;
    }

    /**
     * Get att
     *
     * @return string 
     */
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjThinktank
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
     * Set collectNum
     *
     * @param integer $collectNum
     * @return TrjThinktank
     */
    public function setCollectNum($collectNum)
    {
        $this->collectNum = $collectNum;

        return $this;
    }

    /**
     * Get collectNum
     *
     * @return integer 
     */
    public function getCollectNum()
    {
        return $this->collectNum;
    }

    /**
     * Set commentNum
     *
     * @param integer $commentNum
     * @return TrjThinktank
     */
    public function setCommentNum($commentNum)
    {
        $this->commentNum = $commentNum;

        return $this;
    }

    /**
     * Get commentNum
     *
     * @return integer 
     */
    public function getCommentNum()
    {
        return $this->commentNum;
    }

    /**
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjThinktank
     */
    public function setClickNum($clickNum)
    {
        $this->clickNum = $clickNum;

        return $this;
    }

    /**
     * Get clickNum
     *
     * @return integer 
     */
    public function getClickNum()
    {
        return $this->clickNum;
    }

    /**
     * Set downNum
     *
     * @param integer $downNum
     * @return TrjThinktank
     */
    public function setDownNum($downNum)
    {
        $this->downNum = $downNum;

        return $this;
    }

    /**
     * Get downNum
     *
     * @return integer 
     */
    public function getDownNum()
    {
        return $this->downNum;
    }

    /**
     * Set score
     *
     * @param string $score
     * @return TrjThinktank
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjThinktank
     */
    public function setCreateId($createId)
    {
        $this->createId = $createId;

        return $this;
    }

    /**
     * Get createId
     *
     * @return integer 
     */
    public function getCreateId()
    {
        return $this->createId;
    }

    /**
     * Set createName
     *
     * @param string $createName
     * @return TrjThinktank
     */
    public function setCreateName($createName)
    {
        $this->createName = $createName;

        return $this;
    }

    /**
     * Get createName
     *
     * @return string 
     */
    public function getCreateName()
    {
        return $this->createName;
    }

    /**
     * Set trjCreateId
     *
     * @param integer $trjCreateId
     * @return TrjThinktank
     */
    public function setTrjCreateId($trjCreateId)
    {
        $this->trjCreateId = $trjCreateId;

        return $this;
    }

    /**
     * Get trjCreateId
     *
     * @return integer 
     */
    public function getTrjCreateId()
    {
        return $this->trjCreateId;
    }

    /**
     * Set trjCreateName
     *
     * @param string $trjCreateName
     * @return TrjThinktank
     */
    public function setTrjCreateName($trjCreateName)
    {
        $this->trjCreateName = $trjCreateName;

        return $this;
    }

    /**
     * Get trjCreateName
     *
     * @return string 
     */
    public function getTrjCreateName()
    {
        return $this->trjCreateName;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjThinktank
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return TrjThinktank
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
}
