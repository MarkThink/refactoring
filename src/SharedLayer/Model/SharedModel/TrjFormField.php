<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormField
 */
class TrjFormField
{
    /**
     * @var integer
     */
    private $fieldId;

    /**
     * @var string
     */
    private $fieldName;

    /**
     * @var string
     */
    private $fieldType;

    /**
     * @var integer
     */
    private $fieldAttrType;

    /**
     * @var integer
     */
    private $fieldSort;

    /**
     * @var string
     */
    private $fieldUnits;

    /**
     * @var string
     */
    private $fieldValidate;

    /**
     * @var integer
     */
    private $fieldMaxlength;

    /**
     * @var integer
     */
    private $fieldStatus;

    /**
     * @var string
     */
    private $fieldComment;

    /**
     * @var string
     */
    private $fieldColumnName;

    /**
     * @var string
     */
    private $fieldPlug;

    /**
     * @var integer
     */
    private $relId;

    /**
     * @var integer
     */
    private $catId;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;


    /**
     * Get fieldId
     *
     * @return integer 
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return TrjFormField
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set fieldType
     *
     * @param string $fieldType
     * @return TrjFormField
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set fieldAttrType
     *
     * @param integer $fieldAttrType
     * @return TrjFormField
     */
    public function setFieldAttrType($fieldAttrType)
    {
        $this->fieldAttrType = $fieldAttrType;

        return $this;
    }

    /**
     * Get fieldAttrType
     *
     * @return integer 
     */
    public function getFieldAttrType()
    {
        return $this->fieldAttrType;
    }

    /**
     * Set fieldSort
     *
     * @param integer $fieldSort
     * @return TrjFormField
     */
    public function setFieldSort($fieldSort)
    {
        $this->fieldSort = $fieldSort;

        return $this;
    }

    /**
     * Get fieldSort
     *
     * @return integer 
     */
    public function getFieldSort()
    {
        return $this->fieldSort;
    }

    /**
     * Set fieldUnits
     *
     * @param string $fieldUnits
     * @return TrjFormField
     */
    public function setFieldUnits($fieldUnits)
    {
        $this->fieldUnits = $fieldUnits;

        return $this;
    }

    /**
     * Get fieldUnits
     *
     * @return string 
     */
    public function getFieldUnits()
    {
        return $this->fieldUnits;
    }

    /**
     * Set fieldValidate
     *
     * @param string $fieldValidate
     * @return TrjFormField
     */
    public function setFieldValidate($fieldValidate)
    {
        $this->fieldValidate = $fieldValidate;

        return $this;
    }

    /**
     * Get fieldValidate
     *
     * @return string 
     */
    public function getFieldValidate()
    {
        return $this->fieldValidate;
    }

    /**
     * Set fieldMaxlength
     *
     * @param integer $fieldMaxlength
     * @return TrjFormField
     */
    public function setFieldMaxlength($fieldMaxlength)
    {
        $this->fieldMaxlength = $fieldMaxlength;

        return $this;
    }

    /**
     * Get fieldMaxlength
     *
     * @return integer 
     */
    public function getFieldMaxlength()
    {
        return $this->fieldMaxlength;
    }

    /**
     * Set fieldStatus
     *
     * @param integer $fieldStatus
     * @return TrjFormField
     */
    public function setFieldStatus($fieldStatus)
    {
        $this->fieldStatus = $fieldStatus;

        return $this;
    }

    /**
     * Get fieldStatus
     *
     * @return integer 
     */
    public function getFieldStatus()
    {
        return $this->fieldStatus;
    }

    /**
     * Set fieldComment
     *
     * @param string $fieldComment
     * @return TrjFormField
     */
    public function setFieldComment($fieldComment)
    {
        $this->fieldComment = $fieldComment;

        return $this;
    }

    /**
     * Get fieldComment
     *
     * @return string 
     */
    public function getFieldComment()
    {
        return $this->fieldComment;
    }

    /**
     * Set fieldColumnName
     *
     * @param string $fieldColumnName
     * @return TrjFormField
     */
    public function setFieldColumnName($fieldColumnName)
    {
        $this->fieldColumnName = $fieldColumnName;

        return $this;
    }

    /**
     * Get fieldColumnName
     *
     * @return string 
     */
    public function getFieldColumnName()
    {
        return $this->fieldColumnName;
    }

    /**
     * Set fieldPlug
     *
     * @param string $fieldPlug
     * @return TrjFormField
     */
    public function setFieldPlug($fieldPlug)
    {
        $this->fieldPlug = $fieldPlug;

        return $this;
    }

    /**
     * Get fieldPlug
     *
     * @return string 
     */
    public function getFieldPlug()
    {
        return $this->fieldPlug;
    }

    /**
     * Set relId
     *
     * @param integer $relId
     * @return TrjFormField
     */
    public function setRelId($relId)
    {
        $this->relId = $relId;

        return $this;
    }

    /**
     * Get relId
     *
     * @return integer 
     */
    public function getRelId()
    {
        return $this->relId;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return TrjFormField
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TrjFormField
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
     * Set updated
     *
     * @param integer $updated
     * @return TrjFormField
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
