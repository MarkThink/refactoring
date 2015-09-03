<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjBlueBookZhengding
 */
class TrjBlueBookZhengding
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $buleBookNum;

    /**
     * @var integer
     */
    private $shangHuiDaQuanNum;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $poster;

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
     * Set buleBookNum
     *
     * @param integer $buleBookNum
     * @return TrjBlueBookZhengding
     */
    public function setBuleBookNum($buleBookNum)
    {
        $this->buleBookNum = $buleBookNum;

        return $this;
    }

    /**
     * Get buleBookNum
     *
     * @return integer 
     */
    public function getBuleBookNum()
    {
        return $this->buleBookNum;
    }

    /**
     * Set shangHuiDaQuanNum
     *
     * @param integer $shangHuiDaQuanNum
     * @return TrjBlueBookZhengding
     */
    public function setShangHuiDaQuanNum($shangHuiDaQuanNum)
    {
        $this->shangHuiDaQuanNum = $shangHuiDaQuanNum;

        return $this;
    }

    /**
     * Get shangHuiDaQuanNum
     *
     * @return integer 
     */
    public function getShangHuiDaQuanNum()
    {
        return $this->shangHuiDaQuanNum;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return TrjBlueBookZhengding
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TrjBlueBookZhengding
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
     * Set phone
     *
     * @param string $phone
     * @return TrjBlueBookZhengding
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjBlueBookZhengding
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return TrjBlueBookZhengding
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return TrjBlueBookZhengding
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return TrjBlueBookZhengding
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
     * Set created
     *
     * @param integer $created
     * @return TrjBlueBookZhengding
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
     * @return TrjBlueBookZhengding
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
