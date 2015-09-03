<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTongjiPages
 */
class TrjTongjiPages
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $homepageId;

    /**
     * @var string
     */
    private $pageMd5;

    /**
     * @var string
     */
    private $page;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $lastDatetime;

    /**
     * @var integer
     */
    private $view;

    /**
     * @var integer
     */
    private $avgTime;


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
     * Set homepageId
     *
     * @param integer $homepageId
     * @return TrjTongjiPages
     */
    public function setHomepageId($homepageId)
    {
        $this->homepageId = $homepageId;

        return $this;
    }

    /**
     * Get homepageId
     *
     * @return integer 
     */
    public function getHomepageId()
    {
        return $this->homepageId;
    }

    /**
     * Set pageMd5
     *
     * @param string $pageMd5
     * @return TrjTongjiPages
     */
    public function setPageMd5($pageMd5)
    {
        $this->pageMd5 = $pageMd5;

        return $this;
    }

    /**
     * Get pageMd5
     *
     * @return string 
     */
    public function getPageMd5()
    {
        return $this->pageMd5;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return TrjTongjiPages
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return TrjTongjiPages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lastDatetime
     *
     * @param integer $lastDatetime
     * @return TrjTongjiPages
     */
    public function setLastDatetime($lastDatetime)
    {
        $this->lastDatetime = $lastDatetime;

        return $this;
    }

    /**
     * Get lastDatetime
     *
     * @return integer 
     */
    public function getLastDatetime()
    {
        return $this->lastDatetime;
    }

    /**
     * Set view
     *
     * @param integer $view
     * @return TrjTongjiPages
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set avgTime
     *
     * @param integer $avgTime
     * @return TrjTongjiPages
     */
    public function setAvgTime($avgTime)
    {
        $this->avgTime = $avgTime;

        return $this;
    }

    /**
     * Get avgTime
     *
     * @return integer 
     */
    public function getAvgTime()
    {
        return $this->avgTime;
    }
}
