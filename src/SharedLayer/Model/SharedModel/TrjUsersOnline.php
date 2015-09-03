<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersOnline
 */
class TrjUsersOnline
{
    /**
     * @var integer
     */
    private $uid;

    /**
     * @var integer
     */
    private $ctime;


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
     * Set ctime
     *
     * @param integer $ctime
     * @return TrjUsersOnline
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer 
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
