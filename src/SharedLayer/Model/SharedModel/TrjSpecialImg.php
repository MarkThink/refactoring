<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjSpecialImg
 */
class TrjSpecialImg
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var integer
     */
    private $subjectId;


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
     * Set name
     *
     * @param string $name
     * @return TrjSpecialImg
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TrjSpecialImg
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set subjectId
     *
     * @param integer $subjectId
     * @return TrjSpecialImg
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;

        return $this;
    }

    /**
     * Get subjectId
     *
     * @return integer 
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }
}
