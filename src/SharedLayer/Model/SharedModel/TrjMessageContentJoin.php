<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjMessageContentJoin
 */
class TrjMessageContentJoin
{
    /**
     * @var integer
     */
    private $id;

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
    private $messageId;

    /**
     * @var integer
     */
    private $isRead;

    /**
     * @var integer
     */
    private $isDel;


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
     * Set listId
     *
     * @param integer $listId
     * @return TrjMessageContentJoin
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
     * @return TrjMessageContentJoin
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
     * Set messageId
     *
     * @param integer $messageId
     * @return TrjMessageContentJoin
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set isRead
     *
     * @param integer $isRead
     * @return TrjMessageContentJoin
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return integer 
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set isDel
     *
     * @param integer $isDel
     * @return TrjMessageContentJoin
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer 
     */
    public function getIsDel()
    {
        return $this->isDel;
    }
}
