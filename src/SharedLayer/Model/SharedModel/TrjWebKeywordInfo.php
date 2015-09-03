<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjWebKeywordInfo
 */
class TrjWebKeywordInfo
{
    /**
     * @var integer
     */
    private $kid;

    /**
     * @var integer
     */
    private $infoid;

    /**
     * @var integer
     */
    private $infoUpdated;

    /**
     * @var integer
     */
    private $listorder;


    /**
     * Get kid
     *
     * @return integer 
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Set infoid
     *
     * @param integer $infoid
     * @return TrjWebKeywordInfo
     */
    public function setInfoid($infoid)
    {
        $this->infoid = $infoid;

        return $this;
    }

    /**
     * Get infoid
     *
     * @return integer 
     */
    public function getInfoid()
    {
        return $this->infoid;
    }

    /**
     * Set infoUpdated
     *
     * @param integer $infoUpdated
     * @return TrjWebKeywordInfo
     */
    public function setInfoUpdated($infoUpdated)
    {
        $this->infoUpdated = $infoUpdated;

        return $this;
    }

    /**
     * Get infoUpdated
     *
     * @return integer 
     */
    public function getInfoUpdated()
    {
        return $this->infoUpdated;
    }

    /**
     * Set listorder
     *
     * @param integer $listorder
     * @return TrjWebKeywordInfo
     */
    public function setListorder($listorder)
    {
        $this->listorder = $listorder;

        return $this;
    }

    /**
     * Get listorder
     *
     * @return integer 
     */
    public function getListorder()
    {
        return $this->listorder;
    }
}
