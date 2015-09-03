<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTgxxZjxm
 */
class TrjTgxxZjxm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $tgxxId;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;


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
     * Set tgxxId
     *
     * @param integer $tgxxId
     * @return TrjTgxxZjxm
     */
    public function setTgxxId($tgxxId)
    {
        $this->tgxxId = $tgxxId;

        return $this;
    }

    /**
     * Get tgxxId
     *
     * @return integer 
     */
    public function getTgxxId()
    {
        return $this->tgxxId;
    }

    /**
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjTgxxZjxm
     */
    public function setZjxmId($zjxmId)
    {
        $this->zjxmId = $zjxmId;

        return $this;
    }

    /**
     * Get zjxmId
     *
     * @return integer 
     */
    public function getZjxmId()
    {
        return $this->zjxmId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjTgxxZjxm
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
     * Set createName
     *
     * @param string $createName
     * @return TrjTgxxZjxm
     */
    public function setCreateName($createName)
    {
        $this->createName = $createName;

        return $this;
    }

    /**
     * Get createName
     *
     * @return string 
     */
    public function getCreateName()
    {
        return $this->createName;
    }

    /**
     * Set createId
     *
     * @param integer $createId
     * @return TrjTgxxZjxm
     */
    public function setCreateId($createId)
    {
        $this->createId = $createId;

        return $this;
    }

    /**
     * Get createId
     *
     * @return integer 
     */
    public function getCreateId()
    {
        return $this->createId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjTgxxZjxm
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
     * @return TrjTgxxZjxm
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
}
