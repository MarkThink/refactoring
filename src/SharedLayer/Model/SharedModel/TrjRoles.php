<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjRoles
 */
class TrjRoles
{
    /**
     * @var integer
     */
    private $roleid;

    /**
     * @var string
     */
    private $roleName;

    /**
     * @var integer
     */
    private $adminsNum;

    /**
     * @var string
     */
    private $roleInfo;

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
     * @var integer
     */
    private $isuse;


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
     * Set roleName
     *
     * @param string $roleName
     * @return TrjRoles
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string 
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set adminsNum
     *
     * @param integer $adminsNum
     * @return TrjRoles
     */
    public function setAdminsNum($adminsNum)
    {
        $this->adminsNum = $adminsNum;

        return $this;
    }

    /**
     * Get adminsNum
     *
     * @return integer 
     */
    public function getAdminsNum()
    {
        return $this->adminsNum;
    }

    /**
     * Set roleInfo
     *
     * @param string $roleInfo
     * @return TrjRoles
     */
    public function setRoleInfo($roleInfo)
    {
        $this->roleInfo = $roleInfo;

        return $this;
    }

    /**
     * Get roleInfo
     *
     * @return string 
     */
    public function getRoleInfo()
    {
        return $this->roleInfo;
    }

    /**
     * Set masterid
     *
     * @param integer $masterid
     * @return TrjRoles
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
     * @return TrjRoles
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
     * @return TrjRoles
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

    /**
     * Set isuse
     *
     * @param integer $isuse
     * @return TrjRoles
     */
    public function setIsuse($isuse)
    {
        $this->isuse = $isuse;

        return $this;
    }

    /**
     * Get isuse
     *
     * @return integer 
     */
    public function getIsuse()
    {
        return $this->isuse;
    }
}
