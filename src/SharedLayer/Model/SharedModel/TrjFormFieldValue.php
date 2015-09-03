<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjFormFieldValue
 */
class TrjFormFieldValue
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $attrId;

    /**
     * @var integer
     */
    private $fieldId;

    /**
     * @var string
     */
    private $fieldValue;

    /**
     * @var integer
     */
    private $fieldValueSort;

    /**
     * @var integer
     */
    private $fieldValueExtra;

    /**
     * @var integer
     */
    private $haveRelative;

    /**
     * @var integer
     */
    private $fieldValueBelong;

    /**
     * @var integer
     */
    private $formCategoryId;

    /**
     * @var integer
     */
    private $fieldValueUnique;


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
     * Set attrId
     *
     * @param integer $attrId
     * @return TrjFormFieldValue
     */
    public function setAttrId($attrId)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attrId
     *
     * @return integer 
     */
    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * Set fieldId
     *
     * @param integer $fieldId
     * @return TrjFormFieldValue
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

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
     * Set fieldValue
     *
     * @param string $fieldValue
     * @return TrjFormFieldValue
     */
    public function setFieldValue($fieldValue)
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }

    /**
     * Get fieldValue
     *
     * @return string 
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * Set fieldValueSort
     *
     * @param integer $fieldValueSort
     * @return TrjFormFieldValue
     */
    public function setFieldValueSort($fieldValueSort)
    {
        $this->fieldValueSort = $fieldValueSort;

        return $this;
    }

    /**
     * Get fieldValueSort
     *
     * @return integer 
     */
    public function getFieldValueSort()
    {
        return $this->fieldValueSort;
    }

    /**
     * Set fieldValueExtra
     *
     * @param integer $fieldValueExtra
     * @return TrjFormFieldValue
     */
    public function setFieldValueExtra($fieldValueExtra)
    {
        $this->fieldValueExtra = $fieldValueExtra;

        return $this;
    }

    /**
     * Get fieldValueExtra
     *
     * @return integer 
     */
    public function getFieldValueExtra()
    {
        return $this->fieldValueExtra;
    }

    /**
     * Set haveRelative
     *
     * @param integer $haveRelative
     * @return TrjFormFieldValue
     */
    public function setHaveRelative($haveRelative)
    {
        $this->haveRelative = $haveRelative;

        return $this;
    }

    /**
     * Get haveRelative
     *
     * @return integer 
     */
    public function getHaveRelative()
    {
        return $this->haveRelative;
    }

    /**
     * Set fieldValueBelong
     *
     * @param integer $fieldValueBelong
     * @return TrjFormFieldValue
     */
    public function setFieldValueBelong($fieldValueBelong)
    {
        $this->fieldValueBelong = $fieldValueBelong;

        return $this;
    }

    /**
     * Get fieldValueBelong
     *
     * @return integer 
     */
    public function getFieldValueBelong()
    {
        return $this->fieldValueBelong;
    }

    /**
     * Set formCategoryId
     *
     * @param integer $formCategoryId
     * @return TrjFormFieldValue
     */
    public function setFormCategoryId($formCategoryId)
    {
        $this->formCategoryId = $formCategoryId;

        return $this;
    }

    /**
     * Get formCategoryId
     *
     * @return integer 
     */
    public function getFormCategoryId()
    {
        return $this->formCategoryId;
    }

    /**
     * Set fieldValueUnique
     *
     * @param integer $fieldValueUnique
     * @return TrjFormFieldValue
     */
    public function setFieldValueUnique($fieldValueUnique)
    {
        $this->fieldValueUnique = $fieldValueUnique;

        return $this;
    }

    /**
     * Get fieldValueUnique
     *
     * @return integer 
     */
    public function getFieldValueUnique()
    {
        return $this->fieldValueUnique;
    }
}
