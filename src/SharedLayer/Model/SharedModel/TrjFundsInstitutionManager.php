<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFundsInstitutionManager
 */
class TrjFundsInstitutionManager
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $institutId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $job;

    /**
     * @var integer
     */
    private $weight;


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
     * Set institutId
     *
     * @param integer $institutId
     * @return TrjFundsInstitutionManager
     */
    public function setInstitutId($institutId)
    {
        $this->institutId = $institutId;

        return $this;
    }

    /**
     * Get institutId
     *
     * @return integer 
     */
    public function getInstitutId()
    {
        return $this->institutId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrjFundsInstitutionManager
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
     * Set photo
     *
     * @param string $photo
     * @return TrjFundsInstitutionManager
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return TrjFundsInstitutionManager
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
     * Set weight
     *
     * @param integer $weight
     * @return TrjFundsInstitutionManager
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
