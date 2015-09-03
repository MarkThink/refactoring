<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjJob
 */
class TrjJob
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $jobName;

    /**
     * @var string
     */
    private $jobDuty;

    /**
     * @var string
     */
    private $jobZg;

    /**
     * @var integer
     */
    private $editorId;

    /**
     * @var string
     */
    private $editor;

    /**
     * @var integer
     */
    private $edittime;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $posttime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $ipAddress;


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
     * Set jobName
     *
     * @param string $jobName
     * @return TrjJob
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;

        return $this;
    }

    /**
     * Get jobName
     *
     * @return string 
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Set jobDuty
     *
     * @param string $jobDuty
     * @return TrjJob
     */
    public function setJobDuty($jobDuty)
    {
        $this->jobDuty = $jobDuty;

        return $this;
    }

    /**
     * Get jobDuty
     *
     * @return string 
     */
    public function getJobDuty()
    {
        return $this->jobDuty;
    }

    /**
     * Set jobZg
     *
     * @param string $jobZg
     * @return TrjJob
     */
    public function setJobZg($jobZg)
    {
        $this->jobZg = $jobZg;

        return $this;
    }

    /**
     * Get jobZg
     *
     * @return string 
     */
    public function getJobZg()
    {
        return $this->jobZg;
    }

    /**
     * Set editorId
     *
     * @param integer $editorId
     * @return TrjJob
     */
    public function setEditorId($editorId)
    {
        $this->editorId = $editorId;

        return $this;
    }

    /**
     * Get editorId
     *
     * @return integer 
     */
    public function getEditorId()
    {
        return $this->editorId;
    }

    /**
     * Set editor
     *
     * @param string $editor
     * @return TrjJob
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set edittime
     *
     * @param integer $edittime
     * @return TrjJob
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
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjJob
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjJob
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set posttime
     *
     * @param integer $posttime
     * @return TrjJob
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
     * Set status
     *
     * @param integer $status
     * @return TrjJob
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
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return TrjJob
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
}
