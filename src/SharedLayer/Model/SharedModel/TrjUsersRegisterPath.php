<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersRegisterPath
 */
class TrjUsersRegisterPath
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $httpHref;

    /**
     * @var string
     */
    private $referer;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $trackid;

    /**
     * @var integer
     */
    private $isVip;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var integer
     */
    private $crmRepeat;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var string
     */
    private $ipAddr;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $seoCat;

    /**
     * @var integer
     */
    private $isFee;

    /**
     * @var integer
     */
    private $tjFlag;


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
     * Set httpHref
     *
     * @param string $httpHref
     * @return TrjUsersRegisterPath
     */
    public function setHttpHref($httpHref)
    {
        $this->httpHref = $httpHref;

        return $this;
    }

    /**
     * Get httpHref
     *
     * @return string 
     */
    public function getHttpHref()
    {
        return $this->httpHref;
    }

    /**
     * Set referer
     *
     * @param string $referer
     * @return TrjUsersRegisterPath
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string 
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set channel
     *
     * @param string $channel
     * @return TrjUsersRegisterPath
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string 
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set trackid
     *
     * @param string $trackid
     * @return TrjUsersRegisterPath
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return string 
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * Set isVip
     *
     * @param integer $isVip
     * @return TrjUsersRegisterPath
     */
    public function setIsVip($isVip)
    {
        $this->isVip = $isVip;

        return $this;
    }

    /**
     * Get isVip
     *
     * @return integer 
     */
    public function getIsVip()
    {
        return $this->isVip;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjUsersRegisterPath
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjUsersRegisterPath
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjUsersRegisterPath
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set crmRepeat
     *
     * @param integer $crmRepeat
     * @return TrjUsersRegisterPath
     */
    public function setCrmRepeat($crmRepeat)
    {
        $this->crmRepeat = $crmRepeat;

        return $this;
    }

    /**
     * Get crmRepeat
     *
     * @return integer 
     */
    public function getCrmRepeat()
    {
        return $this->crmRepeat;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjUsersRegisterPath
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjUsersRegisterPath
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ipAddr
     *
     * @param string $ipAddr
     * @return TrjUsersRegisterPath
     */
    public function setIpAddr($ipAddr)
    {
        $this->ipAddr = $ipAddr;

        return $this;
    }

    /**
     * Get ipAddr
     *
     * @return string 
     */
    public function getIpAddr()
    {
        return $this->ipAddr;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjUsersRegisterPath
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set seoCat
     *
     * @param integer $seoCat
     * @return TrjUsersRegisterPath
     */
    public function setSeoCat($seoCat)
    {
        $this->seoCat = $seoCat;

        return $this;
    }

    /**
     * Get seoCat
     *
     * @return integer 
     */
    public function getSeoCat()
    {
        return $this->seoCat;
    }

    /**
     * Set isFee
     *
     * @param integer $isFee
     * @return TrjUsersRegisterPath
     */
    public function setIsFee($isFee)
    {
        $this->isFee = $isFee;

        return $this;
    }

    /**
     * Get isFee
     *
     * @return integer 
     */
    public function getIsFee()
    {
        return $this->isFee;
    }

    /**
     * Set tjFlag
     *
     * @param integer $tjFlag
     * @return TrjUsersRegisterPath
     */
    public function setTjFlag($tjFlag)
    {
        $this->tjFlag = $tjFlag;

        return $this;
    }

    /**
     * Get tjFlag
     *
     * @return integer 
     */
    public function getTjFlag()
    {
        return $this->tjFlag;
    }
}
