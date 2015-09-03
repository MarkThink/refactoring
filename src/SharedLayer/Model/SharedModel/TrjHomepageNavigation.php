<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjHomepageNavigation
 */
class TrjHomepageNavigation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $isShow;

    /**
     * @var integer
     */
    private $target;

    /**
     * @var integer
     */
    private $isSystem;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $created;


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
     * Set parentId
     *
     * @param integer $parentId
     * @return TrjHomepageNavigation
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrjHomepageNavigation
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
     * Set isShow
     *
     * @param integer $isShow
     * @return TrjHomepageNavigation
     */
    public function setIsShow($isShow)
    {
        $this->isShow = $isShow;

        return $this;
    }

    /**
     * Get isShow
     *
     * @return integer 
     */
    public function getIsShow()
    {
        return $this->isShow;
    }

    /**
     * Set target
     *
     * @param integer $target
     * @return TrjHomepageNavigation
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return integer 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set isSystem
     *
     * @param integer $isSystem
     * @return TrjHomepageNavigation
     */
    public function setIsSystem($isSystem)
    {
        $this->isSystem = $isSystem;

        return $this;
    }

    /**
     * Get isSystem
     *
     * @return integer 
     */
    public function getIsSystem()
    {
        return $this->isSystem;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjHomepageNavigation
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
     * Set sort
     *
     * @param integer $sort
     * @return TrjHomepageNavigation
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
     * Set created
     *
     * @param integer $created
     * @return TrjHomepageNavigation
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
}
