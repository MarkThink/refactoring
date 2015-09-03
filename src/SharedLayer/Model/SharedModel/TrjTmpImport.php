<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjTmpImport
 */
class TrjTmpImport
{
    /**
     * @var integer
     */
    private $importId;

    /**
     * @var string
     */
    private $tableName;

    /**
     * @var integer
     */
    private $isdeal;


    /**
     * Get importId
     *
     * @return integer 
     */
    public function getImportId()
    {
        return $this->importId;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     * @return TrjTmpImport
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string 
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set isdeal
     *
     * @param integer $isdeal
     * @return TrjTmpImport
     */
    public function setIsdeal($isdeal)
    {
        $this->isdeal = $isdeal;

        return $this;
    }

    /**
     * Get isdeal
     *
     * @return integer 
     */
    public function getIsdeal()
    {
        return $this->isdeal;
    }
}
