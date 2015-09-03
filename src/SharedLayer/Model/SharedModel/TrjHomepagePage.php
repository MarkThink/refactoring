<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepagePage
 */
class TrjHomepagePage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $navigationId;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var integer
     */
    private $userId;


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
     * Set navigationId
     *
     * @param integer $navigationId
     * @return TrjHomepagePage
     */
    public function setNavigationId($navigationId)
    {
        $this->navigationId = $navigationId;

        return $this;
    }

    /**
     * Get navigationId
     *
     * @return integer 
     */
    public function getNavigationId()
    {
        return $this->navigationId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjHomepagePage
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
     * @return TrjHomepagePage
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
     * @param \DateTime $updated
     * @return TrjHomepagePage
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepagePage
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
}
