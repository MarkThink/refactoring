<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjAdminsActions
 */
class TrjAdminsActions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $masterid;

    /**
     * @var integer
     */
    private $actionid;

    /**
     * @var integer
     */
    private $masterid2;

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
     * Set masterid
     *
     * @param integer $masterid
     * @return TrjAdminsActions
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
     * Set actionid
     *
     * @param integer $actionid
     * @return TrjAdminsActions
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
     * Set masterid2
     *
     * @param integer $masterid2
     * @return TrjAdminsActions
     */
    public function setMasterid2($masterid2)
    {
        $this->masterid2 = $masterid2;

        return $this;
    }

    /**
     * Get masterid2
     *
     * @return integer 
     */
    public function getMasterid2()
    {
        return $this->masterid2;
    }

    /**
     * Set mastername
     *
     * @param string $mastername
     * @return TrjAdminsActions
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
     * @return TrjAdminsActions
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
