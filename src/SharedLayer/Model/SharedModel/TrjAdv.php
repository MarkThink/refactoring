<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdv
 */
class TrjAdv
{
    /**
     * @var integer
     */
    private $adid;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var integer
     */
    private $qid;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $advType;

    /**
     * @var string
     */
    private $advname;

    /**
     * @var integer
     */
    private $daynum;

    /**
     * @var integer
     */
    private $starttime;

    /**
     * @var integer
     */
    private $endtime;

    /**
     * @var string
     */
    private $advUrl;

    /**
     * @var integer
     */
    private $oid;

    /**
     * @var string
     */
    private $advPath;

    /**
     * @var integer
     */
    private $advYun;

    /**
     * @var string
     */
    private $advContent;

    /**
     * @var string
     */
    private $advAsk;

    /**
     * @var string
     */
    private $advMemo;

    /**
     * @var string
     */
    private $orderno;

    /**
     * @var integer
     */
    private $orderType;

    /**
     * @var integer
     */
    private $ordertime;

    /**
     * @var string
     */
    private $orderPrice;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $linkname;

    /**
     * @var string
     */
    private $linktel;

    /**
     * @var string
     */
    private $account;

    /**
     * @var integer
     */
    private $source;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $clickNum;

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
    private $isPassShen;

    /**
     * @var integer
     */
    private $fromSid;

    /**
     * @var integer
     */
    private $editShow;


    /**
     * Get adid
     *
     * @return integer 
     */
    public function getAdid()
    {
        return $this->adid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return TrjAdv
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set qid
     *
     * @param integer $qid
     * @return TrjAdv
     */
    public function setQid($qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return integer 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     * @return TrjAdv
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set advType
     *
     * @param integer $advType
     * @return TrjAdv
     */
    public function setAdvType($advType)
    {
        $this->advType = $advType;

        return $this;
    }

    /**
     * Get advType
     *
     * @return integer 
     */
    public function getAdvType()
    {
        return $this->advType;
    }

    /**
     * Set advname
     *
     * @param string $advname
     * @return TrjAdv
     */
    public function setAdvname($advname)
    {
        $this->advname = $advname;

        return $this;
    }

    /**
     * Get advname
     *
     * @return string 
     */
    public function getAdvname()
    {
        return $this->advname;
    }

    /**
     * Set daynum
     *
     * @param integer $daynum
     * @return TrjAdv
     */
    public function setDaynum($daynum)
    {
        $this->daynum = $daynum;

        return $this;
    }

    /**
     * Get daynum
     *
     * @return integer 
     */
    public function getDaynum()
    {
        return $this->daynum;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     * @return TrjAdv
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param integer $endtime
     * @return TrjAdv
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return integer 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set advUrl
     *
     * @param string $advUrl
     * @return TrjAdv
     */
    public function setAdvUrl($advUrl)
    {
        $this->advUrl = $advUrl;

        return $this;
    }

    /**
     * Get advUrl
     *
     * @return string 
     */
    public function getAdvUrl()
    {
        return $this->advUrl;
    }

    /**
     * Set oid
     *
     * @param integer $oid
     * @return TrjAdv
     */
    public function setOid($oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * Get oid
     *
     * @return integer 
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Set advPath
     *
     * @param string $advPath
     * @return TrjAdv
     */
    public function setAdvPath($advPath)
    {
        $this->advPath = $advPath;

        return $this;
    }

    /**
     * Get advPath
     *
     * @return string 
     */
    public function getAdvPath()
    {
        return $this->advPath;
    }

    /**
     * Set advYun
     *
     * @param integer $advYun
     * @return TrjAdv
     */
    public function setAdvYun($advYun)
    {
        $this->advYun = $advYun;

        return $this;
    }

    /**
     * Get advYun
     *
     * @return integer 
     */
    public function getAdvYun()
    {
        return $this->advYun;
    }

    /**
     * Set advContent
     *
     * @param string $advContent
     * @return TrjAdv
     */
    public function setAdvContent($advContent)
    {
        $this->advContent = $advContent;

        return $this;
    }

    /**
     * Get advContent
     *
     * @return string 
     */
    public function getAdvContent()
    {
        return $this->advContent;
    }

    /**
     * Set advAsk
     *
     * @param string $advAsk
     * @return TrjAdv
     */
    public function setAdvAsk($advAsk)
    {
        $this->advAsk = $advAsk;

        return $this;
    }

    /**
     * Get advAsk
     *
     * @return string 
     */
    public function getAdvAsk()
    {
        return $this->advAsk;
    }

    /**
     * Set advMemo
     *
     * @param string $advMemo
     * @return TrjAdv
     */
    public function setAdvMemo($advMemo)
    {
        $this->advMemo = $advMemo;

        return $this;
    }

    /**
     * Get advMemo
     *
     * @return string 
     */
    public function getAdvMemo()
    {
        return $this->advMemo;
    }

    /**
     * Set orderno
     *
     * @param string $orderno
     * @return TrjAdv
     */
    public function setOrderno($orderno)
    {
        $this->orderno = $orderno;

        return $this;
    }

    /**
     * Get orderno
     *
     * @return string 
     */
    public function getOrderno()
    {
        return $this->orderno;
    }

    /**
     * Set orderType
     *
     * @param integer $orderType
     * @return TrjAdv
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return integer 
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set ordertime
     *
     * @param integer $ordertime
     * @return TrjAdv
     */
    public function setOrdertime($ordertime)
    {
        $this->ordertime = $ordertime;

        return $this;
    }

    /**
     * Get ordertime
     *
     * @return integer 
     */
    public function getOrdertime()
    {
        return $this->ordertime;
    }

    /**
     * Set orderPrice
     *
     * @param string $orderPrice
     * @return TrjAdv
     */
    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    /**
     * Get orderPrice
     *
     * @return string 
     */
    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjAdv
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set linkname
     *
     * @param string $linkname
     * @return TrjAdv
     */
    public function setLinkname($linkname)
    {
        $this->linkname = $linkname;

        return $this;
    }

    /**
     * Get linkname
     *
     * @return string 
     */
    public function getLinkname()
    {
        return $this->linkname;
    }

    /**
     * Set linktel
     *
     * @param string $linktel
     * @return TrjAdv
     */
    public function setLinktel($linktel)
    {
        $this->linktel = $linktel;

        return $this;
    }

    /**
     * Get linktel
     *
     * @return string 
     */
    public function getLinktel()
    {
        return $this->linktel;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return TrjAdv
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set source
     *
     * @param integer $source
     * @return TrjAdv
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return integer 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjAdv
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
     * Set clickNum
     *
     * @param integer $clickNum
     * @return TrjAdv
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
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjAdv
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
     * @return TrjAdv
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
     * Set isPassShen
     *
     * @param integer $isPassShen
     * @return TrjAdv
     */
    public function setIsPassShen($isPassShen)
    {
        $this->isPassShen = $isPassShen;

        return $this;
    }

    /**
     * Get isPassShen
     *
     * @return integer 
     */
    public function getIsPassShen()
    {
        return $this->isPassShen;
    }

    /**
     * Set fromSid
     *
     * @param integer $fromSid
     * @return TrjAdv
     */
    public function setFromSid($fromSid)
    {
        $this->fromSid = $fromSid;

        return $this;
    }

    /**
     * Get fromSid
     *
     * @return integer 
     */
    public function getFromSid()
    {
        return $this->fromSid;
    }

    /**
     * Set editShow
     *
     * @param integer $editShow
     * @return TrjAdv
     */
    public function setEditShow($editShow)
    {
        $this->editShow = $editShow;

        return $this;
    }

    /**
     * Get editShow
     *
     * @return integer 
     */
    public function getEditShow()
    {
        return $this->editShow;
    }
}
