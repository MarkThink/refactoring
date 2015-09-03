<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersHelp
 */
class TrjUsersHelp
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $serviceView;

    /**
     * @var integer
     */
    private $signIn;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set serviceView
     *
     * @param integer $serviceView
     * @return TrjUsersHelp
     */
    public function setServiceView($serviceView)
    {
        $this->serviceView = $serviceView;

        return $this;
    }

    /**
     * Get serviceView
     *
     * @return integer 
     */
    public function getServiceView()
    {
        return $this->serviceView;
    }

    /**
     * Set signIn
     *
     * @param integer $signIn
     * @return TrjUsersHelp
     */
    public function setSignIn($signIn)
    {
        $this->signIn = $signIn;

        return $this;
    }

    /**
     * Get signIn
     *
     * @return integer 
     */
    public function getSignIn()
    {
        return $this->signIn;
    }
}
