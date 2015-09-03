<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjInnerWordsRelevance
 */
class TrjInnerWordsRelevance
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $iid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $infoId;


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
     * Set iid
     *
     * @param integer $iid
     * @return TrjInnerWordsRelevance
     */
    public function setIid($iid)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Get iid
     *
     * @return integer 
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjInnerWordsRelevance
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
     * Set infoId
     *
     * @param integer $infoId
     * @return TrjInnerWordsRelevance
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return integer 
     */
    public function getInfoId()
    {
        return $this->infoId;
    }
}
