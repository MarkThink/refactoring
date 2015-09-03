<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSuccessStory
 */
class TrjSuccessStory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $createId;

    /**
     * @var string
     */
    private $createName;

    /**
     * @var string
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
     * Set contactName
     *
     * @param string $contactName
     * @return TrjSuccessStory
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjSuccessStory
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjSuccessStory
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
     * Set created
     *
     * @param integer $created
     * @return TrjSuccessStory
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
     * @return TrjSuccessStory
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
     * Set createName
     *
     * @param string $createName
     * @return TrjSuccessStory
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
     * Set ip
     *
     * @param string $ip
     * @return TrjSuccessStory
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
