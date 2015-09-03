<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdmins
 */
class TrjAdmins
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $lastlogin;

    /**
     * @var integer
     */
    private $bdate;

    /**
     * @var string
     */
    private $truename;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $roleid;

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
     * Set username
     *
     * @param string $username
     * @return TrjAdmins
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return TrjAdmins
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastlogin
     *
     * @param integer $lastlogin
     * @return TrjAdmins
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return integer 
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * Set bdate
     *
     * @param integer $bdate
     * @return TrjAdmins
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;

        return $this;
    }

    /**
     * Get bdate
     *
     * @return integer 
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * Set truename
     *
     * @param string $truename
     * @return TrjAdmins
     */
    public function setTruename($truename)
    {
        $this->truename = $truename;

        return $this;
    }

    /**
     * Get truename
     *
     * @return string 
     */
    public function getTruename()
    {
        return $this->truename;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TrjAdmins
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     * @return TrjAdmins
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjAdmins
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
