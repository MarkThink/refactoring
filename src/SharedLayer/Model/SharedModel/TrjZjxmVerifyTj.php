<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmVerifyTj
 */
class TrjZjxmVerifyTj
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var integer
     */
    private $zjxmType;

    /**
     * @var integer
     */
    private $verifyState;

    /**
     * @var integer
     */
    private $source;

    /**
     * @var integer
     */
    private $publisherType;

    /**
     * @var integer
     */
    private $status;


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
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmVerifyTj
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
     * Set createId
     *
     * @param integer $createId
     * @return TrjZjxmVerifyTj
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
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjZjxmVerifyTj
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
     * Set zjxmType
     *
     * @param integer $zjxmType
     * @return TrjZjxmVerifyTj
     */
    public function setZjxmType($zjxmType)
    {
        $this->zjxmType = $zjxmType;

        return $this;
    }

    /**
     * Get zjxmType
     *
     * @return integer 
     */
    public function getZjxmType()
    {
        return $this->zjxmType;
    }

    /**
     * Set verifyState
     *
     * @param integer $verifyState
     * @return TrjZjxmVerifyTj
     */
    public function setVerifyState($verifyState)
    {
        $this->verifyState = $verifyState;

        return $this;
    }

    /**
     * Get verifyState
     *
     * @return integer 
     */
    public function getVerifyState()
    {
        return $this->verifyState;
    }

    /**
     * Set source
     *
     * @param integer $source
     * @return TrjZjxmVerifyTj
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return integer 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set publisherType
     *
     * @param integer $publisherType
     * @return TrjZjxmVerifyTj
     */
    public function setPublisherType($publisherType)
    {
        $this->publisherType = $publisherType;

        return $this;
    }

    /**
     * Get publisherType
     *
     * @return integer 
     */
    public function getPublisherType()
    {
        return $this->publisherType;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjZjxmVerifyTj
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
