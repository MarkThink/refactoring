<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebKeyword
 */
class TrjWebKeyword
{
    /**
     * @var integer
     */
    private $kid;

    /**
     * @var string
     */
    private $keyname;

    /**
     * @var string
     */
    private $firstPy;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $seoTitle;

    /**
     * @var string
     */
    private $seoKeywords;

    /**
     * @var string
     */
    private $seoDescription;

    /**
     * @var integer
     */
    private $infoType;

    /**
     * @var integer
     */
    private $matchNum;

    /**
     * @var integer
     */
    private $searchNum;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $isexe;

    /**
     * @var integer
     */
    private $addUid;

    /**
     * @var string
     */
    private $addUsername;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $isdel;

    /**
     * @var string
     */
    private $infoTablename;


    /**
     * Get kid
     *
     * @return integer 
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Set keyname
     *
     * @param string $keyname
     * @return TrjWebKeyword
     */
    public function setKeyname($keyname)
    {
        $this->keyname = $keyname;

        return $this;
    }

    /**
     * Get keyname
     *
     * @return string 
     */
    public function getKeyname()
    {
        return $this->keyname;
    }

    /**
     * Set firstPy
     *
     * @param string $firstPy
     * @return TrjWebKeyword
     */
    public function setFirstPy($firstPy)
    {
        $this->firstPy = $firstPy;

        return $this;
    }

    /**
     * Get firstPy
     *
     * @return string 
     */
    public function getFirstPy()
    {
        return $this->firstPy;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrjWebKeyword
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
     * Set seoTitle
     *
     * @param string $seoTitle
     * @return TrjWebKeyword
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string 
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return TrjWebKeyword
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
     * @return TrjWebKeyword
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

    /**
     * Set infoType
     *
     * @param integer $infoType
     * @return TrjWebKeyword
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;

        return $this;
    }

    /**
     * Get infoType
     *
     * @return integer 
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Set matchNum
     *
     * @param integer $matchNum
     * @return TrjWebKeyword
     */
    public function setMatchNum($matchNum)
    {
        $this->matchNum = $matchNum;

        return $this;
    }

    /**
     * Get matchNum
     *
     * @return integer 
     */
    public function getMatchNum()
    {
        return $this->matchNum;
    }

    /**
     * Set searchNum
     *
     * @param integer $searchNum
     * @return TrjWebKeyword
     */
    public function setSearchNum($searchNum)
    {
        $this->searchNum = $searchNum;

        return $this;
    }

    /**
     * Get searchNum
     *
     * @return integer 
     */
    public function getSearchNum()
    {
        return $this->searchNum;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjWebKeyword
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
     * Set isexe
     *
     * @param integer $isexe
     * @return TrjWebKeyword
     */
    public function setIsexe($isexe)
    {
        $this->isexe = $isexe;

        return $this;
    }

    /**
     * Get isexe
     *
     * @return integer 
     */
    public function getIsexe()
    {
        return $this->isexe;
    }

    /**
     * Set addUid
     *
     * @param integer $addUid
     * @return TrjWebKeyword
     */
    public function setAddUid($addUid)
    {
        $this->addUid = $addUid;

        return $this;
    }

    /**
     * Get addUid
     *
     * @return integer 
     */
    public function getAddUid()
    {
        return $this->addUid;
    }

    /**
     * Set addUsername
     *
     * @param string $addUsername
     * @return TrjWebKeyword
     */
    public function setAddUsername($addUsername)
    {
        $this->addUsername = $addUsername;

        return $this;
    }

    /**
     * Get addUsername
     *
     * @return string 
     */
    public function getAddUsername()
    {
        return $this->addUsername;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjWebKeyword
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
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjWebKeyword
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjWebKeyword
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

    /**
     * Set infoTablename
     *
     * @param string $infoTablename
     * @return TrjWebKeyword
     */
    public function setInfoTablename($infoTablename)
    {
        $this->infoTablename = $infoTablename;

        return $this;
    }

    /**
     * Get infoTablename
     *
     * @return string 
     */
    public function getInfoTablename()
    {
        return $this->infoTablename;
    }
}
