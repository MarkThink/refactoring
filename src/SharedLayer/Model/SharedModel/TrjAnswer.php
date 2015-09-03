<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAnswer
 */
class TrjAnswer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $askId;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userUsername;

    /**
     * @var integer
     */
    private $specialist;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;

    /**
     * @var integer
     */
    private $shenhe;

    /**
     * @var integer
     */
    private $shenheUid;

    /**
     * @var string
     */
    private $shenheUsername;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set askId
     *
     * @param integer $askId
     * @return TrjAnswer
     */
    public function setAskId($askId)
    {
        $this->askId = $askId;

        return $this;
    }

    /**
     * Get askId
     *
     * @return integer 
     */
    public function getAskId()
    {
        return $this->askId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjAnswer
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
     * Set userId
     *
     * @param integer $userId
     * @return TrjAnswer
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userUsername
     *
     * @param string $userUsername
     * @return TrjAnswer
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * Get userUsername
     *
     * @return string 
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * Set specialist
     *
     * @param integer $specialist
     * @return TrjAnswer
     */
    public function setSpecialist($specialist)
    {
        $this->specialist = $specialist;

        return $this;
    }

    /**
     * Get specialist
     *
     * @return integer 
     */
    public function getSpecialist()
    {
        return $this->specialist;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjAnswer
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
     * @return TrjAnswer
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
     * Set shenhe
     *
     * @param integer $shenhe
     * @return TrjAnswer
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
     * Set shenheUid
     *
     * @param integer $shenheUid
     * @return TrjAnswer
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
     * Set shenheUsername
     *
     * @param string $shenheUsername
     * @return TrjAnswer
     */
    public function setShenheUsername($shenheUsername)
    {
        $this->shenheUsername = $shenheUsername;

        return $this;
    }

    /**
     * Get shenheUsername
     *
     * @return string 
     */
    public function getShenheUsername()
    {
        return $this->shenheUsername;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjAnswer
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
}
