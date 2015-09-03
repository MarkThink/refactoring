<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTopicColumnContent
 */
class TrjTopicColumnContent
{
    /**
     * @var integer
     */
    private $cid;

    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var integer
     */
    private $columnId;

    /**
     * @var string
     */
    private $ctitle;

    /**
     * @var integer
     */
    private $showCtitle;

    /**
     * @var string
     */
    private $topicContent;

    /**
     * @var integer
     */
    private $orders;

    /**
     * @var integer
     */
    private $addtime;


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
     * Set topicId
     *
     * @param integer $topicId
     * @return TrjTopicColumnContent
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
     * Set columnId
     *
     * @param integer $columnId
     * @return TrjTopicColumnContent
     */
    public function setColumnId($columnId)
    {
        $this->columnId = $columnId;

        return $this;
    }

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
     * Set ctitle
     *
     * @param string $ctitle
     * @return TrjTopicColumnContent
     */
    public function setCtitle($ctitle)
    {
        $this->ctitle = $ctitle;

        return $this;
    }

    /**
     * Get ctitle
     *
     * @return string 
     */
    public function getCtitle()
    {
        return $this->ctitle;
    }

    /**
     * Set showCtitle
     *
     * @param integer $showCtitle
     * @return TrjTopicColumnContent
     */
    public function setShowCtitle($showCtitle)
    {
        $this->showCtitle = $showCtitle;

        return $this;
    }

    /**
     * Get showCtitle
     *
     * @return integer 
     */
    public function getShowCtitle()
    {
        return $this->showCtitle;
    }

    /**
     * Set topicContent
     *
     * @param string $topicContent
     * @return TrjTopicColumnContent
     */
    public function setTopicContent($topicContent)
    {
        $this->topicContent = $topicContent;

        return $this;
    }

    /**
     * Get topicContent
     *
     * @return string 
     */
    public function getTopicContent()
    {
        return $this->topicContent;
    }

    /**
     * Set orders
     *
     * @param integer $orders
     * @return TrjTopicColumnContent
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return integer 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjTopicColumnContent
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}
