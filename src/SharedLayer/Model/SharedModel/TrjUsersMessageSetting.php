<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersMessageSetting
 */
class TrjUsersMessageSetting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $action;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $updatetime;

    /**
     * @var integer
     */
    private $creattime;

    /**
     * @var integer
     */
    private $status;


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
     * Set action
     *
     * @param integer $action
     * @return TrjUsersMessageSetting
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrjUsersMessageSetting
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrjUsersMessageSetting
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return TrjUsersMessageSetting
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
     * Set creattime
     *
     * @param integer $creattime
     * @return TrjUsersMessageSetting
     */
    public function setCreattime($creattime)
    {
        $this->creattime = $creattime;

        return $this;
    }

    /**
     * Get creattime
     *
     * @return integer 
     */
    public function getCreattime()
    {
        return $this->creattime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersMessageSetting
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
}
