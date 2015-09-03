<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSpecialSubject
 */
class TrjSpecialSubject
{
    /**
     * @var integer
     */
    private $sid;

    /**
     * @var string
     */
    private $subjectName;

    /**
     * @var string
     */
    private $seoTitle;

    /**
     * @var string
     */
    private $seoKeywords;

    /**
     * @var string
     */
    private $seoDescription;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var integer
     */
    private $posterUid;

    /**
     * @var string
     */
    private $posterUsername;

    /**
     * @var string
     */
    private $templetText;

    /**
     * @var integer
     */
    private $disable;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var integer
     */
    private $isOk;


    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set subjectName
     *
     * @param string $subjectName
     * @return TrjSpecialSubject
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;

        return $this;
    }

    /**
     * Get subjectName
     *
     * @return string 
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     * @return TrjSpecialSubject
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string 
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return TrjSpecialSubject
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string 
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     * @return TrjSpecialSubject
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string 
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return TrjSpecialSubject
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set posterUid
     *
     * @param integer $posterUid
     * @return TrjSpecialSubject
     */
    public function setPosterUid($posterUid)
    {
        $this->posterUid = $posterUid;

        return $this;
    }

    /**
     * Get posterUid
     *
     * @return integer 
     */
    public function getPosterUid()
    {
        return $this->posterUid;
    }

    /**
     * Set posterUsername
     *
     * @param string $posterUsername
     * @return TrjSpecialSubject
     */
    public function setPosterUsername($posterUsername)
    {
        $this->posterUsername = $posterUsername;

        return $this;
    }

    /**
     * Get posterUsername
     *
     * @return string 
     */
    public function getPosterUsername()
    {
        return $this->posterUsername;
    }

    /**
     * Set templetText
     *
     * @param string $templetText
     * @return TrjSpecialSubject
     */
    public function setTempletText($templetText)
    {
        $this->templetText = $templetText;

        return $this;
    }

    /**
     * Get templetText
     *
     * @return string 
     */
    public function getTempletText()
    {
        return $this->templetText;
    }

    /**
     * Set disable
     *
     * @param integer $disable
     * @return TrjSpecialSubject
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * Get disable
     *
     * @return integer 
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return TrjSpecialSubject
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
     * Set thumb
     *
     * @param string $thumb
     * @return TrjSpecialSubject
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set isOk
     *
     * @param integer $isOk
     * @return TrjSpecialSubject
     */
    public function setIsOk($isOk)
    {
        $this->isOk = $isOk;

        return $this;
    }

    /**
     * Get isOk
     *
     * @return integer 
     */
    public function getIsOk()
    {
        return $this->isOk;
    }
}
