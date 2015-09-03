<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjZjxmViewLogs
 */
class TrjZjxmViewLogs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $infotype;

    /**
     * @var string
     */
    private $infotitle;

    /**
     * @var integer
     */
    private $infoid;

    /**
     * @var integer
     */
    private $infovalid;

    /**
     * @var integer
     */
    private $catPid;

    /**
     * @var integer
     */
    private $sendUid;

    /**
     * @var integer
     */
    private $viewUid;

    /**
     * @var string
     */
    private $viewUsername;

    /**
     * @var integer
     */
    private $evaluateStatus;

    /**
     * @var string
     */
    private $viewIp;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $viewTrash;

    /**
     * @var integer
     */
    private $sendTrash;


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
     * Set infotype
     *
     * @param integer $infotype
     * @return TrjZjxmViewLogs
     */
    public function setInfotype($infotype)
    {
        $this->infotype = $infotype;

        return $this;
    }

    /**
     * Get infotype
     *
     * @return integer 
     */
    public function getInfotype()
    {
        return $this->infotype;
    }

    /**
     * Set infotitle
     *
     * @param string $infotitle
     * @return TrjZjxmViewLogs
     */
    public function setInfotitle($infotitle)
    {
        $this->infotitle = $infotitle;

        return $this;
    }

    /**
     * Get infotitle
     *
     * @return string 
     */
    public function getInfotitle()
    {
        return $this->infotitle;
    }

    /**
     * Set infoid
     *
     * @param integer $infoid
     * @return TrjZjxmViewLogs
     */
    public function setInfoid($infoid)
    {
        $this->infoid = $infoid;

        return $this;
    }

    /**
     * Get infoid
     *
     * @return integer 
     */
    public function getInfoid()
    {
        return $this->infoid;
    }

    /**
     * Set infovalid
     *
     * @param integer $infovalid
     * @return TrjZjxmViewLogs
     */
    public function setInfovalid($infovalid)
    {
        $this->infovalid = $infovalid;

        return $this;
    }

    /**
     * Get infovalid
     *
     * @return integer 
     */
    public function getInfovalid()
    {
        return $this->infovalid;
    }

    /**
     * Set catPid
     *
     * @param integer $catPid
     * @return TrjZjxmViewLogs
     */
    public function setCatPid($catPid)
    {
        $this->catPid = $catPid;

        return $this;
    }

    /**
     * Get catPid
     *
     * @return integer 
     */
    public function getCatPid()
    {
        return $this->catPid;
    }

    /**
     * Set sendUid
     *
     * @param integer $sendUid
     * @return TrjZjxmViewLogs
     */
    public function setSendUid($sendUid)
    {
        $this->sendUid = $sendUid;

        return $this;
    }

    /**
     * Get sendUid
     *
     * @return integer 
     */
    public function getSendUid()
    {
        return $this->sendUid;
    }

    /**
     * Set viewUid
     *
     * @param integer $viewUid
     * @return TrjZjxmViewLogs
     */
    public function setViewUid($viewUid)
    {
        $this->viewUid = $viewUid;

        return $this;
    }

    /**
     * Get viewUid
     *
     * @return integer 
     */
    public function getViewUid()
    {
        return $this->viewUid;
    }

    /**
     * Set viewUsername
     *
     * @param string $viewUsername
     * @return TrjZjxmViewLogs
     */
    public function setViewUsername($viewUsername)
    {
        $this->viewUsername = $viewUsername;

        return $this;
    }

    /**
     * Get viewUsername
     *
     * @return string 
     */
    public function getViewUsername()
    {
        return $this->viewUsername;
    }

    /**
     * Set evaluateStatus
     *
     * @param integer $evaluateStatus
     * @return TrjZjxmViewLogs
     */
    public function setEvaluateStatus($evaluateStatus)
    {
        $this->evaluateStatus = $evaluateStatus;

        return $this;
    }

    /**
     * Get evaluateStatus
     *
     * @return integer 
     */
    public function getEvaluateStatus()
    {
        return $this->evaluateStatus;
    }

    /**
     * Set viewIp
     *
     * @param string $viewIp
     * @return TrjZjxmViewLogs
     */
    public function setViewIp($viewIp)
    {
        $this->viewIp = $viewIp;

        return $this;
    }

    /**
     * Get viewIp
     *
     * @return string 
     */
    public function getViewIp()
    {
        return $this->viewIp;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjZjxmViewLogs
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
     * Set viewTrash
     *
     * @param integer $viewTrash
     * @return TrjZjxmViewLogs
     */
    public function setViewTrash($viewTrash)
    {
        $this->viewTrash = $viewTrash;

        return $this;
    }

    /**
     * Get viewTrash
     *
     * @return integer 
     */
    public function getViewTrash()
    {
        return $this->viewTrash;
    }

    /**
     * Set sendTrash
     *
     * @param integer $sendTrash
     * @return TrjZjxmViewLogs
     */
    public function setSendTrash($sendTrash)
    {
        $this->sendTrash = $sendTrash;

        return $this;
    }

    /**
     * Get sendTrash
     *
     * @return integer 
     */
    public function getSendTrash()
    {
        return $this->sendTrash;
    }
}
