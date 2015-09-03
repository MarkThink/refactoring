<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebcastIntention
 */
class TrjWebcastIntention
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $showId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $job;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $isDel;


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
     * Set showId
     *
     * @param integer $showId
     * @return TrjWebcastIntention
     */
    public function setShowId($showId)
    {
        $this->showId = $showId;

        return $this;
    }

    /**
     * Get showId
     *
     * @return integer 
     */
    public function getShowId()
    {
        return $this->showId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjWebcastIntention
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
     * Set company
     *
     * @param string $company
     * @return TrjWebcastIntention
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return TrjWebcastIntention
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjWebcastIntention
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjWebcastIntention
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }
}
