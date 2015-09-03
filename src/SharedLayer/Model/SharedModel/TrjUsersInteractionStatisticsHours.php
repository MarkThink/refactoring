<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersInteractionStatisticsHours
 */
class TrjUsersInteractionStatisticsHours
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $hours;

    /**
     * @var integer
     */
    private $privateMessage;

    /**
     * @var integer
     */
    private $deliver;

    /**
     * @var integer
     */
    private $message;

    /**
     * @var integer
     */
    private $postedMessage;

    /**
     * @var integer
     */
    private $visited;

    /**
     * @var integer
     */
    private $beVisited;

    /**
     * @var integer
     */
    private $businessCard;

    /**
     * @var integer
     */
    private $beCollect;

    /**
     * @var integer
     */
    private $viewContacts;

    /**
     * @var integer
     */
    private $lastUpdateTime;


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
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
     * Set hours
     *
     * @param \DateTime $hours
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return \DateTime 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set privateMessage
     *
     * @param integer $privateMessage
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setPrivateMessage($privateMessage)
    {
        $this->privateMessage = $privateMessage;

        return $this;
    }

    /**
     * Get privateMessage
     *
     * @return integer 
     */
    public function getPrivateMessage()
    {
        return $this->privateMessage;
    }

    /**
     * Set deliver
     *
     * @param integer $deliver
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setDeliver($deliver)
    {
        $this->deliver = $deliver;

        return $this;
    }

    /**
     * Get deliver
     *
     * @return integer 
     */
    public function getDeliver()
    {
        return $this->deliver;
    }

    /**
     * Set message
     *
     * @param integer $message
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return integer 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set postedMessage
     *
     * @param integer $postedMessage
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setPostedMessage($postedMessage)
    {
        $this->postedMessage = $postedMessage;

        return $this;
    }

    /**
     * Get postedMessage
     *
     * @return integer 
     */
    public function getPostedMessage()
    {
        return $this->postedMessage;
    }

    /**
     * Set visited
     *
     * @param integer $visited
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setVisited($visited)
    {
        $this->visited = $visited;

        return $this;
    }

    /**
     * Get visited
     *
     * @return integer 
     */
    public function getVisited()
    {
        return $this->visited;
    }

    /**
     * Set beVisited
     *
     * @param integer $beVisited
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setBeVisited($beVisited)
    {
        $this->beVisited = $beVisited;

        return $this;
    }

    /**
     * Get beVisited
     *
     * @return integer 
     */
    public function getBeVisited()
    {
        return $this->beVisited;
    }

    /**
     * Set businessCard
     *
     * @param integer $businessCard
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setBusinessCard($businessCard)
    {
        $this->businessCard = $businessCard;

        return $this;
    }

    /**
     * Get businessCard
     *
     * @return integer 
     */
    public function getBusinessCard()
    {
        return $this->businessCard;
    }

    /**
     * Set beCollect
     *
     * @param integer $beCollect
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setBeCollect($beCollect)
    {
        $this->beCollect = $beCollect;

        return $this;
    }

    /**
     * Get beCollect
     *
     * @return integer 
     */
    public function getBeCollect()
    {
        return $this->beCollect;
    }

    /**
     * Set viewContacts
     *
     * @param integer $viewContacts
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setViewContacts($viewContacts)
    {
        $this->viewContacts = $viewContacts;

        return $this;
    }

    /**
     * Get viewContacts
     *
     * @return integer 
     */
    public function getViewContacts()
    {
        return $this->viewContacts;
    }

    /**
     * Set lastUpdateTime
     *
     * @param integer $lastUpdateTime
     * @return TrjUsersInteractionStatisticsHours
     */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * Get lastUpdateTime
     *
     * @return integer 
     */
    public function getLastUpdateTime()
    {
        return $this->lastUpdateTime;
    }
}
