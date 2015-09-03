<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersDetail
 */
class TrjUsersDetail
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $departmentName;

    /**
     * @var integer
     */
    private $introduceCheck;

    /**
     * @var integer
     */
    private $introduceCtime;

    /**
     * @var string
     */
    private $introduce;

    /**
     * @var string
     */
    private $tzIndustry;

    /**
     * @var string
     */
    private $tzIndustryParent;

    /**
     * @var string
     */
    private $tzIndustryKeyword;

    /**
     * @var string
     */
    private $tzRound;

    /**
     * @var integer
     */
    private $tzCompanyNum;

    /**
     * @var string
     */
    private $tzArea;

    /**
     * @var integer
     */
    private $companyType;

    /**
     * @var string
     */
    private $companyTypeName;

    /**
     * @var integer
     */
    private $serviceType;

    /**
     * @var string
     */
    private $serviceTypeName;

    /**
     * @var string
     */
    private $serviceIntroduce;

    /**
     * @var string
     */
    private $personalIntroduce;

    /**
     * @var string
     */
    private $mainBusiness;

    /**
     * @var integer
     */
    private $manageFunds;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $weibo;

    /**
     * @var string
     */
    private $companyLogo;

    /**
     * @var integer
     */
    private $companyRegistPlace;

    /**
     * @var string
     */
    private $companyAddress;

    /**
     * @var string
     */
    private $companyPostcode;

    /**
     * @var integer
     */
    private $groupNature;

    /**
     * @var integer
     */
    private $registeredCapital;

    /**
     * @var integer
     */
    private $annualSales;

    /**
     * @var integer
     */
    private $employeNum;

    /**
     * @var integer
     */
    private $yearOld;

    /**
     * @var integer
     */
    private $companyDate;

    /**
     * @var integer
     */
    private $honestyDay;

    /**
     * @var integer
     */
    private $honestyCreditDay;

    /**
     * @var integer
     */
    private $serviceUsersDay;

    /**
     * @var integer
     */
    private $serviceUsersCreditDay;

    /**
     * @var string
     */
    private $pics;

    /**
     * @var integer
     */
    private $isEarnings;

    /**
     * @var string
     */
    private $lastYearRevenue;

    /**
     * @var string
     */
    private $lastYearProfit;

    /**
     * @var string
     */
    private $netAsset;

    /**
     * @var string
     */
    private $yearsRevenue;

    /**
     * @var string
     */
    private $yearsProfit;

    /**
     * @var integer
     */
    private $lastFiscalRevenue;

    /**
     * @var string
     */
    private $businessLicenseCode;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set departmentName
     *
     * @param string $departmentName
     * @return TrjUsersDetail
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Get departmentName
     *
     * @return string 
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Set introduceCheck
     *
     * @param integer $introduceCheck
     * @return TrjUsersDetail
     */
    public function setIntroduceCheck($introduceCheck)
    {
        $this->introduceCheck = $introduceCheck;

        return $this;
    }

    /**
     * Get introduceCheck
     *
     * @return integer 
     */
    public function getIntroduceCheck()
    {
        return $this->introduceCheck;
    }

    /**
     * Set introduceCtime
     *
     * @param integer $introduceCtime
     * @return TrjUsersDetail
     */
    public function setIntroduceCtime($introduceCtime)
    {
        $this->introduceCtime = $introduceCtime;

        return $this;
    }

    /**
     * Get introduceCtime
     *
     * @return integer 
     */
    public function getIntroduceCtime()
    {
        return $this->introduceCtime;
    }

    /**
     * Set introduce
     *
     * @param string $introduce
     * @return TrjUsersDetail
     */
    public function setIntroduce($introduce)
    {
        $this->introduce = $introduce;

        return $this;
    }

    /**
     * Get introduce
     *
     * @return string 
     */
    public function getIntroduce()
    {
        return $this->introduce;
    }

    /**
     * Set tzIndustry
     *
     * @param string $tzIndustry
     * @return TrjUsersDetail
     */
    public function setTzIndustry($tzIndustry)
    {
        $this->tzIndustry = $tzIndustry;

        return $this;
    }

    /**
     * Get tzIndustry
     *
     * @return string 
     */
    public function getTzIndustry()
    {
        return $this->tzIndustry;
    }

    /**
     * Set tzIndustryParent
     *
     * @param string $tzIndustryParent
     * @return TrjUsersDetail
     */
    public function setTzIndustryParent($tzIndustryParent)
    {
        $this->tzIndustryParent = $tzIndustryParent;

        return $this;
    }

    /**
     * Get tzIndustryParent
     *
     * @return string 
     */
    public function getTzIndustryParent()
    {
        return $this->tzIndustryParent;
    }

    /**
     * Set tzIndustryKeyword
     *
     * @param string $tzIndustryKeyword
     * @return TrjUsersDetail
     */
    public function setTzIndustryKeyword($tzIndustryKeyword)
    {
        $this->tzIndustryKeyword = $tzIndustryKeyword;

        return $this;
    }

    /**
     * Get tzIndustryKeyword
     *
     * @return string 
     */
    public function getTzIndustryKeyword()
    {
        return $this->tzIndustryKeyword;
    }

    /**
     * Set tzRound
     *
     * @param string $tzRound
     * @return TrjUsersDetail
     */
    public function setTzRound($tzRound)
    {
        $this->tzRound = $tzRound;

        return $this;
    }

    /**
     * Get tzRound
     *
     * @return string 
     */
    public function getTzRound()
    {
        return $this->tzRound;
    }

    /**
     * Set tzCompanyNum
     *
     * @param integer $tzCompanyNum
     * @return TrjUsersDetail
     */
    public function setTzCompanyNum($tzCompanyNum)
    {
        $this->tzCompanyNum = $tzCompanyNum;

        return $this;
    }

    /**
     * Get tzCompanyNum
     *
     * @return integer 
     */
    public function getTzCompanyNum()
    {
        return $this->tzCompanyNum;
    }

    /**
     * Set tzArea
     *
     * @param string $tzArea
     * @return TrjUsersDetail
     */
    public function setTzArea($tzArea)
    {
        $this->tzArea = $tzArea;

        return $this;
    }

    /**
     * Get tzArea
     *
     * @return string 
     */
    public function getTzArea()
    {
        return $this->tzArea;
    }

    /**
     * Set companyType
     *
     * @param integer $companyType
     * @return TrjUsersDetail
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get companyType
     *
     * @return integer 
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * Set companyTypeName
     *
     * @param string $companyTypeName
     * @return TrjUsersDetail
     */
    public function setCompanyTypeName($companyTypeName)
    {
        $this->companyTypeName = $companyTypeName;

        return $this;
    }

    /**
     * Get companyTypeName
     *
     * @return string 
     */
    public function getCompanyTypeName()
    {
        return $this->companyTypeName;
    }

    /**
     * Set serviceType
     *
     * @param integer $serviceType
     * @return TrjUsersDetail
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Get serviceType
     *
     * @return integer 
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Set serviceTypeName
     *
     * @param string $serviceTypeName
     * @return TrjUsersDetail
     */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->serviceTypeName = $serviceTypeName;

        return $this;
    }

    /**
     * Get serviceTypeName
     *
     * @return string 
     */
    public function getServiceTypeName()
    {
        return $this->serviceTypeName;
    }

    /**
     * Set serviceIntroduce
     *
     * @param string $serviceIntroduce
     * @return TrjUsersDetail
     */
    public function setServiceIntroduce($serviceIntroduce)
    {
        $this->serviceIntroduce = $serviceIntroduce;

        return $this;
    }

    /**
     * Get serviceIntroduce
     *
     * @return string 
     */
    public function getServiceIntroduce()
    {
        return $this->serviceIntroduce;
    }

    /**
     * Set personalIntroduce
     *
     * @param string $personalIntroduce
     * @return TrjUsersDetail
     */
    public function setPersonalIntroduce($personalIntroduce)
    {
        $this->personalIntroduce = $personalIntroduce;

        return $this;
    }

    /**
     * Get personalIntroduce
     *
     * @return string 
     */
    public function getPersonalIntroduce()
    {
        return $this->personalIntroduce;
    }

    /**
     * Set mainBusiness
     *
     * @param string $mainBusiness
     * @return TrjUsersDetail
     */
    public function setMainBusiness($mainBusiness)
    {
        $this->mainBusiness = $mainBusiness;

        return $this;
    }

    /**
     * Get mainBusiness
     *
     * @return string 
     */
    public function getMainBusiness()
    {
        return $this->mainBusiness;
    }

    /**
     * Set manageFunds
     *
     * @param integer $manageFunds
     * @return TrjUsersDetail
     */
    public function setManageFunds($manageFunds)
    {
        $this->manageFunds = $manageFunds;

        return $this;
    }

    /**
     * Get manageFunds
     *
     * @return integer 
     */
    public function getManageFunds()
    {
        return $this->manageFunds;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return TrjUsersDetail
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set weibo
     *
     * @param string $weibo
     * @return TrjUsersDetail
     */
    public function setWeibo($weibo)
    {
        $this->weibo = $weibo;

        return $this;
    }

    /**
     * Get weibo
     *
     * @return string 
     */
    public function getWeibo()
    {
        return $this->weibo;
    }

    /**
     * Set companyLogo
     *
     * @param string $companyLogo
     * @return TrjUsersDetail
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Get companyLogo
     *
     * @return string 
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * Set companyRegistPlace
     *
     * @param integer $companyRegistPlace
     * @return TrjUsersDetail
     */
    public function setCompanyRegistPlace($companyRegistPlace)
    {
        $this->companyRegistPlace = $companyRegistPlace;

        return $this;
    }

    /**
     * Get companyRegistPlace
     *
     * @return integer 
     */
    public function getCompanyRegistPlace()
    {
        return $this->companyRegistPlace;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     * @return TrjUsersDetail
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string 
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Set companyPostcode
     *
     * @param string $companyPostcode
     * @return TrjUsersDetail
     */
    public function setCompanyPostcode($companyPostcode)
    {
        $this->companyPostcode = $companyPostcode;

        return $this;
    }

    /**
     * Get companyPostcode
     *
     * @return string 
     */
    public function getCompanyPostcode()
    {
        return $this->companyPostcode;
    }

    /**
     * Set groupNature
     *
     * @param integer $groupNature
     * @return TrjUsersDetail
     */
    public function setGroupNature($groupNature)
    {
        $this->groupNature = $groupNature;

        return $this;
    }

    /**
     * Get groupNature
     *
     * @return integer 
     */
    public function getGroupNature()
    {
        return $this->groupNature;
    }

    /**
     * Set registeredCapital
     *
     * @param integer $registeredCapital
     * @return TrjUsersDetail
     */
    public function setRegisteredCapital($registeredCapital)
    {
        $this->registeredCapital = $registeredCapital;

        return $this;
    }

    /**
     * Get registeredCapital
     *
     * @return integer 
     */
    public function getRegisteredCapital()
    {
        return $this->registeredCapital;
    }

    /**
     * Set annualSales
     *
     * @param integer $annualSales
     * @return TrjUsersDetail
     */
    public function setAnnualSales($annualSales)
    {
        $this->annualSales = $annualSales;

        return $this;
    }

    /**
     * Get annualSales
     *
     * @return integer 
     */
    public function getAnnualSales()
    {
        return $this->annualSales;
    }

    /**
     * Set employeNum
     *
     * @param integer $employeNum
     * @return TrjUsersDetail
     */
    public function setEmployeNum($employeNum)
    {
        $this->employeNum = $employeNum;

        return $this;
    }

    /**
     * Get employeNum
     *
     * @return integer 
     */
    public function getEmployeNum()
    {
        return $this->employeNum;
    }

    /**
     * Set yearOld
     *
     * @param integer $yearOld
     * @return TrjUsersDetail
     */
    public function setYearOld($yearOld)
    {
        $this->yearOld = $yearOld;

        return $this;
    }

    /**
     * Get yearOld
     *
     * @return integer 
     */
    public function getYearOld()
    {
        return $this->yearOld;
    }

    /**
     * Set companyDate
     *
     * @param integer $companyDate
     * @return TrjUsersDetail
     */
    public function setCompanyDate($companyDate)
    {
        $this->companyDate = $companyDate;

        return $this;
    }

    /**
     * Get companyDate
     *
     * @return integer 
     */
    public function getCompanyDate()
    {
        return $this->companyDate;
    }

    /**
     * Set honestyDay
     *
     * @param integer $honestyDay
     * @return TrjUsersDetail
     */
    public function setHonestyDay($honestyDay)
    {
        $this->honestyDay = $honestyDay;

        return $this;
    }

    /**
     * Get honestyDay
     *
     * @return integer 
     */
    public function getHonestyDay()
    {
        return $this->honestyDay;
    }

    /**
     * Set honestyCreditDay
     *
     * @param integer $honestyCreditDay
     * @return TrjUsersDetail
     */
    public function setHonestyCreditDay($honestyCreditDay)
    {
        $this->honestyCreditDay = $honestyCreditDay;

        return $this;
    }

    /**
     * Get honestyCreditDay
     *
     * @return integer 
     */
    public function getHonestyCreditDay()
    {
        return $this->honestyCreditDay;
    }

    /**
     * Set serviceUsersDay
     *
     * @param integer $serviceUsersDay
     * @return TrjUsersDetail
     */
    public function setServiceUsersDay($serviceUsersDay)
    {
        $this->serviceUsersDay = $serviceUsersDay;

        return $this;
    }

    /**
     * Get serviceUsersDay
     *
     * @return integer 
     */
    public function getServiceUsersDay()
    {
        return $this->serviceUsersDay;
    }

    /**
     * Set serviceUsersCreditDay
     *
     * @param integer $serviceUsersCreditDay
     * @return TrjUsersDetail
     */
    public function setServiceUsersCreditDay($serviceUsersCreditDay)
    {
        $this->serviceUsersCreditDay = $serviceUsersCreditDay;

        return $this;
    }

    /**
     * Get serviceUsersCreditDay
     *
     * @return integer 
     */
    public function getServiceUsersCreditDay()
    {
        return $this->serviceUsersCreditDay;
    }

    /**
     * Set pics
     *
     * @param string $pics
     * @return TrjUsersDetail
     */
    public function setPics($pics)
    {
        $this->pics = $pics;

        return $this;
    }

    /**
     * Get pics
     *
     * @return string 
     */
    public function getPics()
    {
        return $this->pics;
    }

    /**
     * Set isEarnings
     *
     * @param integer $isEarnings
     * @return TrjUsersDetail
     */
    public function setIsEarnings($isEarnings)
    {
        $this->isEarnings = $isEarnings;

        return $this;
    }

    /**
     * Get isEarnings
     *
     * @return integer 
     */
    public function getIsEarnings()
    {
        return $this->isEarnings;
    }

    /**
     * Set lastYearRevenue
     *
     * @param string $lastYearRevenue
     * @return TrjUsersDetail
     */
    public function setLastYearRevenue($lastYearRevenue)
    {
        $this->lastYearRevenue = $lastYearRevenue;

        return $this;
    }

    /**
     * Get lastYearRevenue
     *
     * @return string 
     */
    public function getLastYearRevenue()
    {
        return $this->lastYearRevenue;
    }

    /**
     * Set lastYearProfit
     *
     * @param string $lastYearProfit
     * @return TrjUsersDetail
     */
    public function setLastYearProfit($lastYearProfit)
    {
        $this->lastYearProfit = $lastYearProfit;

        return $this;
    }

    /**
     * Get lastYearProfit
     *
     * @return string 
     */
    public function getLastYearProfit()
    {
        return $this->lastYearProfit;
    }

    /**
     * Set netAsset
     *
     * @param string $netAsset
     * @return TrjUsersDetail
     */
    public function setNetAsset($netAsset)
    {
        $this->netAsset = $netAsset;

        return $this;
    }

    /**
     * Get netAsset
     *
     * @return string 
     */
    public function getNetAsset()
    {
        return $this->netAsset;
    }

    /**
     * Set yearsRevenue
     *
     * @param string $yearsRevenue
     * @return TrjUsersDetail
     */
    public function setYearsRevenue($yearsRevenue)
    {
        $this->yearsRevenue = $yearsRevenue;

        return $this;
    }

    /**
     * Get yearsRevenue
     *
     * @return string 
     */
    public function getYearsRevenue()
    {
        return $this->yearsRevenue;
    }

    /**
     * Set yearsProfit
     *
     * @param string $yearsProfit
     * @return TrjUsersDetail
     */
    public function setYearsProfit($yearsProfit)
    {
        $this->yearsProfit = $yearsProfit;

        return $this;
    }

    /**
     * Get yearsProfit
     *
     * @return string 
     */
    public function getYearsProfit()
    {
        return $this->yearsProfit;
    }

    /**
     * Set lastFiscalRevenue
     *
     * @param integer $lastFiscalRevenue
     * @return TrjUsersDetail
     */
    public function setLastFiscalRevenue($lastFiscalRevenue)
    {
        $this->lastFiscalRevenue = $lastFiscalRevenue;

        return $this;
    }

    /**
     * Get lastFiscalRevenue
     *
     * @return integer 
     */
    public function getLastFiscalRevenue()
    {
        return $this->lastFiscalRevenue;
    }

    /**
     * Set businessLicenseCode
     *
     * @param string $businessLicenseCode
     * @return TrjUsersDetail
     */
    public function setBusinessLicenseCode($businessLicenseCode)
    {
        $this->businessLicenseCode = $businessLicenseCode;

        return $this;
    }

    /**
     * Get businessLicenseCode
     *
     * @return string 
     */
    public function getBusinessLicenseCode()
    {
        return $this->businessLicenseCode;
    }
}
