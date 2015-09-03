<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjInnerWords
 */
class TrjInnerWords
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $word;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $ueeSum;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $times;

    /**
     * @var integer
     */
    private $isdel;


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
     * Set word
     *
     * @param string $word
     * @return TrjInnerWords
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TrjInnerWords
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set ueeSum
     *
     * @param integer $ueeSum
     * @return TrjInnerWords
     */
    public function setUeeSum($ueeSum)
    {
        $this->ueeSum = $ueeSum;

        return $this;
    }

    /**
     * Get ueeSum
     *
     * @return integer 
     */
    public function getUeeSum()
    {
        return $this->ueeSum;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjInnerWords
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

    /**
     * Set sort
     *
     * @param integer $sort
     * @return TrjInnerWords
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TrjInnerWords
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
     * Set times
     *
     * @param integer $times
     * @return TrjInnerWords
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set isdel
     *
     * @param integer $isdel
     * @return TrjInnerWords
     */
    public function setIsdel($isdel)
    {
        $this->isdel = $isdel;

        return $this;
    }

    /**
     * Get isdel
     *
     * @return integer 
     */
    public function getIsdel()
    {
        return $this->isdel;
    }
}
