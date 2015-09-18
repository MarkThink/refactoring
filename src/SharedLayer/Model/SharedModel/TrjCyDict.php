<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjCyDict
 */
class TrjCyDict
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $chengyu;

    /**
     * @var string
     */
    private $pinyin;

    /**
     * @var string
     */
    private $jieshi;

    /**
     * @var string
     */
    private $chuchu;

    /**
     * @var string
     */
    private $lizi;

    /**
     * @var string
     */
    private $spinyin;


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
     * Set chengyu
     *
     * @param string $chengyu
     * @return TrjCyDict
     */
    public function setChengyu($chengyu)
    {
        $this->chengyu = $chengyu;

        return $this;
    }

    /**
     * Get chengyu
     *
     * @return string 
     */
    public function getChengyu()
    {
        return $this->chengyu;
    }

    /**
     * Set pinyin
     *
     * @param string $pinyin
     * @return TrjCyDict
     */
    public function setPinyin($pinyin)
    {
        $this->pinyin = $pinyin;

        return $this;
    }

    /**
     * Get pinyin
     *
     * @return string 
     */
    public function getPinyin()
    {
        return $this->pinyin;
    }

    /**
     * Set jieshi
     *
     * @param string $jieshi
     * @return TrjCyDict
     */
    public function setJieshi($jieshi)
    {
        $this->jieshi = $jieshi;

        return $this;
    }

    /**
     * Get jieshi
     *
     * @return string 
     */
    public function getJieshi()
    {
        return $this->jieshi;
    }

    /**
     * Set chuchu
     *
     * @param string $chuchu
     * @return TrjCyDict
     */
    public function setChuchu($chuchu)
    {
        $this->chuchu = $chuchu;

        return $this;
    }

    /**
     * Get chuchu
     *
     * @return string 
     */
    public function getChuchu()
    {
        return $this->chuchu;
    }

    /**
     * Set lizi
     *
     * @param string $lizi
     * @return TrjCyDict
     */
    public function setLizi($lizi)
    {
        $this->lizi = $lizi;

        return $this;
    }

    /**
     * Get lizi
     *
     * @return string 
     */
    public function getLizi()
    {
        return $this->lizi;
    }

    /**
     * Set spinyin
     *
     * @param string $spinyin
     * @return TrjCyDict
     */
    public function setSpinyin($spinyin)
    {
        $this->spinyin = $spinyin;

        return $this;
    }

    /**
     * Get spinyin
     *
     * @return string 
     */
    public function getSpinyin()
    {
        return $this->spinyin;
    }
}
