<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFundsInstitution
 */
class TrjFundsInstitution
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $desc;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $uname;


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
     * Set title
     *
     * @param string $title
     * @return TrjFundsInstitution
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjFundsInstitution
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
     * Set logo
     *
     * @param string $logo
     * @return TrjFundsInstitution
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return TrjFundsInstitution
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return TrjFundsInstitution
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TrjFundsInstitution
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjFundsInstitution
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
     * Set uid
     *
     * @param integer $uid
     * @return TrjFundsInstitution
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set uname
     *
     * @param string $uname
     * @return TrjFundsInstitution
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string 
     */
    public function getUname()
    {
        return $this->uname;
    }
}
