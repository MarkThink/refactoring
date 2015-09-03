<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjRczgTopicContent
 */
class TrjRczgTopicContent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $zhuanlan;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var string
     */
    private $seoKeywords;

    /**
     * @var string
     */
    private $seoDescription;


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
     * Set content
     *
     * @param string $content
     * @return TrjRczgTopicContent
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
     * Set zhuanlan
     *
     * @param string $zhuanlan
     * @return TrjRczgTopicContent
     */
    public function setZhuanlan($zhuanlan)
    {
        $this->zhuanlan = $zhuanlan;

        return $this;
    }

    /**
     * Get zhuanlan
     *
     * @return string 
     */
    public function getZhuanlan()
    {
        return $this->zhuanlan;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjRczgTopicContent
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return TrjRczgTopicContent
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string 
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     * @return TrjRczgTopicContent
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string 
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }
}
