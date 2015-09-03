<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivityFilmTicket
 */
class TrjActivityFilmTicket
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cardSn;

    /**
     * @var string
     */
    private $cardPassword;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $sendTime;


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
     * Set cardSn
     *
     * @param string $cardSn
     * @return TrjActivityFilmTicket
     */
    public function setCardSn($cardSn)
    {
        $this->cardSn = $cardSn;

        return $this;
    }

    /**
     * Get cardSn
     *
     * @return string 
     */
    public function getCardSn()
    {
        return $this->cardSn;
    }

    /**
     * Set cardPassword
     *
     * @param string $cardPassword
     * @return TrjActivityFilmTicket
     */
    public function setCardPassword($cardPassword)
    {
        $this->cardPassword = $cardPassword;

        return $this;
    }

    /**
     * Get cardPassword
     *
     * @return string 
     */
    public function getCardPassword()
    {
        return $this->cardPassword;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjActivityFilmTicket
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
     * Set sendTime
     *
     * @param integer $sendTime
     * @return TrjActivityFilmTicket
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;

        return $this;
    }

    /**
     * Get sendTime
     *
     * @return integer 
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }
}
