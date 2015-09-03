<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAttach
 */
class TrjAttach
{
    /**
     * @var integer
     */
    private $attachId;

    /**
     * @var string
     */
    private $table;

    /**
     * @var integer
     */
    private $rowId;

    /**
     * @var string
     */
    private $attachType;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var integer
     */
    private $ctime;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $size;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var integer
     */
    private $isDel;

    /**
     * @var string
     */
    private $savePath;

    /**
     * @var string
     */
    private $saveName;

    /**
     * @var integer
     */
    private $saveDomain;

    /**
     * @var string
     */
    private $ip;


    /**
     * Get attachId
     *
     * @return integer 
     */
    public function getAttachId()
    {
        return $this->attachId;
    }

    /**
     * Set table
     *
     * @param string $table
     * @return TrjAttach
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return string 
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set rowId
     *
     * @param integer $rowId
     * @return TrjAttach
     */
    public function setRowId($rowId)
    {
        $this->rowId = $rowId;

        return $this;
    }

    /**
     * Get rowId
     *
     * @return integer 
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     * Set attachType
     *
     * @param string $attachType
     * @return TrjAttach
     */
    public function setAttachType($attachType)
    {
        $this->attachType = $attachType;

        return $this;
    }

    /**
     * Get attachType
     *
     * @return string 
     */
    public function getAttachType()
    {
        return $this->attachType;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return TrjAttach
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
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjAttach
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrjAttach
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
     * Set type
     *
     * @param string $type
     * @return TrjAttach
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return TrjAttach
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return TrjAttach
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjAttach
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
     * Set savePath
     *
     * @param string $savePath
     * @return TrjAttach
     */
    public function setSavePath($savePath)
    {
        $this->savePath = $savePath;

        return $this;
    }

    /**
     * Get savePath
     *
     * @return string 
     */
    public function getSavePath()
    {
        return $this->savePath;
    }

    /**
     * Set saveName
     *
     * @param string $saveName
     * @return TrjAttach
     */
    public function setSaveName($saveName)
    {
        $this->saveName = $saveName;

        return $this;
    }

    /**
     * Get saveName
     *
     * @return string 
     */
    public function getSaveName()
    {
        return $this->saveName;
    }

    /**
     * Set saveDomain
     *
     * @param integer $saveDomain
     * @return TrjAttach
     */
    public function setSaveDomain($saveDomain)
    {
        $this->saveDomain = $saveDomain;

        return $this;
    }

    /**
     * Get saveDomain
     *
     * @return integer 
     */
    public function getSaveDomain()
    {
        return $this->saveDomain;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrjAttach
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }
}
