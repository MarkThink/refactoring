<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersCertInfo
 */
class TrjUsersCertInfo
{
    /**
     * @var integer
     */
    private $certid;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $certType;

    /**
     * @var string
     */
    private $certCode;

    /**
     * @var string
     */
    private $certContent;

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
    private $startDatetime;

    /**
     * @var integer
     */
    private $endDatetime;

    /**
     * @var integer
     */
    private $isShenhe;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var string
     */
    private $shenheAdmin;

    /**
     * @var integer
     */
    private $isLock;

    /**
     * @var integer
     */
    private $isInvalid;

    /**
     * @var integer
     */
    private $isAll;


    /**
     * Get certid
     *
     * @return integer 
     */
    public function getCertid()
    {
        return $this->certid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return TrjUsersCertInfo
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjUsersCertInfo
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
     * Set certType
     *
     * @param integer $certType
     * @return TrjUsersCertInfo
     */
    public function setCertType($certType)
    {
        $this->certType = $certType;

        return $this;
    }

    /**
     * Get certType
     *
     * @return integer 
     */
    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * Set certCode
     *
     * @param string $certCode
     * @return TrjUsersCertInfo
     */
    public function setCertCode($certCode)
    {
        $this->certCode = $certCode;

        return $this;
    }

    /**
     * Get certCode
     *
     * @return string 
     */
    public function getCertCode()
    {
        return $this->certCode;
    }

    /**
     * Set certContent
     *
     * @param string $certContent
     * @return TrjUsersCertInfo
     */
    public function setCertContent($certContent)
    {
        $this->certContent = $certContent;

        return $this;
    }

    /**
     * Get certContent
     *
     * @return string 
     */
    public function getCertContent()
    {
        return $this->certContent;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjUsersCertInfo
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
     * @return TrjUsersCertInfo
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
     * Set startDatetime
     *
     * @param integer $startDatetime
     * @return TrjUsersCertInfo
     */
    public function setStartDatetime($startDatetime)
    {
        $this->startDatetime = $startDatetime;

        return $this;
    }

    /**
     * Get startDatetime
     *
     * @return integer 
     */
    public function getStartDatetime()
    {
        return $this->startDatetime;
    }

    /**
     * Set endDatetime
     *
     * @param integer $endDatetime
     * @return TrjUsersCertInfo
     */
    public function setEndDatetime($endDatetime)
    {
        $this->endDatetime = $endDatetime;

        return $this;
    }

    /**
     * Get endDatetime
     *
     * @return integer 
     */
    public function getEndDatetime()
    {
        return $this->endDatetime;
    }

    /**
     * Set isShenhe
     *
     * @param integer $isShenhe
     * @return TrjUsersCertInfo
     */
    public function setIsShenhe($isShenhe)
    {
        $this->isShenhe = $isShenhe;

        return $this;
    }

    /**
     * Get isShenhe
     *
     * @return integer 
     */
    public function getIsShenhe()
    {
        return $this->isShenhe;
    }

    /**
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjUsersCertInfo
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
     * Set shenheAdmin
     *
     * @param string $shenheAdmin
     * @return TrjUsersCertInfo
     */
    public function setShenheAdmin($shenheAdmin)
    {
        $this->shenheAdmin = $shenheAdmin;

        return $this;
    }

    /**
     * Get shenheAdmin
     *
     * @return string 
     */
    public function getShenheAdmin()
    {
        return $this->shenheAdmin;
    }

    /**
     * Set isLock
     *
     * @param integer $isLock
     * @return TrjUsersCertInfo
     */
    public function setIsLock($isLock)
    {
        $this->isLock = $isLock;

        return $this;
    }

    /**
     * Get isLock
     *
     * @return integer 
     */
    public function getIsLock()
    {
        return $this->isLock;
    }

    /**
     * Set isInvalid
     *
     * @param integer $isInvalid
     * @return TrjUsersCertInfo
     */
    public function setIsInvalid($isInvalid)
    {
        $this->isInvalid = $isInvalid;

        return $this;
    }

    /**
     * Get isInvalid
     *
     * @return integer 
     */
    public function getIsInvalid()
    {
        return $this->isInvalid;
    }

    /**
     * Set isAll
     *
     * @param integer $isAll
     * @return TrjUsersCertInfo
     */
    public function setIsAll($isAll)
    {
        $this->isAll = $isAll;

        return $this;
    }

    /**
     * Get isAll
     *
     * @return integer 
     */
    public function getIsAll()
    {
        return $this->isAll;
    }
}
