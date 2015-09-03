<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCityNews
 */
class TrjCityNews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mId;

    /**
     * @var integer
     */
    private $provinceId;

    /**
     * @var string
     */
    private $provinceName;

    /**
     * @var integer
     */
    private $cityId;

    /**
     * @var string
     */
    private $cityName;

    /**
     * @var string
     */
    private $cityChar;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var string
     */
    private $areaChar;

    /**
     * @var integer
     */
    private $pcaId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $file;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $created;


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
     * Set mId
     *
     * @param integer $mId
     * @return TrjCityNews
     */
    public function setMId($mId)
    {
        $this->mId = $mId;

        return $this;
    }

    /**
     * Get mId
     *
     * @return integer 
     */
    public function getMId()
    {
        return $this->mId;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return TrjCityNews
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * Set provinceName
     *
     * @param string $provinceName
     * @return TrjCityNews
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;

        return $this;
    }

    /**
     * Get provinceName
     *
     * @return string 
     */
    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return TrjCityNews
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     * @return TrjCityNews
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityChar
     *
     * @param string $cityChar
     * @return TrjCityNews
     */
    public function setCityChar($cityChar)
    {
        $this->cityChar = $cityChar;

        return $this;
    }

    /**
     * Get cityChar
     *
     * @return string 
     */
    public function getCityChar()
    {
        return $this->cityChar;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return TrjCityNews
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set areaName
     *
     * @param string $areaName
     * @return TrjCityNews
     */
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * Get areaName
     *
     * @return string 
     */
    public function getAreaName()
    {
        return $this->areaName;
    }

    /**
     * Set areaChar
     *
     * @param string $areaChar
     * @return TrjCityNews
     */
    public function setAreaChar($areaChar)
    {
        $this->areaChar = $areaChar;

        return $this;
    }

    /**
     * Get areaChar
     *
     * @return string 
     */
    public function getAreaChar()
    {
        return $this->areaChar;
    }

    /**
     * Set pcaId
     *
     * @param integer $pcaId
     * @return TrjCityNews
     */
    public function setPcaId($pcaId)
    {
        $this->pcaId = $pcaId;

        return $this;
    }

    /**
     * Get pcaId
     *
     * @return integer 
     */
    public function getPcaId()
    {
        return $this->pcaId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrjCityNews
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjCityNews
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
     * Set file
     *
     * @param string $file
     * @return TrjCityNews
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjCityNews
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
     * Set created
     *
     * @param integer $created
     * @return TrjCityNews
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
}
