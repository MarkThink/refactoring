<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrgDetail
 */
class TrjOrgDetail
{
    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $contentA;

    /**
     * @var string
     */
    private $contentB;

    /**
     * @var string
     */
    private $contentC;

    /**
     * @var string
     */
    private $contentD;

    /**
     * @var string
     */
    private $contentE;

    /**
     * @var string
     */
    private $contentF;

    /**
     * @var string
     */
    private $contact;


    /**
     * Get orgId
     *
     * @return integer 
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjOrgDetail
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
     * Set keywords
     *
     * @param string $keywords
     * @return TrjOrgDetail
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set contentA
     *
     * @param string $contentA
     * @return TrjOrgDetail
     */
    public function setContentA($contentA)
    {
        $this->contentA = $contentA;

        return $this;
    }

    /**
     * Get contentA
     *
     * @return string 
     */
    public function getContentA()
    {
        return $this->contentA;
    }

    /**
     * Set contentB
     *
     * @param string $contentB
     * @return TrjOrgDetail
     */
    public function setContentB($contentB)
    {
        $this->contentB = $contentB;

        return $this;
    }

    /**
     * Get contentB
     *
     * @return string 
     */
    public function getContentB()
    {
        return $this->contentB;
    }

    /**
     * Set contentC
     *
     * @param string $contentC
     * @return TrjOrgDetail
     */
    public function setContentC($contentC)
    {
        $this->contentC = $contentC;

        return $this;
    }

    /**
     * Get contentC
     *
     * @return string 
     */
    public function getContentC()
    {
        return $this->contentC;
    }

    /**
     * Set contentD
     *
     * @param string $contentD
     * @return TrjOrgDetail
     */
    public function setContentD($contentD)
    {
        $this->contentD = $contentD;

        return $this;
    }

    /**
     * Get contentD
     *
     * @return string 
     */
    public function getContentD()
    {
        return $this->contentD;
    }

    /**
     * Set contentE
     *
     * @param string $contentE
     * @return TrjOrgDetail
     */
    public function setContentE($contentE)
    {
        $this->contentE = $contentE;

        return $this;
    }

    /**
     * Get contentE
     *
     * @return string 
     */
    public function getContentE()
    {
        return $this->contentE;
    }

    /**
     * Set contentF
     *
     * @param string $contentF
     * @return TrjOrgDetail
     */
    public function setContentF($contentF)
    {
        $this->contentF = $contentF;

        return $this;
    }

    /**
     * Get contentF
     *
     * @return string 
     */
    public function getContentF()
    {
        return $this->contentF;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TrjOrgDetail
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
