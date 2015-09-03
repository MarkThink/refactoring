<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersExprule
 */
class TrjUsersExprule
{
    /**
     * @var integer
     */
    private $rid;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $rulename;

    /**
     * @var string
     */
    private $rulekey;

    /**
     * @var integer
     */
    private $islimit;

    /**
     * @var integer
     */
    private $limittime;

    /**
     * @var integer
     */
    private $exp;

    /**
     * @var integer
     */
    private $vipExp;

    /**
     * @var integer
     */
    private $rewardType;

    /**
     * @var string
     */
    private $detail;


    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersExprule
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
     * Set rulename
     *
     * @param string $rulename
     * @return TrjUsersExprule
     */
    public function setRulename($rulename)
    {
        $this->rulename = $rulename;

        return $this;
    }

    /**
     * Get rulename
     *
     * @return string 
     */
    public function getRulename()
    {
        return $this->rulename;
    }

    /**
     * Set rulekey
     *
     * @param string $rulekey
     * @return TrjUsersExprule
     */
    public function setRulekey($rulekey)
    {
        $this->rulekey = $rulekey;

        return $this;
    }

    /**
     * Get rulekey
     *
     * @return string 
     */
    public function getRulekey()
    {
        return $this->rulekey;
    }

    /**
     * Set islimit
     *
     * @param integer $islimit
     * @return TrjUsersExprule
     */
    public function setIslimit($islimit)
    {
        $this->islimit = $islimit;

        return $this;
    }

    /**
     * Get islimit
     *
     * @return integer 
     */
    public function getIslimit()
    {
        return $this->islimit;
    }

    /**
     * Set limittime
     *
     * @param integer $limittime
     * @return TrjUsersExprule
     */
    public function setLimittime($limittime)
    {
        $this->limittime = $limittime;

        return $this;
    }

    /**
     * Get limittime
     *
     * @return integer 
     */
    public function getLimittime()
    {
        return $this->limittime;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     * @return TrjUsersExprule
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set vipExp
     *
     * @param integer $vipExp
     * @return TrjUsersExprule
     */
    public function setVipExp($vipExp)
    {
        $this->vipExp = $vipExp;

        return $this;
    }

    /**
     * Get vipExp
     *
     * @return integer 
     */
    public function getVipExp()
    {
        return $this->vipExp;
    }

    /**
     * Set rewardType
     *
     * @param integer $rewardType
     * @return TrjUsersExprule
     */
    public function setRewardType($rewardType)
    {
        $this->rewardType = $rewardType;

        return $this;
    }

    /**
     * Get rewardType
     *
     * @return integer 
     */
    public function getRewardType()
    {
        return $this->rewardType;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return TrjUsersExprule
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }
}
