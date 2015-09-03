<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSemPlay
 */
class TrjSemPlay
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $pId;

    /**
     * @var integer
     */
    private $popularizePlatform;

    /**
     * @var string
     */
    private $popularizeAccount;

    /**
     * @var string
     */
    private $popularizePlan;

    /**
     * @var string
     */
    private $popularizeUnit;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $posterName;

    /**
     * @var integer
     */
    private $addtime;

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
     * Set pId
     *
     * @param integer $pId
     * @return TrjSemPlay
     */
    public function setPId($pId)
    {
        $this->pId = $pId;

        return $this;
    }

    /**
     * Get pId
     *
     * @return integer 
     */
    public function getPId()
    {
        return $this->pId;
    }

    /**
     * Set popularizePlatform
     *
     * @param integer $popularizePlatform
     * @return TrjSemPlay
     */
    public function setPopularizePlatform($popularizePlatform)
    {
        $this->popularizePlatform = $popularizePlatform;

        return $this;
    }

    /**
     * Get popularizePlatform
     *
     * @return integer 
     */
    public function getPopularizePlatform()
    {
        return $this->popularizePlatform;
    }

    /**
     * Set popularizeAccount
     *
     * @param string $popularizeAccount
     * @return TrjSemPlay
     */
    public function setPopularizeAccount($popularizeAccount)
    {
        $this->popularizeAccount = $popularizeAccount;

        return $this;
    }

    /**
     * Get popularizeAccount
     *
     * @return string 
     */
    public function getPopularizeAccount()
    {
        return $this->popularizeAccount;
    }

    /**
     * Set popularizePlan
     *
     * @param string $popularizePlan
     * @return TrjSemPlay
     */
    public function setPopularizePlan($popularizePlan)
    {
        $this->popularizePlan = $popularizePlan;

        return $this;
    }

    /**
     * Get popularizePlan
     *
     * @return string 
     */
    public function getPopularizePlan()
    {
        return $this->popularizePlan;
    }

    /**
     * Set popularizeUnit
     *
     * @param string $popularizeUnit
     * @return TrjSemPlay
     */
    public function setPopularizeUnit($popularizeUnit)
    {
        $this->popularizeUnit = $popularizeUnit;

        return $this;
    }

    /**
     * Get popularizeUnit
     *
     * @return string 
     */
    public function getPopularizeUnit()
    {
        return $this->popularizeUnit;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjSemPlay
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
     * Set posterName
     *
     * @param string $posterName
     * @return TrjSemPlay
     */
    public function setPosterName($posterName)
    {
        $this->posterName = $posterName;

        return $this;
    }

    /**
     * Get posterName
     *
     * @return string 
     */
    public function getPosterName()
    {
        return $this->posterName;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjSemPlay
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
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjSemPlay
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
