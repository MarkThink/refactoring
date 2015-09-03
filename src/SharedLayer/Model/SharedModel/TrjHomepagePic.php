<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepagePic
 */
class TrjHomepagePic
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $pic;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $certid;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $isVerify;


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
     * Set name
     *
     * @param string $name
     * @return TrjHomepagePic
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return TrjHomepagePic
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjHomepagePic
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepagePic
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
     * Set created
     *
     * @param integer $created
     * @return TrjHomepagePic
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
     * Set certid
     *
     * @param integer $certid
     * @return TrjHomepagePic
     */
    public function setCertid($certid)
    {
        $this->certid = $certid;

        return $this;
    }

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
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjHomepagePic
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
     * Set aid
     *
     * @param integer $aid
     * @return TrjHomepagePic
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
     * Set isVerify
     *
     * @param integer $isVerify
     * @return TrjHomepagePic
     */
    public function setIsVerify($isVerify)
    {
        $this->isVerify = $isVerify;

        return $this;
    }

    /**
     * Get isVerify
     *
     * @return integer 
     */
    public function getIsVerify()
    {
        return $this->isVerify;
    }
}
