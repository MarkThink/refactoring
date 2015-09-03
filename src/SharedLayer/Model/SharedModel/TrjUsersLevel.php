<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersLevel
 */
class TrjUsersLevel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $levelName;

    /**
     * @var integer
     */
    private $min;

    /**
     * @var integer
     */
    private $max;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $reduceRule;


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
     * Set levelName
     *
     * @param string $levelName
     * @return TrjUsersLevel
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;

        return $this;
    }

    /**
     * Get levelName
     *
     * @return string 
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * Set min
     *
     * @param integer $min
     * @return TrjUsersLevel
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return integer 
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max
     *
     * @param integer $max
     * @return TrjUsersLevel
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer 
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersLevel
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
     * Set reduceRule
     *
     * @param integer $reduceRule
     * @return TrjUsersLevel
     */
    public function setReduceRule($reduceRule)
    {
        $this->reduceRule = $reduceRule;

        return $this;
    }

    /**
     * Get reduceRule
     *
     * @return integer 
     */
    public function getReduceRule()
    {
        return $this->reduceRule;
    }
}
