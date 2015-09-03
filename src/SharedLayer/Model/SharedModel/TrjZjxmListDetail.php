<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmListDetail
 */
class TrjZjxmListDetail
{
    /**
     * @var integer
     */
    private $iid;

    /**
     * @var string
     */
    private $iIntroduce;

    /**
     * @var string
     */
    private $iOtherRemark;

    /**
     * @var string
     */
    private $iKeywords;

    /**
     * @var string
     */
    private $iOverview;

    /**
     * @var string
     */
    private $iData;

    /**
     * @var string
     */
    private $iAtt;

    /**
     * @var string
     */
    private $iPic;

    /**
     * @var integer
     */
    private $searchCtime;

    /**
     * @var string
     */
    private $searchKey;


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
     * Set iIntroduce
     *
     * @param string $iIntroduce
     * @return TrjZjxmListDetail
     */
    public function setIIntroduce($iIntroduce)
    {
        $this->iIntroduce = $iIntroduce;

        return $this;
    }

    /**
     * Get iIntroduce
     *
     * @return string 
     */
    public function getIIntroduce()
    {
        return $this->iIntroduce;
    }

    /**
     * Set iOtherRemark
     *
     * @param string $iOtherRemark
     * @return TrjZjxmListDetail
     */
    public function setIOtherRemark($iOtherRemark)
    {
        $this->iOtherRemark = $iOtherRemark;

        return $this;
    }

    /**
     * Get iOtherRemark
     *
     * @return string 
     */
    public function getIOtherRemark()
    {
        return $this->iOtherRemark;
    }

    /**
     * Set iKeywords
     *
     * @param string $iKeywords
     * @return TrjZjxmListDetail
     */
    public function setIKeywords($iKeywords)
    {
        $this->iKeywords = $iKeywords;

        return $this;
    }

    /**
     * Get iKeywords
     *
     * @return string 
     */
    public function getIKeywords()
    {
        return $this->iKeywords;
    }

    /**
     * Set iOverview
     *
     * @param string $iOverview
     * @return TrjZjxmListDetail
     */
    public function setIOverview($iOverview)
    {
        $this->iOverview = $iOverview;

        return $this;
    }

    /**
     * Get iOverview
     *
     * @return string 
     */
    public function getIOverview()
    {
        return $this->iOverview;
    }

    /**
     * Set iData
     *
     * @param string $iData
     * @return TrjZjxmListDetail
     */
    public function setIData($iData)
    {
        $this->iData = $iData;

        return $this;
    }

    /**
     * Get iData
     *
     * @return string 
     */
    public function getIData()
    {
        return $this->iData;
    }

    /**
     * Set iAtt
     *
     * @param string $iAtt
     * @return TrjZjxmListDetail
     */
    public function setIAtt($iAtt)
    {
        $this->iAtt = $iAtt;

        return $this;
    }

    /**
     * Get iAtt
     *
     * @return string 
     */
    public function getIAtt()
    {
        return $this->iAtt;
    }

    /**
     * Set iPic
     *
     * @param string $iPic
     * @return TrjZjxmListDetail
     */
    public function setIPic($iPic)
    {
        $this->iPic = $iPic;

        return $this;
    }

    /**
     * Get iPic
     *
     * @return string 
     */
    public function getIPic()
    {
        return $this->iPic;
    }

    /**
     * Set searchCtime
     *
     * @param integer $searchCtime
     * @return TrjZjxmListDetail
     */
    public function setSearchCtime($searchCtime)
    {
        $this->searchCtime = $searchCtime;

        return $this;
    }

    /**
     * Get searchCtime
     *
     * @return integer 
     */
    public function getSearchCtime()
    {
        return $this->searchCtime;
    }

    /**
     * Set searchKey
     *
     * @param string $searchKey
     * @return TrjZjxmListDetail
     */
    public function setSearchKey($searchKey)
    {
        $this->searchKey = $searchKey;

        return $this;
    }

    /**
     * Get searchKey
     *
     * @return string 
     */
    public function getSearchKey()
    {
        return $this->searchKey;
    }
}
