<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAreaData
 */
class TrjAreaData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cid;

    /**
     * @var integer
     */
    private $menus;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $username;


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
     * Set cid
     *
     * @param integer $cid
     * @return TrjAreaData
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set menus
     *
     * @param integer $menus
     * @return TrjAreaData
     */
    public function setMenus($menus)
    {
        $this->menus = $menus;

        return $this;
    }

    /**
     * Get menus
     *
     * @return integer 
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrjAreaData
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
     * Set created
     *
     * @param integer $created
     * @return TrjAreaData
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
     * Set content
     *
     * @param string $content
     * @return TrjAreaData
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
     * Set userId
     *
     * @param integer $userId
     * @return TrjAreaData
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
     * Set username
     *
     * @param string $username
     * @return TrjAreaData
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
}
