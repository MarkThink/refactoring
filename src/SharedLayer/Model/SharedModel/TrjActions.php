<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActions
 */
class TrjActions
{
    /**
     * @var integer
     */
    private $actionid;

    /**
     * @var string
     */
    private $actionname;

    /**
     * @var string
     */
    private $actioninfo;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $directory;

    /**
     * @var integer
     */
    private $viewmode;

    /**
     * @var integer
     */
    private $parentid;

    /**
     * @var integer
     */
    private $secondid;

    /**
     * @var integer
     */
    private $linkmode;

    /**
     * @var integer
     */
    private $isopen;

    /**
     * @var integer
     */
    private $masterid;

    /**
     * @var string
     */
    private $mastername;

    /**
     * @var integer
     */
    private $createdate;


    /**
     * Get actionid
     *
     * @return integer 
     */
    public function getActionid()
    {
        return $this->actionid;
    }

    /**
     * Set actionname
     *
     * @param string $actionname
     * @return TrjActions
     */
    public function setActionname($actionname)
    {
        $this->actionname = $actionname;

        return $this;
    }

    /**
     * Get actionname
     *
     * @return string 
     */
    public function getActionname()
    {
        return $this->actionname;
    }

    /**
     * Set actioninfo
     *
     * @param string $actioninfo
     * @return TrjActions
     */
    public function setActioninfo($actioninfo)
    {
        $this->actioninfo = $actioninfo;

        return $this;
    }

    /**
     * Get actioninfo
     *
     * @return string 
     */
    public function getActioninfo()
    {
        return $this->actioninfo;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return TrjActions
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set controller
     *
     * @param string $controller
     * @return TrjActions
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set directory
     *
     * @param string $directory
     * @return TrjActions
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Get directory
     *
     * @return string 
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Set viewmode
     *
     * @param integer $viewmode
     * @return TrjActions
     */
    public function setViewmode($viewmode)
    {
        $this->viewmode = $viewmode;

        return $this;
    }

    /**
     * Get viewmode
     *
     * @return integer 
     */
    public function getViewmode()
    {
        return $this->viewmode;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return TrjActions
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set secondid
     *
     * @param integer $secondid
     * @return TrjActions
     */
    public function setSecondid($secondid)
    {
        $this->secondid = $secondid;

        return $this;
    }

    /**
     * Get secondid
     *
     * @return integer 
     */
    public function getSecondid()
    {
        return $this->secondid;
    }

    /**
     * Set linkmode
     *
     * @param integer $linkmode
     * @return TrjActions
     */
    public function setLinkmode($linkmode)
    {
        $this->linkmode = $linkmode;

        return $this;
    }

    /**
     * Get linkmode
     *
     * @return integer 
     */
    public function getLinkmode()
    {
        return $this->linkmode;
    }

    /**
     * Set isopen
     *
     * @param integer $isopen
     * @return TrjActions
     */
    public function setIsopen($isopen)
    {
        $this->isopen = $isopen;

        return $this;
    }

    /**
     * Get isopen
     *
     * @return integer 
     */
    public function getIsopen()
    {
        return $this->isopen;
    }

    /**
     * Set masterid
     *
     * @param integer $masterid
     * @return TrjActions
     */
    public function setMasterid($masterid)
    {
        $this->masterid = $masterid;

        return $this;
    }

    /**
     * Get masterid
     *
     * @return integer 
     */
    public function getMasterid()
    {
        return $this->masterid;
    }

    /**
     * Set mastername
     *
     * @param string $mastername
     * @return TrjActions
     */
    public function setMastername($mastername)
    {
        $this->mastername = $mastername;

        return $this;
    }

    /**
     * Get mastername
     *
     * @return string 
     */
    public function getMastername()
    {
        return $this->mastername;
    }

    /**
     * Set createdate
     *
     * @param integer $createdate
     * @return TrjActions
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return integer 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }
}
