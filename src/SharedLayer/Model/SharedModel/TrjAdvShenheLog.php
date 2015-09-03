<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdvShenheLog
 */
class TrjAdvShenheLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $sid;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var integer
     */
    private $shenheType;

    /**
     * @var integer
     */
    private $shenheUid;

    /**
     * @var integer
     */
    private $shenheDate;

    /**
     * @var string
     */
    private $content;


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
     * Set sid
     *
     * @param integer $sid
     * @return TrjAdvShenheLog
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjAdvShenheLog
     */
    public function setShenhe($shenhe)
    {
        $this->shenhe = $shenhe;

        return $this;
    }

    /**
     * Get shenhe
     *
     * @return integer 
     */
    public function getShenhe()
    {
        return $this->shenhe;
    }

    /**
     * Set shenheType
     *
     * @param integer $shenheType
     * @return TrjAdvShenheLog
     */
    public function setShenheType($shenheType)
    {
        $this->shenheType = $shenheType;

        return $this;
    }

    /**
     * Get shenheType
     *
     * @return integer 
     */
    public function getShenheType()
    {
        return $this->shenheType;
    }

    /**
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjAdvShenheLog
     */
    public function setShenheUid($shenheUid)
    {
        $this->shenheUid = $shenheUid;

        return $this;
    }

    /**
     * Get shenheUid
     *
     * @return integer 
     */
    public function getShenheUid()
    {
        return $this->shenheUid;
    }

    /**
     * Set shenheDate
     *
     * @param integer $shenheDate
     * @return TrjAdvShenheLog
     */
    public function setShenheDate($shenheDate)
    {
        $this->shenheDate = $shenheDate;

        return $this;
    }

    /**
     * Get shenheDate
     *
     * @return integer 
     */
    public function getShenheDate()
    {
        return $this->shenheDate;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjAdvShenheLog
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
