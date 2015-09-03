<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjNewsContent
 */
class TrjNewsContent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $newsFile;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $seoContent;

    /**
     * @var integer
     */
    private $seoUpdated;

    /**
     * @var integer
     */
    private $shenReasonRid;

    /**
     * @var string
     */
    private $shenReason;

    /**
     * @var integer
     */
    private $delReasonRid;

    /**
     * @var string
     */
    private $delReason;


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
     * Set newsFile
     *
     * @param string $newsFile
     * @return TrjNewsContent
     */
    public function setNewsFile($newsFile)
    {
        $this->newsFile = $newsFile;

        return $this;
    }

    /**
     * Get newsFile
     *
     * @return string 
     */
    public function getNewsFile()
    {
        return $this->newsFile;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjNewsContent
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

    /**
     * Set seoContent
     *
     * @param string $seoContent
     * @return TrjNewsContent
     */
    public function setSeoContent($seoContent)
    {
        $this->seoContent = $seoContent;

        return $this;
    }

    /**
     * Get seoContent
     *
     * @return string 
     */
    public function getSeoContent()
    {
        return $this->seoContent;
    }

    /**
     * Set seoUpdated
     *
     * @param integer $seoUpdated
     * @return TrjNewsContent
     */
    public function setSeoUpdated($seoUpdated)
    {
        $this->seoUpdated = $seoUpdated;

        return $this;
    }

    /**
     * Get seoUpdated
     *
     * @return integer 
     */
    public function getSeoUpdated()
    {
        return $this->seoUpdated;
    }

    /**
     * Set shenReasonRid
     *
     * @param integer $shenReasonRid
     * @return TrjNewsContent
     */
    public function setShenReasonRid($shenReasonRid)
    {
        $this->shenReasonRid = $shenReasonRid;

        return $this;
    }

    /**
     * Get shenReasonRid
     *
     * @return integer 
     */
    public function getShenReasonRid()
    {
        return $this->shenReasonRid;
    }

    /**
     * Set shenReason
     *
     * @param string $shenReason
     * @return TrjNewsContent
     */
    public function setShenReason($shenReason)
    {
        $this->shenReason = $shenReason;

        return $this;
    }

    /**
     * Get shenReason
     *
     * @return string 
     */
    public function getShenReason()
    {
        return $this->shenReason;
    }

    /**
     * Set delReasonRid
     *
     * @param integer $delReasonRid
     * @return TrjNewsContent
     */
    public function setDelReasonRid($delReasonRid)
    {
        $this->delReasonRid = $delReasonRid;

        return $this;
    }

    /**
     * Get delReasonRid
     *
     * @return integer 
     */
    public function getDelReasonRid()
    {
        return $this->delReasonRid;
    }

    /**
     * Set delReason
     *
     * @param string $delReason
     * @return TrjNewsContent
     */
    public function setDelReason($delReason)
    {
        $this->delReason = $delReason;

        return $this;
    }

    /**
     * Get delReason
     *
     * @return string 
     */
    public function getDelReason()
    {
        return $this->delReason;
    }
}
