<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormModule
 */
class TrjFormModule
{
    /**
     * @var integer
     */
    private $modId;

    /**
     * @var string
     */
    private $modName;

    /**
     * @var integer
     */
    private $modBaseCatId;

    /**
     * @var integer
     */
    private $modIsBase;

    /**
     * @var string
     */
    private $modModules;

    /**
     * @var integer
     */
    private $modStatus;

    /**
     * @var string
     */
    private $modDesc;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;


    /**
     * Get modId
     *
     * @return integer 
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Set modName
     *
     * @param string $modName
     * @return TrjFormModule
     */
    public function setModName($modName)
    {
        $this->modName = $modName;

        return $this;
    }

    /**
     * Get modName
     *
     * @return string 
     */
    public function getModName()
    {
        return $this->modName;
    }

    /**
     * Set modBaseCatId
     *
     * @param integer $modBaseCatId
     * @return TrjFormModule
     */
    public function setModBaseCatId($modBaseCatId)
    {
        $this->modBaseCatId = $modBaseCatId;

        return $this;
    }

    /**
     * Get modBaseCatId
     *
     * @return integer 
     */
    public function getModBaseCatId()
    {
        return $this->modBaseCatId;
    }

    /**
     * Set modIsBase
     *
     * @param integer $modIsBase
     * @return TrjFormModule
     */
    public function setModIsBase($modIsBase)
    {
        $this->modIsBase = $modIsBase;

        return $this;
    }

    /**
     * Get modIsBase
     *
     * @return integer 
     */
    public function getModIsBase()
    {
        return $this->modIsBase;
    }

    /**
     * Set modModules
     *
     * @param string $modModules
     * @return TrjFormModule
     */
    public function setModModules($modModules)
    {
        $this->modModules = $modModules;

        return $this;
    }

    /**
     * Get modModules
     *
     * @return string 
     */
    public function getModModules()
    {
        return $this->modModules;
    }

    /**
     * Set modStatus
     *
     * @param integer $modStatus
     * @return TrjFormModule
     */
    public function setModStatus($modStatus)
    {
        $this->modStatus = $modStatus;

        return $this;
    }

    /**
     * Get modStatus
     *
     * @return integer 
     */
    public function getModStatus()
    {
        return $this->modStatus;
    }

    /**
     * Set modDesc
     *
     * @param string $modDesc
     * @return TrjFormModule
     */
    public function setModDesc($modDesc)
    {
        $this->modDesc = $modDesc;

        return $this;
    }

    /**
     * Get modDesc
     *
     * @return string 
     */
    public function getModDesc()
    {
        return $this->modDesc;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjFormModule
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjFormModule
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
