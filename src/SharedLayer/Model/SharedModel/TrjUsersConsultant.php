<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersConsultant
 */
class TrjUsersConsultant
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $rankName;

    /**
     * @var string
     */
    private $speciality;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $cateIds;

    /**
     * @var integer
     */
    private $answerNum;

    /**
     * @var integer
     */
    private $acceptNum;


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
     * Set rankName
     *
     * @param string $rankName
     * @return TrjUsersConsultant
     */
    public function setRankName($rankName)
    {
        $this->rankName = $rankName;

        return $this;
    }

    /**
     * Get rankName
     *
     * @return string 
     */
    public function getRankName()
    {
        return $this->rankName;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     * @return TrjUsersConsultant
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string 
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return TrjUsersConsultant
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set cateIds
     *
     * @param string $cateIds
     * @return TrjUsersConsultant
     */
    public function setCateIds($cateIds)
    {
        $this->cateIds = $cateIds;

        return $this;
    }

    /**
     * Get cateIds
     *
     * @return string 
     */
    public function getCateIds()
    {
        return $this->cateIds;
    }

    /**
     * Set answerNum
     *
     * @param integer $answerNum
     * @return TrjUsersConsultant
     */
    public function setAnswerNum($answerNum)
    {
        $this->answerNum = $answerNum;

        return $this;
    }

    /**
     * Get answerNum
     *
     * @return integer 
     */
    public function getAnswerNum()
    {
        return $this->answerNum;
    }

    /**
     * Set acceptNum
     *
     * @param integer $acceptNum
     * @return TrjUsersConsultant
     */
    public function setAcceptNum($acceptNum)
    {
        $this->acceptNum = $acceptNum;

        return $this;
    }

    /**
     * Get acceptNum
     *
     * @return integer 
     */
    public function getAcceptNum()
    {
        return $this->acceptNum;
    }
}
