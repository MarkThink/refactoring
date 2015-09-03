<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjNonKeywords
 */
class TrjNonKeywords
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $forum;

    /**
     * @var integer
     */
    private $replace;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $editer;

    /**
     * @var integer
     */
    private $editerId;

    /**
     * @var integer
     */
    private $edittime;

    /**
     * @var integer
     */
    private $posttime;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set name
     *
     * @param string $name
     * @return TrjNonKeywords
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
     * Set forum
     *
     * @param string $forum
     * @return TrjNonKeywords
     */
    public function setForum($forum)
    {
        $this->forum = $forum;

        return $this;
    }

    /**
     * Get forum
     *
     * @return string 
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Set replace
     *
     * @param integer $replace
     * @return TrjNonKeywords
     */
    public function setReplace($replace)
    {
        $this->replace = $replace;

        return $this;
    }

    /**
     * Get replace
     *
     * @return integer 
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjNonKeywords
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

    /**
     * Set editer
     *
     * @param string $editer
     * @return TrjNonKeywords
     */
    public function setEditer($editer)
    {
        $this->editer = $editer;

        return $this;
    }

    /**
     * Get editer
     *
     * @return string 
     */
    public function getEditer()
    {
        return $this->editer;
    }

    /**
     * Set editerId
     *
     * @param integer $editerId
     * @return TrjNonKeywords
     */
    public function setEditerId($editerId)
    {
        $this->editerId = $editerId;

        return $this;
    }

    /**
     * Get editerId
     *
     * @return integer 
     */
    public function getEditerId()
    {
        return $this->editerId;
    }

    /**
     * Set edittime
     *
     * @param integer $edittime
     * @return TrjNonKeywords
     */
    public function setEdittime($edittime)
    {
        $this->edittime = $edittime;

        return $this;
    }

    /**
     * Get edittime
     *
     * @return integer 
     */
    public function getEdittime()
    {
        return $this->edittime;
    }

    /**
     * Set posttime
     *
     * @param integer $posttime
     * @return TrjNonKeywords
     */
    public function setPosttime($posttime)
    {
        $this->posttime = $posttime;

        return $this;
    }

    /**
     * Get posttime
     *
     * @return integer 
     */
    public function getPosttime()
    {
        return $this->posttime;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjNonKeywords
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
     * Set content
     *
     * @param string $content
     * @return TrjNonKeywords
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
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjNonKeywords
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
}
