<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjActivitieSpecial
 */
class TrjActivitieSpecial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $banner;

    /**
     * @var string
     */
    private $bannerColor;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $reviewAtt;

    /**
     * @var string
     */
    private $reviewAttName;

    /**
     * @var string
     */
    private $cooperative;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $page1Detail;

    /**
     * @var string
     */
    private $page2Detail;

    /**
     * @var string
     */
    private $page3Detail;

    /**
     * @var string
     */
    private $page4Detail;

    /**
     * @var string
     */
    private $page5Detail;


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
     * Set aid
     *
     * @param integer $aid
     * @return TrjActivitieSpecial
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return TrjActivitieSpecial
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set bannerColor
     *
     * @param string $bannerColor
     * @return TrjActivitieSpecial
     */
    public function setBannerColor($bannerColor)
    {
        $this->bannerColor = $bannerColor;

        return $this;
    }

    /**
     * Get bannerColor
     *
     * @return string 
     */
    public function getBannerColor()
    {
        return $this->bannerColor;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return TrjActivitieSpecial
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set reviewAtt
     *
     * @param string $reviewAtt
     * @return TrjActivitieSpecial
     */
    public function setReviewAtt($reviewAtt)
    {
        $this->reviewAtt = $reviewAtt;

        return $this;
    }

    /**
     * Get reviewAtt
     *
     * @return string 
     */
    public function getReviewAtt()
    {
        return $this->reviewAtt;
    }

    /**
     * Set reviewAttName
     *
     * @param string $reviewAttName
     * @return TrjActivitieSpecial
     */
    public function setReviewAttName($reviewAttName)
    {
        $this->reviewAttName = $reviewAttName;

        return $this;
    }

    /**
     * Get reviewAttName
     *
     * @return string 
     */
    public function getReviewAttName()
    {
        return $this->reviewAttName;
    }

    /**
     * Set cooperative
     *
     * @param string $cooperative
     * @return TrjActivitieSpecial
     */
    public function setCooperative($cooperative)
    {
        $this->cooperative = $cooperative;

        return $this;
    }

    /**
     * Get cooperative
     *
     * @return string 
     */
    public function getCooperative()
    {
        return $this->cooperative;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TrjActivitieSpecial
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set page1Detail
     *
     * @param string $page1Detail
     * @return TrjActivitieSpecial
     */
    public function setPage1Detail($page1Detail)
    {
        $this->page1Detail = $page1Detail;

        return $this;
    }

    /**
     * Get page1Detail
     *
     * @return string 
     */
    public function getPage1Detail()
    {
        return $this->page1Detail;
    }

    /**
     * Set page2Detail
     *
     * @param string $page2Detail
     * @return TrjActivitieSpecial
     */
    public function setPage2Detail($page2Detail)
    {
        $this->page2Detail = $page2Detail;

        return $this;
    }

    /**
     * Get page2Detail
     *
     * @return string 
     */
    public function getPage2Detail()
    {
        return $this->page2Detail;
    }

    /**
     * Set page3Detail
     *
     * @param string $page3Detail
     * @return TrjActivitieSpecial
     */
    public function setPage3Detail($page3Detail)
    {
        $this->page3Detail = $page3Detail;

        return $this;
    }

    /**
     * Get page3Detail
     *
     * @return string 
     */
    public function getPage3Detail()
    {
        return $this->page3Detail;
    }

    /**
     * Set page4Detail
     *
     * @param string $page4Detail
     * @return TrjActivitieSpecial
     */
    public function setPage4Detail($page4Detail)
    {
        $this->page4Detail = $page4Detail;

        return $this;
    }

    /**
     * Get page4Detail
     *
     * @return string 
     */
    public function getPage4Detail()
    {
        return $this->page4Detail;
    }

    /**
     * Set page5Detail
     *
     * @param string $page5Detail
     * @return TrjActivitieSpecial
     */
    public function setPage5Detail($page5Detail)
    {
        $this->page5Detail = $page5Detail;

        return $this;
    }

    /**
     * Get page5Detail
     *
     * @return string 
     */
    public function getPage5Detail()
    {
        return $this->page5Detail;
    }
}
