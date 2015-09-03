<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersNotice
 */
class TrjUsersNotice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $fromUid;

    /**
     * @var string
     */
    private $fromUname;

    /**
     * @var integer
     */
    private $toUid;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $view;

    /**
     * @var integer
     */
    private $created;


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
     * Set type
     *
     * @param integer $type
     * @return TrjUsersNotice
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
     * Set fromUid
     *
     * @param integer $fromUid
     * @return TrjUsersNotice
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;

        return $this;
    }

    /**
     * Get fromUid
     *
     * @return integer 
     */
    public function getFromUid()
    {
        return $this->fromUid;
    }

    /**
     * Set fromUname
     *
     * @param string $fromUname
     * @return TrjUsersNotice
     */
    public function setFromUname($fromUname)
    {
        $this->fromUname = $fromUname;

        return $this;
    }

    /**
     * Get fromUname
     *
     * @return string 
     */
    public function getFromUname()
    {
        return $this->fromUname;
    }

    /**
     * Set toUid
     *
     * @param integer $toUid
     * @return TrjUsersNotice
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
     * Set itemId
     *
     * @param integer $itemId
     * @return TrjUsersNotice
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrjUsersNotice
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
     * Set view
     *
     * @param integer $view
     * @return TrjUsersNotice
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjUsersNotice
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
