<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActionsRole
 */
class TrjActionsRole
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $roleid;

    /**
     * @var integer
     */
    private $actionid;

    /**
     * @var integer
     */
    private $masterid;

    /**
     * @var string
     */
    private $mastername;

    /**
     * @var integer
     */
    private $createdate;


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
     * Set roleid
     *
     * @param integer $roleid
     * @return TrjActionsRole
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
     * Set actionid
     *
     * @param integer $actionid
     * @return TrjActionsRole
     */
    public function setActionid($actionid)
    {
        $this->actionid = $actionid;

        return $this;
    }

    /**
     * Get actionid
     *
     * @return integer 
     */
    public function getActionid()
    {
        return $this->actionid;
    }

    /**
     * Set masterid
     *
     * @param integer $masterid
     * @return TrjActionsRole
     */
    public function setMasterid($masterid)
    {
        $this->masterid = $masterid;

        return $this;
    }

    /**
     * Get masterid
     *
     * @return integer 
     */
    public function getMasterid()
    {
        return $this->masterid;
    }

    /**
     * Set mastername
     *
     * @param string $mastername
     * @return TrjActionsRole
     */
    public function setMastername($mastername)
    {
        $this->mastername = $mastername;

        return $this;
    }

    /**
     * Get mastername
     *
     * @return string 
     */
    public function getMastername()
    {
        return $this->mastername;
    }

    /**
     * Set createdate
     *
     * @param integer $createdate
     * @return TrjActionsRole
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return integer 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }
}
