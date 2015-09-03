<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSite
 */
class TrjSite
{
    /**
     * @var integer
     */
    private $siteId;

    /**
     * @var string
     */
    private $siteName;

    /**
     * @var string
     */
    private $areaIds;

    /**
     * @var integer
     */
    private $created;


    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set siteName
     *
     * @param string $siteName
     * @return TrjSite
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get siteName
     *
     * @return string 
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set areaIds
     *
     * @param string $areaIds
     * @return TrjSite
     */
    public function setAreaIds($areaIds)
    {
        $this->areaIds = $areaIds;

        return $this;
    }

    /**
     * Get areaIds
     *
     * @return string 
     */
    public function getAreaIds()
    {
        return $this->areaIds;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjSite
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
}
