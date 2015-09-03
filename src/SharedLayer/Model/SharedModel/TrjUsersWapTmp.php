<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersWapTmp
 */
class TrjUsersWapTmp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $page;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $userType;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $zjxmId;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var integer
     */
    private $isInsert;


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
     * Set page
     *
     * @param integer $page
     * @return TrjUsersWapTmp
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return integer 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TrjUsersWapTmp
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return TrjUsersWapTmp
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return TrjUsersWapTmp
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
     * Set content
     *
     * @param string $content
     * @return TrjUsersWapTmp
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
     * Set zjxmId
     *
     * @param integer $zjxmId
     * @return TrjUsersWapTmp
     */
    public function setZjxmId($zjxmId)
    {
        $this->zjxmId = $zjxmId;

        return $this;
    }

    /**
     * Get zjxmId
     *
     * @return integer 
     */
    public function getZjxmId()
    {
        return $this->zjxmId;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TrjUsersWapTmp
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set isInsert
     *
     * @param integer $isInsert
     * @return TrjUsersWapTmp
     */
    public function setIsInsert($isInsert)
    {
        $this->isInsert = $isInsert;

        return $this;
    }

    /**
     * Get isInsert
     *
     * @return integer 
     */
    public function getIsInsert()
    {
        return $this->isInsert;
    }
}
