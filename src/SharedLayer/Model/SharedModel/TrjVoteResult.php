<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjVoteResult
 */
class TrjVoteResult
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $voteId;

    /**
     * @var string
     */
    private $content;

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
     * Set voteId
     *
     * @param string $voteId
     * @return TrjVoteResult
     */
    public function setVoteId($voteId)
    {
        $this->voteId = $voteId;

        return $this;
    }

    /**
     * Get voteId
     *
     * @return string 
     */
    public function getVoteId()
    {
        return $this->voteId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjVoteResult
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjVoteResult
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
     * @return TrjVoteResult
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
