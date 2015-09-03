<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTagRelevance
 */
class TrjTagRelevance
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $infoId;


    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjTagRelevance
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
     * @return TrjTagRelevance
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
