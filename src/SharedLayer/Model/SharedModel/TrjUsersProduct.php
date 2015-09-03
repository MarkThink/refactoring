<?php

namespace SharedModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrjUsersProduct
 */
class TrjUsersProduct
{
    /**
     * @var integer
     */
    private $rid;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var integer
     */
    private $productType;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $orderIdN;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $startTime;

    /**
     * @var integer
     */
    private $endTime;

    /**
     * @var integer
     */
    private $a100;

    /**
     * @var integer
     */
    private $a101;

    /**
     * @var integer
     */
    private $a101use;

    /**
     * @var integer
     */
    private $a102;

    /**
     * @var integer
     */
    private $a103;

    /**
     * @var integer
     */
    private $a104;

    /**
     * @var integer
     */
    private $a111;

    /**
     * @var integer
     */
    private $a112;

    /**
     * @var integer
     */
    private $a105;

    /**
     * @var integer
     */
    private $a106;

    /**
     * @var integer
     */
    private $a107;

    /**
     * @var integer
     */
    private $a108;

    /**
     * @var integer
     */
    private $a109;

    /**
     * @var integer
     */
    private $a110;

    /**
     * @var integer
     */
    private $a110use;

    /**
     * @var integer
     */
    private $a113;

    /**
     * @var integer
     */
    private $a114;

    /**
     * @var integer
     */
    private $a115;

    /**
     * @var integer
     */
    private $a200;

    /**
     * @var integer
     */
    private $a201;

    /**
     * @var integer
     */
    private $a201use;

    /**
     * @var integer
     */
    private $a202;

    /**
     * @var integer
     */
    private $a202use;

    /**
     * @var integer
     */
    private $a203;

    /**
     * @var integer
     */
    private $a204;

    /**
     * @var integer
     */
    private $a205;

    /**
     * @var integer
     */
    private $a205use;

    /**
     * @var integer
     */
    private $a300;

    /**
     * @var integer
     */
    private $a301;

    /**
     * @var integer
     */
    private $a302;

    /**
     * @var integer
     */
    private $a303;

    /**
     * @var integer
     */
    private $a304;

    /**
     * @var integer
     */
    private $a400;

    /**
     * @var integer
     */
    private $a401;

    /**
     * @var integer
     */
    private $a402;

    /**
     * @var integer
     */
    private $a500;

    /**
     * @var integer
     */
    private $a501;

    /**
     * @var integer
     */
    private $a502;

    /**
     * @var integer
     */
    private $a503;

    /**
     * @var integer
     */
    private $status;


    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return TrjUsersProduct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return TrjUsersProduct
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productType
     *
     * @param integer $productType
     * @return TrjUsersProduct
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return integer 
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return TrjUsersProduct
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderIdN
     *
     * @param integer $orderIdN
     * @return TrjUsersProduct
     */
    public function setOrderIdN($orderIdN)
    {
        $this->orderIdN = $orderIdN;

        return $this;
    }

    /**
     * Get orderIdN
     *
     * @return integer 
     */
    public function getOrderIdN()
    {
        return $this->orderIdN;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TrjUsersProduct
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
     * Set startTime
     *
     * @param integer $startTime
     * @return TrjUsersProduct
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     * @return TrjUsersProduct
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set a100
     *
     * @param integer $a100
     * @return TrjUsersProduct
     */
    public function setA100($a100)
    {
        $this->a100 = $a100;

        return $this;
    }

    /**
     * Get a100
     *
     * @return integer 
     */
    public function getA100()
    {
        return $this->a100;
    }

    /**
     * Set a101
     *
     * @param integer $a101
     * @return TrjUsersProduct
     */
    public function setA101($a101)
    {
        $this->a101 = $a101;

        return $this;
    }

    /**
     * Get a101
     *
     * @return integer 
     */
    public function getA101()
    {
        return $this->a101;
    }

    /**
     * Set a101use
     *
     * @param integer $a101use
     * @return TrjUsersProduct
     */
    public function setA101use($a101use)
    {
        $this->a101use = $a101use;

        return $this;
    }

    /**
     * Get a101use
     *
     * @return integer 
     */
    public function getA101use()
    {
        return $this->a101use;
    }

    /**
     * Set a102
     *
     * @param integer $a102
     * @return TrjUsersProduct
     */
    public function setA102($a102)
    {
        $this->a102 = $a102;

        return $this;
    }

    /**
     * Get a102
     *
     * @return integer 
     */
    public function getA102()
    {
        return $this->a102;
    }

    /**
     * Set a103
     *
     * @param integer $a103
     * @return TrjUsersProduct
     */
    public function setA103($a103)
    {
        $this->a103 = $a103;

        return $this;
    }

    /**
     * Get a103
     *
     * @return integer 
     */
    public function getA103()
    {
        return $this->a103;
    }

    /**
     * Set a104
     *
     * @param integer $a104
     * @return TrjUsersProduct
     */
    public function setA104($a104)
    {
        $this->a104 = $a104;

        return $this;
    }

    /**
     * Get a104
     *
     * @return integer 
     */
    public function getA104()
    {
        return $this->a104;
    }

    /**
     * Set a111
     *
     * @param integer $a111
     * @return TrjUsersProduct
     */
    public function setA111($a111)
    {
        $this->a111 = $a111;

        return $this;
    }

    /**
     * Get a111
     *
     * @return integer 
     */
    public function getA111()
    {
        return $this->a111;
    }

    /**
     * Set a112
     *
     * @param integer $a112
     * @return TrjUsersProduct
     */
    public function setA112($a112)
    {
        $this->a112 = $a112;

        return $this;
    }

    /**
     * Get a112
     *
     * @return integer 
     */
    public function getA112()
    {
        return $this->a112;
    }

    /**
     * Set a105
     *
     * @param integer $a105
     * @return TrjUsersProduct
     */
    public function setA105($a105)
    {
        $this->a105 = $a105;

        return $this;
    }

    /**
     * Get a105
     *
     * @return integer 
     */
    public function getA105()
    {
        return $this->a105;
    }

    /**
     * Set a106
     *
     * @param integer $a106
     * @return TrjUsersProduct
     */
    public function setA106($a106)
    {
        $this->a106 = $a106;

        return $this;
    }

    /**
     * Get a106
     *
     * @return integer 
     */
    public function getA106()
    {
        return $this->a106;
    }

    /**
     * Set a107
     *
     * @param integer $a107
     * @return TrjUsersProduct
     */
    public function setA107($a107)
    {
        $this->a107 = $a107;

        return $this;
    }

    /**
     * Get a107
     *
     * @return integer 
     */
    public function getA107()
    {
        return $this->a107;
    }

    /**
     * Set a108
     *
     * @param integer $a108
     * @return TrjUsersProduct
     */
    public function setA108($a108)
    {
        $this->a108 = $a108;

        return $this;
    }

    /**
     * Get a108
     *
     * @return integer 
     */
    public function getA108()
    {
        return $this->a108;
    }

    /**
     * Set a109
     *
     * @param integer $a109
     * @return TrjUsersProduct
     */
    public function setA109($a109)
    {
        $this->a109 = $a109;

        return $this;
    }

    /**
     * Get a109
     *
     * @return integer 
     */
    public function getA109()
    {
        return $this->a109;
    }

    /**
     * Set a110
     *
     * @param integer $a110
     * @return TrjUsersProduct
     */
    public function setA110($a110)
    {
        $this->a110 = $a110;

        return $this;
    }

    /**
     * Get a110
     *
     * @return integer 
     */
    public function getA110()
    {
        return $this->a110;
    }

    /**
     * Set a110use
     *
     * @param integer $a110use
     * @return TrjUsersProduct
     */
    public function setA110use($a110use)
    {
        $this->a110use = $a110use;

        return $this;
    }

    /**
     * Get a110use
     *
     * @return integer 
     */
    public function getA110use()
    {
        return $this->a110use;
    }

    /**
     * Set a113
     *
     * @param integer $a113
     * @return TrjUsersProduct
     */
    public function setA113($a113)
    {
        $this->a113 = $a113;

        return $this;
    }

    /**
     * Get a113
     *
     * @return integer 
     */
    public function getA113()
    {
        return $this->a113;
    }

    /**
     * Set a114
     *
     * @param integer $a114
     * @return TrjUsersProduct
     */
    public function setA114($a114)
    {
        $this->a114 = $a114;

        return $this;
    }

    /**
     * Get a114
     *
     * @return integer 
     */
    public function getA114()
    {
        return $this->a114;
    }

    /**
     * Set a115
     *
     * @param integer $a115
     * @return TrjUsersProduct
     */
    public function setA115($a115)
    {
        $this->a115 = $a115;

        return $this;
    }

    /**
     * Get a115
     *
     * @return integer 
     */
    public function getA115()
    {
        return $this->a115;
    }

    /**
     * Set a200
     *
     * @param integer $a200
     * @return TrjUsersProduct
     */
    public function setA200($a200)
    {
        $this->a200 = $a200;

        return $this;
    }

    /**
     * Get a200
     *
     * @return integer 
     */
    public function getA200()
    {
        return $this->a200;
    }

    /**
     * Set a201
     *
     * @param integer $a201
     * @return TrjUsersProduct
     */
    public function setA201($a201)
    {
        $this->a201 = $a201;

        return $this;
    }

    /**
     * Get a201
     *
     * @return integer 
     */
    public function getA201()
    {
        return $this->a201;
    }

    /**
     * Set a201use
     *
     * @param integer $a201use
     * @return TrjUsersProduct
     */
    public function setA201use($a201use)
    {
        $this->a201use = $a201use;

        return $this;
    }

    /**
     * Get a201use
     *
     * @return integer 
     */
    public function getA201use()
    {
        return $this->a201use;
    }

    /**
     * Set a202
     *
     * @param integer $a202
     * @return TrjUsersProduct
     */
    public function setA202($a202)
    {
        $this->a202 = $a202;

        return $this;
    }

    /**
     * Get a202
     *
     * @return integer 
     */
    public function getA202()
    {
        return $this->a202;
    }

    /**
     * Set a202use
     *
     * @param integer $a202use
     * @return TrjUsersProduct
     */
    public function setA202use($a202use)
    {
        $this->a202use = $a202use;

        return $this;
    }

    /**
     * Get a202use
     *
     * @return integer 
     */
    public function getA202use()
    {
        return $this->a202use;
    }

    /**
     * Set a203
     *
     * @param integer $a203
     * @return TrjUsersProduct
     */
    public function setA203($a203)
    {
        $this->a203 = $a203;

        return $this;
    }

    /**
     * Get a203
     *
     * @return integer 
     */
    public function getA203()
    {
        return $this->a203;
    }

    /**
     * Set a204
     *
     * @param integer $a204
     * @return TrjUsersProduct
     */
    public function setA204($a204)
    {
        $this->a204 = $a204;

        return $this;
    }

    /**
     * Get a204
     *
     * @return integer 
     */
    public function getA204()
    {
        return $this->a204;
    }

    /**
     * Set a205
     *
     * @param integer $a205
     * @return TrjUsersProduct
     */
    public function setA205($a205)
    {
        $this->a205 = $a205;

        return $this;
    }

    /**
     * Get a205
     *
     * @return integer 
     */
    public function getA205()
    {
        return $this->a205;
    }

    /**
     * Set a205use
     *
     * @param integer $a205use
     * @return TrjUsersProduct
     */
    public function setA205use($a205use)
    {
        $this->a205use = $a205use;

        return $this;
    }

    /**
     * Get a205use
     *
     * @return integer 
     */
    public function getA205use()
    {
        return $this->a205use;
    }

    /**
     * Set a300
     *
     * @param integer $a300
     * @return TrjUsersProduct
     */
    public function setA300($a300)
    {
        $this->a300 = $a300;

        return $this;
    }

    /**
     * Get a300
     *
     * @return integer 
     */
    public function getA300()
    {
        return $this->a300;
    }

    /**
     * Set a301
     *
     * @param integer $a301
     * @return TrjUsersProduct
     */
    public function setA301($a301)
    {
        $this->a301 = $a301;

        return $this;
    }

    /**
     * Get a301
     *
     * @return integer 
     */
    public function getA301()
    {
        return $this->a301;
    }

    /**
     * Set a302
     *
     * @param integer $a302
     * @return TrjUsersProduct
     */
    public function setA302($a302)
    {
        $this->a302 = $a302;

        return $this;
    }

    /**
     * Get a302
     *
     * @return integer 
     */
    public function getA302()
    {
        return $this->a302;
    }

    /**
     * Set a303
     *
     * @param integer $a303
     * @return TrjUsersProduct
     */
    public function setA303($a303)
    {
        $this->a303 = $a303;

        return $this;
    }

    /**
     * Get a303
     *
     * @return integer 
     */
    public function getA303()
    {
        return $this->a303;
    }

    /**
     * Set a304
     *
     * @param integer $a304
     * @return TrjUsersProduct
     */
    public function setA304($a304)
    {
        $this->a304 = $a304;

        return $this;
    }

    /**
     * Get a304
     *
     * @return integer 
     */
    public function getA304()
    {
        return $this->a304;
    }

    /**
     * Set a400
     *
     * @param integer $a400
     * @return TrjUsersProduct
     */
    public function setA400($a400)
    {
        $this->a400 = $a400;

        return $this;
    }

    /**
     * Get a400
     *
     * @return integer 
     */
    public function getA400()
    {
        return $this->a400;
    }

    /**
     * Set a401
     *
     * @param integer $a401
     * @return TrjUsersProduct
     */
    public function setA401($a401)
    {
        $this->a401 = $a401;

        return $this;
    }

    /**
     * Get a401
     *
     * @return integer 
     */
    public function getA401()
    {
        return $this->a401;
    }

    /**
     * Set a402
     *
     * @param integer $a402
     * @return TrjUsersProduct
     */
    public function setA402($a402)
    {
        $this->a402 = $a402;

        return $this;
    }

    /**
     * Get a402
     *
     * @return integer 
     */
    public function getA402()
    {
        return $this->a402;
    }

    /**
     * Set a500
     *
     * @param integer $a500
     * @return TrjUsersProduct
     */
    public function setA500($a500)
    {
        $this->a500 = $a500;

        return $this;
    }

    /**
     * Get a500
     *
     * @return integer 
     */
    public function getA500()
    {
        return $this->a500;
    }

    /**
     * Set a501
     *
     * @param integer $a501
     * @return TrjUsersProduct
     */
    public function setA501($a501)
    {
        $this->a501 = $a501;

        return $this;
    }

    /**
     * Get a501
     *
     * @return integer 
     */
    public function getA501()
    {
        return $this->a501;
    }

    /**
     * Set a502
     *
     * @param integer $a502
     * @return TrjUsersProduct
     */
    public function setA502($a502)
    {
        $this->a502 = $a502;

        return $this;
    }

    /**
     * Get a502
     *
     * @return integer 
     */
    public function getA502()
    {
        return $this->a502;
    }

    /**
     * Set a503
     *
     * @param integer $a503
     * @return TrjUsersProduct
     */
    public function setA503($a503)
    {
        $this->a503 = $a503;

        return $this;
    }

    /**
     * Get a503
     *
     * @return integer 
     */
    public function getA503()
    {
        return $this->a503;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TrjUsersProduct
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
