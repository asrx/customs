<?php

namespace Asrx\Customs\Entity;

use Asrx\Customs\Exception\InvalidArgumentException;

/**
 * 订单主体信息
 * Class OrderBody
 *
 * @package \Asrx\Customs\Entity
 */
class OrderBody
{
    /**
     * 商户订单号
     * @var string
     */
    public $merchantOrderId;

    /**
     * 物流分运单号
     * @var string
     */
    public $assBillNo;

    /**
     * 订单提交时间
     * @var int
     */
    public $orderCommitTime;

    /**
     * 发件人姓名
     * @var string
     */
    public $senderName;

    /**
     * 发件人电话
     * @var string
     */
    public $senderTel;

    /**
     * 发件方公司名称
     * @var string
     */
    public $senderCompanyName;

    /**
     * 发件人地址
     * @var string
     */
    public $senderAddr;

    /**
     * 发件地邮编
     * @var string
     */
    public $senderZip;

    /**
     * 发件地城市
     * @var string
     */
    public $senderCity;

    /**
     * 发件地省/州名
     * @var string
     */
    public $senderProvince;

    /**
     * 发件地国家
     * @var string
     */
    public $senderCountry;

    /**
     * 订单商品信息简述
     * @var string
     */
    public $cargoDescript;

    /**
     * 商品价格
     * @var float
     */
    public $allCargoTotalPrice;

    /**
     * 代扣税款
     * @var float
     */
    public $allCargoTotalTax = 0;

    /**
     * 运杂费
     * @var float
     */
    public $expressPrice = 0;

    /**
     * 非现金抵扣金额
     * @var float
     */
    public $otherPrice = 0;

    /**
     * 收货人姓名
     * @var string
     */
    public $recPerson;

    /**
     * 收货人电话
     * @var string
     */
    public $recPhone;

    /**
     * 收货地国家
     * @var string
     */
    public $recCountry;

    /**
     * 收货地省/州
     * @var string
     */
    public $recProvince;

    /**
     * 收货地城市
     * @var string
     */
    public $recCity;

    /**
     * 收货地地址
     * @var string
     */
    public $recAddress;

    /**
     * 收货地邮编
     * @var string
     */
    public $recZip;

    /**
     * 业务类型
     * @var string
     */
    public $serverType = Service::SERVIER_TYPE_S01;

    /**
     * 海关关区代码
     * @var string
     */
    public $custCode;

    /**
     * 报送类型
     * @var string
     */
    public $appType = Service::APPTYPE_CREATE;

    /**
     * 物流进境申报企业
     * @var string
     */
    public $customDeclCo;

    /**
     * 扩展字段
     * @var string
     */
    public $Spt = '';

    /**
     * 平台编号
     * @var string
     */
    public $crossOrderId = '';

    /**
     * 商城平台编号
     * @var string
     */
    public $merchantCode;

    /**
     * 电商平台代码
     * @var string
     */
    public $ebpCode;

    /**
     * 电商平台名称
     * @var string
     */
    public $ebpName;

    /**
     * 电商企业代码
     * @var string
     */
    public $ebcCode;

    /**
     * 电商企业名称
     * @var string
     */
    public $ebcName;

    /**
     * 订购人注册号
     * @var string
     */
    public $buyerRegNo;

    /**
     * 商品批次号
     * @var string
     */
    public $batchNumbers = '';

    /**
     * 备注
     * @var string
     */
    public $note;

    /**
     * 扩展字段
     * 订购人姓名
     * 订购人信息和支付人信息不一致时，必填
     * @var string
     */
    public $spt01 = '';

    /**
     * 扩展字段
     * 订购人身份证
     * 订购人信息和支付人信息不一致时，必填
     * @var string
     */
    public $spt02 = '';

    /**
     * 扩展字段
     * 是否通过身份认证
     * Y-是，N-否，U-未知
     * @var string
     */
    public $spt03 = '';

    /**
     * 扩展字段
     * 订购人手机号码
     * @var string
     */
    public $spt04;

    /**
     * 扩展字段
     * @var string
     */
    public $spt05 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt06 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt07 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt08 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt09 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt10 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt11 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt12 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt13 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt14 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt15 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt16 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt17 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt18 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt19 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt20 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt21 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt22 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt23 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt24 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt25 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt26 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt27 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt28 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt29 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt30 = '';

    /**
     * @return string
     */
    public function getMerchantOrderId(): string
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId(string $merchantOrderId): void
    {
        $this->merchantOrderId = $merchantOrderId;
    }

    /**
     * @return string
     */
    public function getAssBillNo(): string
    {
        return $this->assBillNo;
    }

    /**
     * @param string $assBillNo
     */
    public function setAssBillNo(string $assBillNo): void
    {
        $this->assBillNo = $assBillNo;
    }

    /**
     * @return int
     */
    public function getOrderCommitTime(): int
    {
        return $this->orderCommitTime;
    }

    /**
     * @param int $orderCommitTime
     */
    public function setOrderCommitTime(int $orderCommitTime): void
    {
        $this->orderCommitTime = $orderCommitTime;
    }

    /**
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName(string $senderName): void
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderTel(): string
    {
        return $this->senderTel;
    }

    /**
     * @param string $senderTel
     */
    public function setSenderTel(string $senderTel): void
    {
        $this->senderTel = $senderTel;
    }

    /**
     * @return string
     */
    public function getSenderCompanyName(): string
    {
        return $this->senderCompanyName;
    }

    /**
     * @param string $senderCompanyName
     */
    public function setSenderCompanyName(string $senderCompanyName): void
    {
        $this->senderCompanyName = $senderCompanyName;
    }

    /**
     * @return string
     */
    public function getSenderAddr(): string
    {
        return $this->senderAddr;
    }

    /**
     * @param string $senderAddr
     */
    public function setSenderAddr(string $senderAddr): void
    {
        $this->senderAddr = $senderAddr;
    }

    /**
     * @return string
     */
    public function getSenderZip(): string
    {
        return $this->senderZip;
    }

    /**
     * @param string $senderZip
     */
    public function setSenderZip(string $senderZip): void
    {
        $this->senderZip = $senderZip;
    }

    /**
     * @return string
     */
    public function getSenderCity(): string
    {
        return $this->senderCity;
    }

    /**
     * @param string $senderCity
     */
    public function setSenderCity(string $senderCity): void
    {
        $this->senderCity = $senderCity;
    }

    /**
     * @return string
     */
    public function getSenderProvince(): string
    {
        return $this->senderProvince;
    }

    /**
     * @param string $senderProvince
     */
    public function setSenderProvince(string $senderProvince): void
    {
        $this->senderProvince = $senderProvince;
    }

    /**
     * @return string
     */
    public function getSenderCountry(): string
    {
        return $this->senderCountry;
    }

    /**
     * @param string $senderCountry
     */
    public function setSenderCountry(string $senderCountry): void
    {
        $this->senderCountry = $senderCountry;
    }

    /**
     * @return string
     */
    public function getCargoDescript(): string
    {
        return $this->cargoDescript;
    }

    /**
     * @param string $cargoDescript
     */
    public function setCargoDescript(string $cargoDescript): void
    {
        $this->cargoDescript = $cargoDescript;
    }

    /**
     * @return float
     */
    public function getAllCargoTotalPrice(): float
    {
        return $this->allCargoTotalPrice;
    }

    /**
     * @param float $allCargoTotalPrice
     */
    public function setAllCargoTotalPrice(float $allCargoTotalPrice): void
    {
        $this->allCargoTotalPrice = $allCargoTotalPrice;
    }

    /**
     * @return float
     */
    public function getAllCargoTotalTax(): float
    {
        return $this->allCargoTotalTax;
    }

    /**
     * @param float $allCargoTotalTax
     */
    public function setAllCargoTotalTax(float $allCargoTotalTax): void
    {
        $this->allCargoTotalTax = $allCargoTotalTax;
    }

    /**
     * @return float
     */
    public function getExpressPrice(): float
    {
        return $this->expressPrice;
    }

    /**
     * @param float $expressPrice
     */
    public function setExpressPrice(float $expressPrice): void
    {
        $this->expressPrice = $expressPrice;
    }

    /**
     * @return float
     */
    public function getOtherPrice(): float
    {
        return $this->otherPrice;
    }

    /**
     * @param float $otherPrice
     */
    public function setOtherPrice(float $otherPrice): void
    {
        $this->otherPrice = $otherPrice;
    }

    /**
     * @return string
     */
    public function getRecPerson(): string
    {
        return $this->recPerson;
    }

    /**
     * @param string $recPerson
     */
    public function setRecPerson(string $recPerson): void
    {
        $this->recPerson = $recPerson;
    }

    /**
     * @return string
     */
    public function getRecPhone(): string
    {
        return $this->recPhone;
    }

    /**
     * @param string $recPhone
     */
    public function setRecPhone(string $recPhone): void
    {
        $this->recPhone = $recPhone;
    }

    /**
     * @return string
     */
    public function getRecCountry(): string
    {
        return $this->recCountry;
    }

    /**
     * @param string $recCountry
     */
    public function setRecCountry(string $recCountry): void
    {
        $this->recCountry = $recCountry;
    }

    /**
     * @return string
     */
    public function getRecProvince(): string
    {
        return $this->recProvince;
    }

    /**
     * @param string $recProvince
     */
    public function setRecProvince(string $recProvince): void
    {
        $this->recProvince = $recProvince;
    }

    /**
     * @return string
     */
    public function getRecCity(): string
    {
        return $this->recCity;
    }

    /**
     * @param string $recCity
     */
    public function setRecCity(string $recCity): void
    {
        $this->recCity = $recCity;
    }

    /**
     * @return string
     */
    public function getRecAddress(): string
    {
        return $this->recAddress;
    }

    /**
     * @param string $recAddress
     */
    public function setRecAddress(string $recAddress): void
    {
        $this->recAddress = $recAddress;
    }

    /**
     * @return string
     */
    public function getRecZip(): string
    {
        return $this->recZip;
    }

    /**
     * @param string $recZip
     */
    public function setRecZip(string $recZip): void
    {
        $this->recZip = $recZip;
    }

    /**
     * @return string
     */
    public function getServerType(): string
    {
        return $this->serverType;
    }

    /**
     * @param string $serverType
     */
    public function setServerType(string $serverType): void
    {
        $this->serverType = $serverType;
    }

    /**
     * @return string
     */
    public function getCustCode(): string
    {
        return $this->custCode;
    }

    /**
     * @param string $custCode
     */
    public function setCustCode(string $custCode): void
    {
        $this->custCode = $custCode;
    }

    /**
     * @return string
     */
    public function getAppType(): string
    {
        return $this->appType;
    }

    /**
     * @param string $appType
     */
    public function setAppType(string $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return string
     */
    public function getCustomDeclCo(): string
    {
        return $this->customDeclCo;
    }

    /**
     * @param string $customDeclCo
     */
    public function setCustomDeclCo(string $customDeclCo): void
    {
        $this->customDeclCo = $customDeclCo;
    }

    /**
     * @return string
     */
    public function getSpt(): string
    {
        return $this->Spt;
    }

    /**
     * @param string $Spt
     */
    public function setSpt(string $Spt): void
    {
        $this->Spt = $Spt;
    }

    /**
     * @return string
     */
    public function getCrossOrderId(): string
    {
        return $this->crossOrderId;
    }

    /**
     * @param string $crossOrderId
     */
    public function setCrossOrderId(string $crossOrderId): void
    {
        $this->crossOrderId = $crossOrderId;
    }

    /**
     * @return string
     */
    public function getMerchantCode(): string
    {
        return $this->merchantCode;
    }

    /**
     * @param string $merchantCode
     */
    public function setMerchantCode(string $merchantCode): void
    {
        $this->merchantCode = $merchantCode;
    }

    /**
     * @return string
     */
    public function getEbpCode(): string
    {
        return $this->ebpCode;
    }

    /**
     * @param string $ebpCode
     */
    public function setEbpCode(string $ebpCode): void
    {
        $this->ebpCode = $ebpCode;
    }

    /**
     * @return string
     */
    public function getEbpName(): string
    {
        return $this->ebpName;
    }

    /**
     * @param string $ebpName
     */
    public function setEbpName(string $ebpName): void
    {
        $this->ebpName = $ebpName;
    }

    /**
     * @return string
     */
    public function getEbcCode(): string
    {
        return $this->ebcCode;
    }

    /**
     * @param string $ebcCode
     */
    public function setEbcCode(string $ebcCode): void
    {
        $this->ebcCode = $ebcCode;
    }

    /**
     * @return string
     */
    public function getEbcName(): string
    {
        return $this->ebcName;
    }

    /**
     * @param string $ebcName
     */
    public function setEbcName(string $ebcName): void
    {
        $this->ebcName = $ebcName;
    }

    /**
     * @return string
     */
    public function getBuyerRegNo(): string
    {
        return $this->buyerRegNo;
    }

    /**
     * @param string $buyerRegNo
     */
    public function setBuyerRegNo(string $buyerRegNo): void
    {
        $this->buyerRegNo = $buyerRegNo;
    }

    /**
     * @return string
     */
    public function getBatchNumbers(): string
    {
        return $this->batchNumbers;
    }

    /**
     * @param string $batchNumbers
     */
    public function setBatchNumbers(string $batchNumbers): void
    {
        $this->batchNumbers = $batchNumbers;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getSpt01(): string
    {
        return $this->spt01;
    }

    /**
     * @param string $spt01
     */
    public function setSpt01(string $spt01): void
    {
        $this->spt01 = $spt01;
    }

    /**
     * @return string
     */
    public function getSpt02(): string
    {
        return $this->spt02;
    }

    /**
     * @param string $spt02
     */
    public function setSpt02(string $spt02): void
    {
        $this->spt02 = $spt02;
    }

    /**
     * @return string
     */
    public function getSpt03(): string
    {
        return $this->spt03;
    }

    /**
     * @param string $spt03
     */
    public function setSpt03(string $spt03): void
    {
        $this->spt03 = $spt03;
    }

    /**
     * @return string
     */
    public function getSpt04(): string
    {
        return $this->spt04;
    }

    /**
     * @param string $spt04
     */
    public function setSpt04(string $spt04): void
    {
        $this->spt04 = $spt04;
    }

    /**
     * @return string
     */
    public function getSpt05(): string
    {
        return $this->spt05;
    }

    /**
     * @param string $spt05
     */
    public function setSpt05(string $spt05): void
    {
        $this->spt05 = $spt05;
    }

    /**
     * @return string
     */
    public function getSpt06(): string
    {
        return $this->spt06;
    }

    /**
     * @param string $spt06
     */
    public function setSpt06(string $spt06): void
    {
        $this->spt06 = $spt06;
    }

    /**
     * @return string
     */
    public function getSpt07(): string
    {
        return $this->spt07;
    }

    /**
     * @param string $spt07
     */
    public function setSpt07(string $spt07): void
    {
        $this->spt07 = $spt07;
    }

    /**
     * @return string
     */
    public function getSpt08(): string
    {
        return $this->spt08;
    }

    /**
     * @param string $spt08
     */
    public function setSpt08(string $spt08): void
    {
        $this->spt08 = $spt08;
    }

    /**
     * @return string
     */
    public function getSpt09(): string
    {
        return $this->spt09;
    }

    /**
     * @param string $spt09
     */
    public function setSpt09(string $spt09): void
    {
        $this->spt09 = $spt09;
    }

    /**
     * @return string
     */
    public function getSpt10(): string
    {
        return $this->spt10;
    }

    /**
     * @param string $spt10
     */
    public function setSpt10(string $spt10): void
    {
        $this->spt10 = $spt10;
    }

    /**
     * @return string
     */
    public function getSpt11(): string
    {
        return $this->spt11;
    }

    /**
     * @param string $spt11
     */
    public function setSpt11(string $spt11): void
    {
        $this->spt11 = $spt11;
    }

    /**
     * @return string
     */
    public function getSpt12(): string
    {
        return $this->spt12;
    }

    /**
     * @param string $spt12
     */
    public function setSpt12(string $spt12): void
    {
        $this->spt12 = $spt12;
    }

    /**
     * @return string
     */
    public function getSpt13(): string
    {
        return $this->spt13;
    }

    /**
     * @param string $spt13
     */
    public function setSpt13(string $spt13): void
    {
        $this->spt13 = $spt13;
    }

    /**
     * @return string
     */
    public function getSpt14(): string
    {
        return $this->spt14;
    }

    /**
     * @param string $spt14
     */
    public function setSpt14(string $spt14): void
    {
        $this->spt14 = $spt14;
    }

    /**
     * @return string
     */
    public function getSpt15(): string
    {
        return $this->spt15;
    }

    /**
     * @param string $spt15
     */
    public function setSpt15(string $spt15): void
    {
        $this->spt15 = $spt15;
    }

    /**
     * @return string
     */
    public function getSpt16(): string
    {
        return $this->spt16;
    }

    /**
     * @param string $spt16
     */
    public function setSpt16(string $spt16): void
    {
        $this->spt16 = $spt16;
    }

    /**
     * @return string
     */
    public function getSpt17(): string
    {
        return $this->spt17;
    }

    /**
     * @param string $spt17
     */
    public function setSpt17(string $spt17): void
    {
        $this->spt17 = $spt17;
    }

    /**
     * @return string
     */
    public function getSpt18(): string
    {
        return $this->spt18;
    }

    /**
     * @param string $spt18
     */
    public function setSpt18(string $spt18): void
    {
        $this->spt18 = $spt18;
    }

    /**
     * @return string
     */
    public function getSpt19(): string
    {
        return $this->spt19;
    }

    /**
     * @param string $spt19
     */
    public function setSpt19(string $spt19): void
    {
        $this->spt19 = $spt19;
    }

    /**
     * @return string
     */
    public function getSpt20(): string
    {
        return $this->spt20;
    }

    /**
     * @param string $spt20
     */
    public function setSpt20(string $spt20): void
    {
        $this->spt20 = $spt20;
    }

    /**
     * @return string
     */
    public function getSpt21(): string
    {
        return $this->spt21;
    }

    /**
     * @param string $spt21
     */
    public function setSpt21(string $spt21): void
    {
        $this->spt21 = $spt21;
    }

    /**
     * @return string
     */
    public function getSpt22(): string
    {
        return $this->spt22;
    }

    /**
     * @param string $spt22
     */
    public function setSpt22(string $spt22): void
    {
        $this->spt22 = $spt22;
    }

    /**
     * @return string
     */
    public function getSpt23(): string
    {
        return $this->spt23;
    }

    /**
     * @param string $spt23
     */
    public function setSpt23(string $spt23): void
    {
        $this->spt23 = $spt23;
    }

    /**
     * @return string
     */
    public function getSpt24(): string
    {
        return $this->spt24;
    }

    /**
     * @param string $spt24
     */
    public function setSpt24(string $spt24): void
    {
        $this->spt24 = $spt24;
    }

    /**
     * @return string
     */
    public function getSpt25(): string
    {
        return $this->spt25;
    }

    /**
     * @param string $spt25
     */
    public function setSpt25(string $spt25): void
    {
        $this->spt25 = $spt25;
    }

    /**
     * @return string
     */
    public function getSpt26(): string
    {
        return $this->spt26;
    }

    /**
     * @param string $spt26
     */
    public function setSpt26(string $spt26): void
    {
        $this->spt26 = $spt26;
    }

    /**
     * @return string
     */
    public function getSpt27(): string
    {
        return $this->spt27;
    }

    /**
     * @param string $spt27
     */
    public function setSpt27(string $spt27): void
    {
        $this->spt27 = $spt27;
    }

    /**
     * @return string
     */
    public function getSpt28(): string
    {
        return $this->spt28;
    }

    /**
     * @param string $spt28
     */
    public function setSpt28(string $spt28): void
    {
        $this->spt28 = $spt28;
    }

    /**
     * @return string
     */
    public function getSpt29(): string
    {
        return $this->spt29;
    }

    /**
     * @param string $spt29
     */
    public function setSpt29(string $spt29): void
    {
        $this->spt29 = $spt29;
    }

    /**
     * @return string
     */
    public function getSpt30(): string
    {
        return $this->spt30;
    }

    /**
     * @param string $spt30
     */
    public function setSpt30(string $spt30): void
    {
        $this->spt30 = $spt30;
    }


    /**
     * OrderBody constructor.
     */
    public function __construct()
    {
    }

    /**
     * Validate
     * @throws InvalidArgumentException
     */
    public function validate()
    {
        if (empty($this->merchantOrderId)){
            throw new InvalidArgumentException('merchantOrderId is required.');
        }
        if (empty($this->assBillNo)){
            throw new InvalidArgumentException('assBillNo is required.');
        }
        if (empty($this->orderCommitTime)){
            throw new InvalidArgumentException('orderCommitTime is required.');
        }
        if (empty($this->senderName)){
            throw new InvalidArgumentException('senderName is required.');
        }
        if (empty($this->senderTel)){
            throw new InvalidArgumentException('senderTel is required.');
        }
        if (empty($this->senderCompanyName)){
            throw new InvalidArgumentException('senderCompanyName is required.');
        }
        if (empty($this->senderAddr)){
            throw new InvalidArgumentException('senderAddr is required.');
        }
        if (empty($this->senderZip)){
            throw new InvalidArgumentException('senderZip is required.');
        }
        if (empty($this->senderCity)){
            throw new InvalidArgumentException('senderCity is required.');
        }
        if (empty($this->senderProvince)){
            throw new InvalidArgumentException('senderProvince is required.');
        }
        if (empty($this->senderCountry)){
            throw new InvalidArgumentException('senderCountry is required.');

        }
        if (empty($this->cargoDescript)){
            throw new InvalidArgumentException('cargoDescript is required.');
        }
        if (empty($this->allCargoTotalPrice)){
            throw new InvalidArgumentException('allCargoTotalPrice is required.');
        }
        if (empty($this->allCargoTotalTax)){
            throw new InvalidArgumentException('allCargoTotalTax is required.');
        }
        if (!isset($this->expressPrice)){
            throw new InvalidArgumentException('expressPrice is required.');
        }
        if (!isset($this->otherPrice)){
            throw new InvalidArgumentException('otherPrice is required.');
        }
        if (empty($this->recPerson)){
            throw new InvalidArgumentException('recPerson is required.');
        }
        if (empty($this->recPhone)){
            throw new InvalidArgumentException('recPhone is required.');
        }
        if (empty($this->recCountry)){
            throw new InvalidArgumentException('recCountry is required.');
        }
        if (empty($this->recProvince)){
            throw new InvalidArgumentException('recProvince is required.');
        }
        if (empty($this->recCity)){
            throw new InvalidArgumentException('recCity is required.');
        }
        if (empty($this->recAddress)){
            throw new InvalidArgumentException('recAddress is required.');
        }
        if (empty($this->serverType)){
            throw new InvalidArgumentException('serverType is required.');
        }
        if (empty($this->custCode)){
            throw new InvalidArgumentException('custCode is required.');
        }else if (!array_key_exists($this->custCode, AreaCode::getAreas())){
            throw new InvalidArgumentException('custCode Key is Error.');
        }
        if (empty($this->appType)){
            throw new InvalidArgumentException('appType is required.');
        }
        if (empty($this->customDeclCo)){
            throw new InvalidArgumentException('customDeclCo is required.');
        }
        if (empty($this->merchantCode)){
            throw new InvalidArgumentException('merchantCode is required.');
        }
        if (empty($this->ebpCode)){
            throw new InvalidArgumentException('ebpCode is required.');
        }
        if (empty($this->ebpName)){
            throw new InvalidArgumentException('ebpName is required.');
        }
        if (empty($this->ebcCode)){
            throw new InvalidArgumentException('ebcCode is required.');
        }
        if (empty($this->ebcName)){
            throw new InvalidArgumentException('ebcName is required.');
        }
        if (empty($this->buyerRegNo)){
            throw new InvalidArgumentException('buyerRegNo is required.');
        }
        if (empty($this->spt04)){
            throw new InvalidArgumentException('spt04 is required.');
        }
    }
}