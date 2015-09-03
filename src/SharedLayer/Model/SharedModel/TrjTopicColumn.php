<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTopicColumn
 */
class TrjTopicColumn
{
    /**
     * @var integer
     */
    private $columnId;

    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var string
     */
    private $columnTitle;

    /**
     * @var integer
     */
    private $columnSort;

    /**
     * @var integer
     */
    private $columnJoinTenkan;


    /**
     * Get columnId
     *
     * @return integer 
     */
    public function getColumnId()
    {
        return $this->columnId;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     * @return TrjTopicColumn
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set columnTitle
     *
     * @param string $columnTitle
     * @return TrjTopicColumn
     */
    public function setColumnTitle($columnTitle)
    {
        $this->columnTitle = $columnTitle;

        return $this;
    }

    /**
     * Get columnTitle
     *
     * @return string 
     */
    public function getColumnTitle()
    {
        return $this->columnTitle;
    }

    /**
     * Set columnSort
     *
     * @param integer $columnSort
     * @return TrjTopicColumn
     */
    public function setColumnSort($columnSort)
    {
        $this->columnSort = $columnSort;

        return $this;
    }

    /**
     * Get columnSort
     *
     * @return integer 
     */
    public function getColumnSort()
    {
        return $this->columnSort;
    }

    /**
     * Set columnJoinTenkan
     *
     * @param integer $columnJoinTenkan
     * @return TrjTopicColumn
     */
    public function setColumnJoinTenkan($columnJoinTenkan)
    {
        $this->columnJoinTenkan = $columnJoinTenkan;

        return $this;
    }

    /**
     * Get columnJoinTenkan
     *
     * @return integer 
     */
    public function getColumnJoinTenkan()
    {
        return $this->columnJoinTenkan;
    }
}
