<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersPriv
 */
class TrjUsersPriv
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var integer
     */
    private $acceptMessage;

    /**
     * @var integer
     */
    private $personalInfo;

    /**
     * @var string
     */
    private $prodauth;

    /**
     * @var integer
     */
    private $totalFeedbackNum;

    /**
     * @var integer
     */
    private $rewardBusinesscardNum;

    /**
     * @var integer
     */
    private $rewardFeedbackNum;

    /**
     * @var integer
     */
    private $rewardBusinessNum;

    /**
     * @var integer
     */
    private $rewardCompanyAuth;

    /**
     * @var integer
     */
    private $rewardRefreshNum;

    /**
     * @var integer
     */
    private $rewardEntrustRefreshNum;


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
     * Set updated
     *
     * @param integer $updated
     * @return TrjUsersPriv
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set acceptMessage
     *
     * @param integer $acceptMessage
     * @return TrjUsersPriv
     */
    public function setAcceptMessage($acceptMessage)
    {
        $this->acceptMessage = $acceptMessage;

        return $this;
    }

    /**
     * Get acceptMessage
     *
     * @return integer 
     */
    public function getAcceptMessage()
    {
        return $this->acceptMessage;
    }

    /**
     * Set personalInfo
     *
     * @param integer $personalInfo
     * @return TrjUsersPriv
     */
    public function setPersonalInfo($personalInfo)
    {
        $this->personalInfo = $personalInfo;

        return $this;
    }

    /**
     * Get personalInfo
     *
     * @return integer 
     */
    public function getPersonalInfo()
    {
        return $this->personalInfo;
    }

    /**
     * Set prodauth
     *
     * @param string $prodauth
     * @return TrjUsersPriv
     */
    public function setProdauth($prodauth)
    {
        $this->prodauth = $prodauth;

        return $this;
    }

    /**
     * Get prodauth
     *
     * @return string 
     */
    public function getProdauth()
    {
        return $this->prodauth;
    }

    /**
     * Set totalFeedbackNum
     *
     * @param integer $totalFeedbackNum
     * @return TrjUsersPriv
     */
    public function setTotalFeedbackNum($totalFeedbackNum)
    {
        $this->totalFeedbackNum = $totalFeedbackNum;

        return $this;
    }

    /**
     * Get totalFeedbackNum
     *
     * @return integer 
     */
    public function getTotalFeedbackNum()
    {
        return $this->totalFeedbackNum;
    }

    /**
     * Set rewardBusinesscardNum
     *
     * @param integer $rewardBusinesscardNum
     * @return TrjUsersPriv
     */
    public function setRewardBusinesscardNum($rewardBusinesscardNum)
    {
        $this->rewardBusinesscardNum = $rewardBusinesscardNum;

        return $this;
    }

    /**
     * Get rewardBusinesscardNum
     *
     * @return integer 
     */
    public function getRewardBusinesscardNum()
    {
        return $this->rewardBusinesscardNum;
    }

    /**
     * Set rewardFeedbackNum
     *
     * @param integer $rewardFeedbackNum
     * @return TrjUsersPriv
     */
    public function setRewardFeedbackNum($rewardFeedbackNum)
    {
        $this->rewardFeedbackNum = $rewardFeedbackNum;

        return $this;
    }

    /**
     * Get rewardFeedbackNum
     *
     * @return integer 
     */
    public function getRewardFeedbackNum()
    {
        return $this->rewardFeedbackNum;
    }

    /**
     * Set rewardBusinessNum
     *
     * @param integer $rewardBusinessNum
     * @return TrjUsersPriv
     */
    public function setRewardBusinessNum($rewardBusinessNum)
    {
        $this->rewardBusinessNum = $rewardBusinessNum;

        return $this;
    }

    /**
     * Get rewardBusinessNum
     *
     * @return integer 
     */
    public function getRewardBusinessNum()
    {
        return $this->rewardBusinessNum;
    }

    /**
     * Set rewardCompanyAuth
     *
     * @param integer $rewardCompanyAuth
     * @return TrjUsersPriv
     */
    public function setRewardCompanyAuth($rewardCompanyAuth)
    {
        $this->rewardCompanyAuth = $rewardCompanyAuth;

        return $this;
    }

    /**
     * Get rewardCompanyAuth
     *
     * @return integer 
     */
    public function getRewardCompanyAuth()
    {
        return $this->rewardCompanyAuth;
    }

    /**
     * Set rewardRefreshNum
     *
     * @param integer $rewardRefreshNum
     * @return TrjUsersPriv
     */
    public function setRewardRefreshNum($rewardRefreshNum)
    {
        $this->rewardRefreshNum = $rewardRefreshNum;

        return $this;
    }

    /**
     * Get rewardRefreshNum
     *
     * @return integer 
     */
    public function getRewardRefreshNum()
    {
        return $this->rewardRefreshNum;
    }

    /**
     * Set rewardEntrustRefreshNum
     *
     * @param integer $rewardEntrustRefreshNum
     * @return TrjUsersPriv
     */
    public function setRewardEntrustRefreshNum($rewardEntrustRefreshNum)
    {
        $this->rewardEntrustRefreshNum = $rewardEntrustRefreshNum;

        return $this;
    }

    /**
     * Get rewardEntrustRefreshNum
     *
     * @return integer 
     */
    public function getRewardEntrustRefreshNum()
    {
        return $this->rewardEntrustRefreshNum;
    }
}
