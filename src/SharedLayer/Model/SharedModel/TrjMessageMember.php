<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMessageMember
 */
class TrjMessageMember
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $memberUid;

    /**
     * @var integer
     */
    private $toUid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $newNum;

    /**
     * @var integer
     */
    private $messageNum;

    /**
     * @var integer
     */
    private $isReply;


    /**
     * Set listId
     *
     * @param integer $listId
     * @return TrjMessageMember
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return integer 
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set memberUid
     *
     * @param integer $memberUid
     * @return TrjMessageMember
     */
    public function setMemberUid($memberUid)
    {
        $this->memberUid = $memberUid;

        return $this;
    }

    /**
     * Get memberUid
     *
     * @return integer 
     */
    public function getMemberUid()
    {
        return $this->memberUid;
    }

    /**
     * Set toUid
     *
     * @param integer $toUid
     * @return TrjMessageMember
     */
    public function setToUid($toUid)
    {
        $this->toUid = $toUid;

        return $this;
    }

    /**
     * Get toUid
     *
     * @return integer 
     */
    public function getToUid()
    {
        return $this->toUid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjMessageMember
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set newNum
     *
     * @param integer $newNum
     * @return TrjMessageMember
     */
    public function setNewNum($newNum)
    {
        $this->newNum = $newNum;

        return $this;
    }

    /**
     * Get newNum
     *
     * @return integer 
     */
    public function getNewNum()
    {
        return $this->newNum;
    }

    /**
     * Set messageNum
     *
     * @param integer $messageNum
     * @return TrjMessageMember
     */
    public function setMessageNum($messageNum)
    {
        $this->messageNum = $messageNum;

        return $this;
    }

    /**
     * Get messageNum
     *
     * @return integer 
     */
    public function getMessageNum()
    {
        return $this->messageNum;
    }

    /**
     * Set isReply
     *
     * @param integer $isReply
     * @return TrjMessageMember
     */
    public function setIsReply($isReply)
    {
        $this->isReply = $isReply;

        return $this;
    }

    /**
     * Get isReply
     *
     * @return integer 
     */
    public function getIsReply()
    {
        return $this->isReply;
    }
}
