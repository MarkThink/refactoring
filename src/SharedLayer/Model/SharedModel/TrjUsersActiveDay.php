<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersActiveDay
 */
class TrjUsersActiveDay
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $exchange;

    /**
     * @var string
     */
    private $toudi;

    /**
     * @var string
     */
    private $publish;

    /**
     * @var string
     */
    private $quick;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $refresh;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $order;


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
     * Set created
     *
     * @param integer $created
     * @return TrjUsersActiveDay
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

    /**
     * Set login
     *
     * @param string $login
     * @return TrjUsersActiveDay
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set exchange
     *
     * @param string $exchange
     * @return TrjUsersActiveDay
     */
    public function setExchange($exchange)
    {
        $this->exchange = $exchange;

        return $this;
    }

    /**
     * Get exchange
     *
     * @return string 
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     * Set toudi
     *
     * @param string $toudi
     * @return TrjUsersActiveDay
     */
    public function setToudi($toudi)
    {
        $this->toudi = $toudi;

        return $this;
    }

    /**
     * Get toudi
     *
     * @return string 
     */
    public function getToudi()
    {
        return $this->toudi;
    }

    /**
     * Set publish
     *
     * @param string $publish
     * @return TrjUsersActiveDay
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get publish
     *
     * @return string 
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set quick
     *
     * @param string $quick
     * @return TrjUsersActiveDay
     */
    public function setQuick($quick)
    {
        $this->quick = $quick;

        return $this;
    }

    /**
     * Get quick
     *
     * @return string 
     */
    public function getQuick()
    {
        return $this->quick;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TrjUsersActiveDay
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set refresh
     *
     * @param string $refresh
     * @return TrjUsersActiveDay
     */
    public function setRefresh($refresh)
    {
        $this->refresh = $refresh;

        return $this;
    }

    /**
     * Get refresh
     *
     * @return string 
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return TrjUsersActiveDay
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set order
     *
     * @param string $order
     * @return TrjUsersActiveDay
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return string 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
