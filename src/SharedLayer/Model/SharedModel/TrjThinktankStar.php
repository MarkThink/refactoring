<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjThinktankStar
 */
class TrjThinktankStar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $zkId;

    /**
     * @var integer
     */
    private $posterId;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var integer
     */
    private $num;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $ip;


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
     * Set zkId
     *
     * @param integer $zkId
     * @return TrjThinktankStar
     */
    public function setZkId($zkId)
    {
        $this->zkId = $zkId;

        return $this;
    }

    /**
     * Get zkId
     *
     * @return integer 
     */
    public function getZkId()
    {
        return $this->zkId;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return TrjThinktankStar
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjThinktankStar
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return TrjThinktankStar
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjThinktankStar
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
     * Set ip
     *
     * @param integer $ip
     * @return TrjThinktankStar
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }
}
