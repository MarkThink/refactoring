<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjOrderTrack
 */
class TrjOrderTrack
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var string
     */
    private $trackid;

    /**
     * @var string
     */
    private $httpReferer;

    /**
     * @var string
     */
    private $httpHref;

    /**
     * @var string
     */
    private $sessionId;


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
     * Set orderId
     *
     * @param integer $orderId
     * @return TrjOrderTrack
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set trackid
     *
     * @param string $trackid
     * @return TrjOrderTrack
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return string 
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrjOrderTrack
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string 
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set httpHref
     *
     * @param string $httpHref
     * @return TrjOrderTrack
     */
    public function setHttpHref($httpHref)
    {
        $this->httpHref = $httpHref;

        return $this;
    }

    /**
     * Get httpHref
     *
     * @return string 
     */
    public function getHttpHref()
    {
        return $this->httpHref;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     * @return TrjOrderTrack
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}
