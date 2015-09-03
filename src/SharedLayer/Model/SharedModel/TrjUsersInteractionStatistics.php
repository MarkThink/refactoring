<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersInteractionStatistics
 */
class TrjUsersInteractionStatistics
{
    /**
     * @var integer
     */
    private $userId;

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
    private $beDeliver;

    /**
     * @var integer
     */
    private $message;

    /**
     * @var integer
     */
    private $system;

    /**
     * @var integer
     */
    private $postedMessage;

    /**
     * @var integer
     */
    private $postedCheck;

    /**
     * @var integer
     */
    private $inbox;

    /**
     * @var integer
     */
    private $friend;

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
    private $invite;

    /**
     * @var integer
     */
    private $beInvite;

    /**
     * @var integer
     */
    private $allPostedMessage;

    /**
     * @var integer
     */
    private $allDeliver;

    /**
     * @var integer
     */
    private $allBeDeliver;

    /**
     * @var integer
     */
    private $allMessage;

    /**
     * @var integer
     */
    private $allBeCollect;

    /**
     * @var integer
     */
    private $allBeVisited;

    /**
     * @var integer
     */
    private $allViewContacts;

    /**
     * @var integer
     */
    private $allInvite;

    /**
     * @var integer
     */
    private $allBeInvite;

    /**
     * @var integer
     */
    private $lastUpdateTime;

    /**
     * @var integer
     */
    private $loginDaysForWeek;


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
     * Set privateMessage
     *
     * @param integer $privateMessage
     * @return TrjUsersInteractionStatistics
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
     * @return TrjUsersInteractionStatistics
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
     * Set beDeliver
     *
     * @param integer $beDeliver
     * @return TrjUsersInteractionStatistics
     */
    public function setBeDeliver($beDeliver)
    {
        $this->beDeliver = $beDeliver;

        return $this;
    }

    /**
     * Get beDeliver
     *
     * @return integer 
     */
    public function getBeDeliver()
    {
        return $this->beDeliver;
    }

    /**
     * Set message
     *
     * @param integer $message
     * @return TrjUsersInteractionStatistics
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
     * Set system
     *
     * @param integer $system
     * @return TrjUsersInteractionStatistics
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return integer 
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set postedMessage
     *
     * @param integer $postedMessage
     * @return TrjUsersInteractionStatistics
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
     * Set postedCheck
     *
     * @param integer $postedCheck
     * @return TrjUsersInteractionStatistics
     */
    public function setPostedCheck($postedCheck)
    {
        $this->postedCheck = $postedCheck;

        return $this;
    }

    /**
     * Get postedCheck
     *
     * @return integer 
     */
    public function getPostedCheck()
    {
        return $this->postedCheck;
    }

    /**
     * Set inbox
     *
     * @param integer $inbox
     * @return TrjUsersInteractionStatistics
     */
    public function setInbox($inbox)
    {
        $this->inbox = $inbox;

        return $this;
    }

    /**
     * Get inbox
     *
     * @return integer 
     */
    public function getInbox()
    {
        return $this->inbox;
    }

    /**
     * Set friend
     *
     * @param integer $friend
     * @return TrjUsersInteractionStatistics
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return integer 
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set visited
     *
     * @param integer $visited
     * @return TrjUsersInteractionStatistics
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
     * @return TrjUsersInteractionStatistics
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
     * @return TrjUsersInteractionStatistics
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
     * @return TrjUsersInteractionStatistics
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
     * Set invite
     *
     * @param integer $invite
     * @return TrjUsersInteractionStatistics
     */
    public function setInvite($invite)
    {
        $this->invite = $invite;

        return $this;
    }

    /**
     * Get invite
     *
     * @return integer 
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * Set beInvite
     *
     * @param integer $beInvite
     * @return TrjUsersInteractionStatistics
     */
    public function setBeInvite($beInvite)
    {
        $this->beInvite = $beInvite;

        return $this;
    }

    /**
     * Get beInvite
     *
     * @return integer 
     */
    public function getBeInvite()
    {
        return $this->beInvite;
    }

    /**
     * Set allPostedMessage
     *
     * @param integer $allPostedMessage
     * @return TrjUsersInteractionStatistics
     */
    public function setAllPostedMessage($allPostedMessage)
    {
        $this->allPostedMessage = $allPostedMessage;

        return $this;
    }

    /**
     * Get allPostedMessage
     *
     * @return integer 
     */
    public function getAllPostedMessage()
    {
        return $this->allPostedMessage;
    }

    /**
     * Set allDeliver
     *
     * @param integer $allDeliver
     * @return TrjUsersInteractionStatistics
     */
    public function setAllDeliver($allDeliver)
    {
        $this->allDeliver = $allDeliver;

        return $this;
    }

    /**
     * Get allDeliver
     *
     * @return integer 
     */
    public function getAllDeliver()
    {
        return $this->allDeliver;
    }

    /**
     * Set allBeDeliver
     *
     * @param integer $allBeDeliver
     * @return TrjUsersInteractionStatistics
     */
    public function setAllBeDeliver($allBeDeliver)
    {
        $this->allBeDeliver = $allBeDeliver;

        return $this;
    }

    /**
     * Get allBeDeliver
     *
     * @return integer 
     */
    public function getAllBeDeliver()
    {
        return $this->allBeDeliver;
    }

    /**
     * Set allMessage
     *
     * @param integer $allMessage
     * @return TrjUsersInteractionStatistics
     */
    public function setAllMessage($allMessage)
    {
        $this->allMessage = $allMessage;

        return $this;
    }

    /**
     * Get allMessage
     *
     * @return integer 
     */
    public function getAllMessage()
    {
        return $this->allMessage;
    }

    /**
     * Set allBeCollect
     *
     * @param integer $allBeCollect
     * @return TrjUsersInteractionStatistics
     */
    public function setAllBeCollect($allBeCollect)
    {
        $this->allBeCollect = $allBeCollect;

        return $this;
    }

    /**
     * Get allBeCollect
     *
     * @return integer 
     */
    public function getAllBeCollect()
    {
        return $this->allBeCollect;
    }

    /**
     * Set allBeVisited
     *
     * @param integer $allBeVisited
     * @return TrjUsersInteractionStatistics
     */
    public function setAllBeVisited($allBeVisited)
    {
        $this->allBeVisited = $allBeVisited;

        return $this;
    }

    /**
     * Get allBeVisited
     *
     * @return integer 
     */
    public function getAllBeVisited()
    {
        return $this->allBeVisited;
    }

    /**
     * Set allViewContacts
     *
     * @param integer $allViewContacts
     * @return TrjUsersInteractionStatistics
     */
    public function setAllViewContacts($allViewContacts)
    {
        $this->allViewContacts = $allViewContacts;

        return $this;
    }

    /**
     * Get allViewContacts
     *
     * @return integer 
     */
    public function getAllViewContacts()
    {
        return $this->allViewContacts;
    }

    /**
     * Set allInvite
     *
     * @param integer $allInvite
     * @return TrjUsersInteractionStatistics
     */
    public function setAllInvite($allInvite)
    {
        $this->allInvite = $allInvite;

        return $this;
    }

    /**
     * Get allInvite
     *
     * @return integer 
     */
    public function getAllInvite()
    {
        return $this->allInvite;
    }

    /**
     * Set allBeInvite
     *
     * @param integer $allBeInvite
     * @return TrjUsersInteractionStatistics
     */
    public function setAllBeInvite($allBeInvite)
    {
        $this->allBeInvite = $allBeInvite;

        return $this;
    }

    /**
     * Get allBeInvite
     *
     * @return integer 
     */
    public function getAllBeInvite()
    {
        return $this->allBeInvite;
    }

    /**
     * Set lastUpdateTime
     *
     * @param integer $lastUpdateTime
     * @return TrjUsersInteractionStatistics
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

    /**
     * Set loginDaysForWeek
     *
     * @param integer $loginDaysForWeek
     * @return TrjUsersInteractionStatistics
     */
    public function setLoginDaysForWeek($loginDaysForWeek)
    {
        $this->loginDaysForWeek = $loginDaysForWeek;

        return $this;
    }

    /**
     * Get loginDaysForWeek
     *
     * @return integer 
     */
    public function getLoginDaysForWeek()
    {
        return $this->loginDaysForWeek;
    }
}
