<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWorkNote
 */
class TrjWorkNote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $department;

    /**
     * @var integer
     */
    private $noteDate;

    /**
     * @var string
     */
    private $weekName;

    /**
     * @var string
     */
    private $holidayName;

    /**
     * @var string
     */
    private $noteType;

    /**
     * @var string
     */
    private $noteContent;

    /**
     * @var integer
     */
    private $addtime;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $username;


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
     * Set department
     *
     * @param integer $department
     * @return TrjWorkNote
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return integer 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set noteDate
     *
     * @param integer $noteDate
     * @return TrjWorkNote
     */
    public function setNoteDate($noteDate)
    {
        $this->noteDate = $noteDate;

        return $this;
    }

    /**
     * Get noteDate
     *
     * @return integer 
     */
    public function getNoteDate()
    {
        return $this->noteDate;
    }

    /**
     * Set weekName
     *
     * @param string $weekName
     * @return TrjWorkNote
     */
    public function setWeekName($weekName)
    {
        $this->weekName = $weekName;

        return $this;
    }

    /**
     * Get weekName
     *
     * @return string 
     */
    public function getWeekName()
    {
        return $this->weekName;
    }

    /**
     * Set holidayName
     *
     * @param string $holidayName
     * @return TrjWorkNote
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;

        return $this;
    }

    /**
     * Get holidayName
     *
     * @return string 
     */
    public function getHolidayName()
    {
        return $this->holidayName;
    }

    /**
     * Set noteType
     *
     * @param string $noteType
     * @return TrjWorkNote
     */
    public function setNoteType($noteType)
    {
        $this->noteType = $noteType;

        return $this;
    }

    /**
     * Get noteType
     *
     * @return string 
     */
    public function getNoteType()
    {
        return $this->noteType;
    }

    /**
     * Set noteContent
     *
     * @param string $noteContent
     * @return TrjWorkNote
     */
    public function setNoteContent($noteContent)
    {
        $this->noteContent = $noteContent;

        return $this;
    }

    /**
     * Get noteContent
     *
     * @return string 
     */
    public function getNoteContent()
    {
        return $this->noteContent;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return TrjWorkNote
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

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjWorkNote
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return TrjWorkNote
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TrjWorkNote
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
}
