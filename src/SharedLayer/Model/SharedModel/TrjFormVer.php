<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormVer
 */
class TrjFormVer
{
    /**
     * @var integer
     */
    private $verId;

    /**
     * @var integer
     */
    private $modId;

    /**
     * @var string
     */
    private $formFieldset;

    /**
     * @var integer
     */
    private $formVer;

    /**
     * @var integer
     */
    private $verStatus;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $zjxmCatId;


    /**
     * Get verId
     *
     * @return integer 
     */
    public function getVerId()
    {
        return $this->verId;
    }

    /**
     * Set modId
     *
     * @param integer $modId
     * @return TrjFormVer
     */
    public function setModId($modId)
    {
        $this->modId = $modId;

        return $this;
    }

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
     * Set formFieldset
     *
     * @param string $formFieldset
     * @return TrjFormVer
     */
    public function setFormFieldset($formFieldset)
    {
        $this->formFieldset = $formFieldset;

        return $this;
    }

    /**
     * Get formFieldset
     *
     * @return string 
     */
    public function getFormFieldset()
    {
        return $this->formFieldset;
    }

    /**
     * Set formVer
     *
     * @param integer $formVer
     * @return TrjFormVer
     */
    public function setFormVer($formVer)
    {
        $this->formVer = $formVer;

        return $this;
    }

    /**
     * Get formVer
     *
     * @return integer 
     */
    public function getFormVer()
    {
        return $this->formVer;
    }

    /**
     * Set verStatus
     *
     * @param integer $verStatus
     * @return TrjFormVer
     */
    public function setVerStatus($verStatus)
    {
        $this->verStatus = $verStatus;

        return $this;
    }

    /**
     * Get verStatus
     *
     * @return integer 
     */
    public function getVerStatus()
    {
        return $this->verStatus;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjFormVer
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
     * Set zjxmCatId
     *
     * @param integer $zjxmCatId
     * @return TrjFormVer
     */
    public function setZjxmCatId($zjxmCatId)
    {
        $this->zjxmCatId = $zjxmCatId;

        return $this;
    }

    /**
     * Get zjxmCatId
     *
     * @return integer 
     */
    public function getZjxmCatId()
    {
        return $this->zjxmCatId;
    }
}
