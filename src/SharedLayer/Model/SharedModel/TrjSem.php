<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSem
 */
class TrjSem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keywordsName;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $isdel;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $posterName;


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
     * Set keywordsName
     *
     * @param string $keywordsName
     * @return TrjSem
     */
    public function setKeywordsName($keywordsName)
    {
        $this->keywordsName = $keywordsName;

        return $this;
    }

    /**
     * Get keywordsName
     *
     * @return string 
     */
    public function getKeywordsName()
    {
        return $this->keywordsName;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjSem
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
     * @return TrjSem
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjSem
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
     * @return TrjSem
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
}
