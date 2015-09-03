<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersVerify
 */
class TrjUsersVerify
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $pics;

    /**
     * @var string
     */
    private $userLogo;

    /**
     * @var integer
     */
    private $isUserLogo;

    /**
     * @var integer
     */
    private $userLogoRid;

    /**
     * @var string
     */
    private $userLogoResult;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $isUserName;

    /**
     * @var string
     */
    private $userNameRid;

    /**
     * @var string
     */
    private $userNameResult;

    /**
     * @var string
     */
    private $company;

    /**
     * @var integer
     */
    private $isCompany;

    /**
     * @var integer
     */
    private $companyRid;

    /**
     * @var string
     */
    private $companyResult;

    /**
     * @var string
     */
    private $introduce;

    /**
     * @var integer
     */
    private $isIntroduce;

    /**
     * @var integer
     */
    private $introduceRid;

    /**
     * @var string
     */
    private $introduceResult;

    /**
     * @var string
     */
    private $personalIntroduce;

    /**
     * @var integer
     */
    private $isPersonalIntroduce;

    /**
     * @var integer
     */
    private $personalIntroduceRid;

    /**
     * @var string
     */
    private $personalIntroduceResult;

    /**
     * @var integer
     */
    private $submitTime;

    /**
     * @var integer
     */
    private $verifyTime;

    /**
     * @var integer
     */
    private $verifyUserid;

    /**
     * @var string
     */
    private $verifyUsername;

    /**
     * @var integer
     */
    private $isFullVerify;


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
     * Set pics
     *
     * @param string $pics
     * @return TrjUsersVerify
     */
    public function setPics($pics)
    {
        $this->pics = $pics;

        return $this;
    }

    /**
     * Get pics
     *
     * @return string 
     */
    public function getPics()
    {
        return $this->pics;
    }

    /**
     * Set userLogo
     *
     * @param string $userLogo
     * @return TrjUsersVerify
     */
    public function setUserLogo($userLogo)
    {
        $this->userLogo = $userLogo;

        return $this;
    }

    /**
     * Get userLogo
     *
     * @return string 
     */
    public function getUserLogo()
    {
        return $this->userLogo;
    }

    /**
     * Set isUserLogo
     *
     * @param integer $isUserLogo
     * @return TrjUsersVerify
     */
    public function setIsUserLogo($isUserLogo)
    {
        $this->isUserLogo = $isUserLogo;

        return $this;
    }

    /**
     * Get isUserLogo
     *
     * @return integer 
     */
    public function getIsUserLogo()
    {
        return $this->isUserLogo;
    }

    /**
     * Set userLogoRid
     *
     * @param integer $userLogoRid
     * @return TrjUsersVerify
     */
    public function setUserLogoRid($userLogoRid)
    {
        $this->userLogoRid = $userLogoRid;

        return $this;
    }

    /**
     * Get userLogoRid
     *
     * @return integer 
     */
    public function getUserLogoRid()
    {
        return $this->userLogoRid;
    }

    /**
     * Set userLogoResult
     *
     * @param string $userLogoResult
     * @return TrjUsersVerify
     */
    public function setUserLogoResult($userLogoResult)
    {
        $this->userLogoResult = $userLogoResult;

        return $this;
    }

    /**
     * Get userLogoResult
     *
     * @return string 
     */
    public function getUserLogoResult()
    {
        return $this->userLogoResult;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return TrjUsersVerify
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set isUserName
     *
     * @param string $isUserName
     * @return TrjUsersVerify
     */
    public function setIsUserName($isUserName)
    {
        $this->isUserName = $isUserName;

        return $this;
    }

    /**
     * Get isUserName
     *
     * @return string 
     */
    public function getIsUserName()
    {
        return $this->isUserName;
    }

    /**
     * Set userNameRid
     *
     * @param string $userNameRid
     * @return TrjUsersVerify
     */
    public function setUserNameRid($userNameRid)
    {
        $this->userNameRid = $userNameRid;

        return $this;
    }

    /**
     * Get userNameRid
     *
     * @return string 
     */
    public function getUserNameRid()
    {
        return $this->userNameRid;
    }

    /**
     * Set userNameResult
     *
     * @param string $userNameResult
     * @return TrjUsersVerify
     */
    public function setUserNameResult($userNameResult)
    {
        $this->userNameResult = $userNameResult;

        return $this;
    }

    /**
     * Get userNameResult
     *
     * @return string 
     */
    public function getUserNameResult()
    {
        return $this->userNameResult;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return TrjUsersVerify
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
     * Set isCompany
     *
     * @param integer $isCompany
     * @return TrjUsersVerify
     */
    public function setIsCompany($isCompany)
    {
        $this->isCompany = $isCompany;

        return $this;
    }

    /**
     * Get isCompany
     *
     * @return integer 
     */
    public function getIsCompany()
    {
        return $this->isCompany;
    }

    /**
     * Set companyRid
     *
     * @param integer $companyRid
     * @return TrjUsersVerify
     */
    public function setCompanyRid($companyRid)
    {
        $this->companyRid = $companyRid;

        return $this;
    }

    /**
     * Get companyRid
     *
     * @return integer 
     */
    public function getCompanyRid()
    {
        return $this->companyRid;
    }

    /**
     * Set companyResult
     *
     * @param string $companyResult
     * @return TrjUsersVerify
     */
    public function setCompanyResult($companyResult)
    {
        $this->companyResult = $companyResult;

        return $this;
    }

    /**
     * Get companyResult
     *
     * @return string 
     */
    public function getCompanyResult()
    {
        return $this->companyResult;
    }

    /**
     * Set introduce
     *
     * @param string $introduce
     * @return TrjUsersVerify
     */
    public function setIntroduce($introduce)
    {
        $this->introduce = $introduce;

        return $this;
    }

    /**
     * Get introduce
     *
     * @return string 
     */
    public function getIntroduce()
    {
        return $this->introduce;
    }

    /**
     * Set isIntroduce
     *
     * @param integer $isIntroduce
     * @return TrjUsersVerify
     */
    public function setIsIntroduce($isIntroduce)
    {
        $this->isIntroduce = $isIntroduce;

        return $this;
    }

    /**
     * Get isIntroduce
     *
     * @return integer 
     */
    public function getIsIntroduce()
    {
        return $this->isIntroduce;
    }

    /**
     * Set introduceRid
     *
     * @param integer $introduceRid
     * @return TrjUsersVerify
     */
    public function setIntroduceRid($introduceRid)
    {
        $this->introduceRid = $introduceRid;

        return $this;
    }

    /**
     * Get introduceRid
     *
     * @return integer 
     */
    public function getIntroduceRid()
    {
        return $this->introduceRid;
    }

    /**
     * Set introduceResult
     *
     * @param string $introduceResult
     * @return TrjUsersVerify
     */
    public function setIntroduceResult($introduceResult)
    {
        $this->introduceResult = $introduceResult;

        return $this;
    }

    /**
     * Get introduceResult
     *
     * @return string 
     */
    public function getIntroduceResult()
    {
        return $this->introduceResult;
    }

    /**
     * Set personalIntroduce
     *
     * @param string $personalIntroduce
     * @return TrjUsersVerify
     */
    public function setPersonalIntroduce($personalIntroduce)
    {
        $this->personalIntroduce = $personalIntroduce;

        return $this;
    }

    /**
     * Get personalIntroduce
     *
     * @return string 
     */
    public function getPersonalIntroduce()
    {
        return $this->personalIntroduce;
    }

    /**
     * Set isPersonalIntroduce
     *
     * @param integer $isPersonalIntroduce
     * @return TrjUsersVerify
     */
    public function setIsPersonalIntroduce($isPersonalIntroduce)
    {
        $this->isPersonalIntroduce = $isPersonalIntroduce;

        return $this;
    }

    /**
     * Get isPersonalIntroduce
     *
     * @return integer 
     */
    public function getIsPersonalIntroduce()
    {
        return $this->isPersonalIntroduce;
    }

    /**
     * Set personalIntroduceRid
     *
     * @param integer $personalIntroduceRid
     * @return TrjUsersVerify
     */
    public function setPersonalIntroduceRid($personalIntroduceRid)
    {
        $this->personalIntroduceRid = $personalIntroduceRid;

        return $this;
    }

    /**
     * Get personalIntroduceRid
     *
     * @return integer 
     */
    public function getPersonalIntroduceRid()
    {
        return $this->personalIntroduceRid;
    }

    /**
     * Set personalIntroduceResult
     *
     * @param string $personalIntroduceResult
     * @return TrjUsersVerify
     */
    public function setPersonalIntroduceResult($personalIntroduceResult)
    {
        $this->personalIntroduceResult = $personalIntroduceResult;

        return $this;
    }

    /**
     * Get personalIntroduceResult
     *
     * @return string 
     */
    public function getPersonalIntroduceResult()
    {
        return $this->personalIntroduceResult;
    }

    /**
     * Set submitTime
     *
     * @param integer $submitTime
     * @return TrjUsersVerify
     */
    public function setSubmitTime($submitTime)
    {
        $this->submitTime = $submitTime;

        return $this;
    }

    /**
     * Get submitTime
     *
     * @return integer 
     */
    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     * @return TrjUsersVerify
     */
    public function setVerifyTime($verifyTime)
    {
        $this->verifyTime = $verifyTime;

        return $this;
    }

    /**
     * Get verifyTime
     *
     * @return integer 
     */
    public function getVerifyTime()
    {
        return $this->verifyTime;
    }

    /**
     * Set verifyUserid
     *
     * @param integer $verifyUserid
     * @return TrjUsersVerify
     */
    public function setVerifyUserid($verifyUserid)
    {
        $this->verifyUserid = $verifyUserid;

        return $this;
    }

    /**
     * Get verifyUserid
     *
     * @return integer 
     */
    public function getVerifyUserid()
    {
        return $this->verifyUserid;
    }

    /**
     * Set verifyUsername
     *
     * @param string $verifyUsername
     * @return TrjUsersVerify
     */
    public function setVerifyUsername($verifyUsername)
    {
        $this->verifyUsername = $verifyUsername;

        return $this;
    }

    /**
     * Get verifyUsername
     *
     * @return string 
     */
    public function getVerifyUsername()
    {
        return $this->verifyUsername;
    }

    /**
     * Set isFullVerify
     *
     * @param integer $isFullVerify
     * @return TrjUsersVerify
     */
    public function setIsFullVerify($isFullVerify)
    {
        $this->isFullVerify = $isFullVerify;

        return $this;
    }

    /**
     * Get isFullVerify
     *
     * @return integer 
     */
    public function getIsFullVerify()
    {
        return $this->isFullVerify;
    }
}
