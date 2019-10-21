<?php

namespace Asrx\Customs\Entity;

use Asrx\Customs\Exception\InvalidArgumentException;

/**
 * Class OrderCargoes
 *
 * @package \Asrx\Customs\Entity
 */
class OrderCargoes
{
    /**
     * 商品中文名
     * @var string
     */
    public $cargoName;

    /**
     * SKU
     * @var string
     */
    public $cargoCode;

    /**
     * 数量
     * @var string
     */
    public $cargoNum;

    /**
     * 单价
     * @var float
     */
    public $cargoUnitPrice = 0;

    /**
     * 小计金额
     * @var float
     */
    public $cargoTotalPrice;

    /**
     * 税金额
     * @var float
     */
    public $cargoTotalTax = 0;

    /**
     * 递增序号(1开始)
     * @var int
     */
    public $gnum;

    /**
     * 商品描述
     * @var string
     */
    public $itemDescribe = '';

    /**
     * 商品条码
     * @var string
     */
    public $barCode = '';

    /**
     * 计量单位代码
     * @var string
     */
    public $unit;

    /**
     * 国家
     * @var string
     */
    public $country;

    /**
     * 备注
     * @var string
     */
    public $note = '';

    /**
     * 扩展字段
     * 商品规格型号
     * 品名、牌 名、规格、型号、成份、含 量、等级等
     * @var string
     */
    public $spt01;

    /**
     * 扩展字段
     * @var string
     */
    public $spt02 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt03 = '';

    /**
     * 扩展字段
     * @var string
     */
    public $spt04 = '';

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
     * OrderCargoes constructor.
     */
    public function construct()
    {
    }

    /**
     * 商品中文名
     * @return string
     */
    public function getCargoName(): string
    {
        return $this->cargoName;
    }

    /**
     * 商品中文名
     * @param string $cargoName
     * @return OrderCargoes
     */
    public function setCargoName(string $cargoName): OrderCargoes
    {
        $this->cargoName = $cargoName;
        return $this;
    }

    /**
     * SKU
     * @return string
     */
    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    /**
     * SKU
     * @param string $cargoCode
     * @return OrderCargoes
     */
    public function setCargoCode(string $cargoCode): OrderCargoes
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }

    /**
     * 数量
     * @return string
     */
    public function getCargoNum(): string
    {
        return $this->cargoNum;
    }

    /**
     * 数量
     * @param string $cargoNum
     * @return OrderCargoes
     */
    public function setCargoNum(string $cargoNum): OrderCargoes
    {
        $this->cargoNum = $cargoNum;
        return $this;
    }

    /**
     * 单价
     * @return float
     */
    public function getCargoUnitPrice(): float
    {
        return $this->cargoUnitPrice;
    }

    /**
     * 单价
     * @param float $cargoUnitPrice
     * @return OrderCargoes
     */
    public function setCargoUnitPrice(float $cargoUnitPrice): OrderCargoes
    {
        $this->cargoUnitPrice = $cargoUnitPrice;
        return $this;
    }

    /**
     * 小计金额
     * @return float
     */
    public function getCargoTotalPrice(): float
    {
        return $this->cargoTotalPrice;
    }

    /**
     * 小计金额
     * @param float $cargoTotalPrice
     * @return OrderCargoes
     */
    public function setCargoTotalPrice(float $cargoTotalPrice): OrderCargoes
    {
        $this->cargoTotalPrice = $cargoTotalPrice;
        return $this;
    }

    /**
     * 税金额
     * @return float
     */
    public function getCargoTotalTax(): float
    {
        return $this->cargoTotalTax;
    }

    /**
     * 税金额
     * @param float $cargoTotalTax
     * @return OrderCargoes
     */
    public function setCargoTotalTax(float $cargoTotalTax): OrderCargoes
    {
        $this->cargoTotalTax = $cargoTotalTax;
        return $this;
    }

    /**
     * 递增序号(1开始)
     * @return int
     */
    public function getGnum(): int
    {
        return $this->gnum;
    }

    /**
     * 递增序号(1开始)
     * @param int $gnum
     * @return OrderCargoes
     */
    public function setGnum(int $gnum): OrderCargoes
    {
        $this->gnum = $gnum;
        return $this;
    }

    /**
     * 商品描述
     * @return string
     */
    public function getItemDescribe(): string
    {
        return $this->itemDescribe;
    }

    /**
     * 商品描述
     * @param string $itemDescribe
     * @return OrderCargoes
     */
    public function setItemDescribe(string $itemDescribe): OrderCargoes
    {
        $this->itemDescribe = $itemDescribe;
        return $this;
    }

    /**
     * 商品条码
     * @return string
     */
    public function getBarCode(): string
    {
        return $this->barCode;
    }

    /**
     * 商品条码
     * @param string $barCode
     * @return OrderCargoes
     */
    public function setBarCode(string $barCode): OrderCargoes
    {
        $this->barCode = $barCode;
        return $this;
    }

    /**
     * 计量单位代码
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * 计量单位代码
     * @param string $unit
     * @return OrderCargoes
     */
    public function setUnit(string $unit): OrderCargoes
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * 国家
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * 国家
     * @param string $country
     * @return OrderCargoes
     */
    public function setCountry(string $country): OrderCargoes
    {
        $this->country = $country;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * 备注
     * @param string $note
     * @return OrderCargoes
     */
    public function setNote(string $note): OrderCargoes
    {
        $this->note = $note;
        return $this;
    }

    /**
     * 商品规格型号
     * 品名、牌 名、规格、型号、成份、含 量、等级等
     * @return string
     */
    public function getSpt01(): string
    {
        return $this->spt01;
    }

    /**
     * 扩展字段
     * @param string $spt01
     * @return OrderCargoes
     */
    public function setSpt01(string $spt01): OrderCargoes
    {
        $this->spt01 = $spt01;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt02(): string
    {
        return $this->spt02;
    }

    /**
     * 扩展字段
     * @param string $spt02
     * @return OrderCargoes
     */
    public function setSpt02(string $spt02): OrderCargoes
    {
        $this->spt02 = $spt02;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt03(): string
    {
        return $this->spt03;
    }

    /**
     * 扩展字段
     * @param string $spt03
     * @return OrderCargoes
     */
    public function setSpt03(string $spt03): OrderCargoes
    {
        $this->spt03 = $spt03;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt04(): string
    {
        return $this->spt04;
    }

    /**
     * 扩展字段
     * @param string $spt04
     * @return OrderCargoes
     */
    public function setSpt04(string $spt04): OrderCargoes
    {
        $this->spt04 = $spt04;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt05(): string
    {
        return $this->spt05;
    }

    /**
     * 扩展字段
     * @param string $spt05
     * @return OrderCargoes
     */
    public function setSpt05(string $spt05): OrderCargoes
    {
        $this->spt05 = $spt05;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt06(): string
    {
        return $this->spt06;
    }

    /**
     * 扩展字段
     * @param string $spt06
     * @return OrderCargoes
     */
    public function setSpt06(string $spt06): OrderCargoes
    {
        $this->spt06 = $spt06;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt07(): string
    {
        return $this->spt07;
    }

    /**
     * 扩展字段
     * @param string $spt07
     * @return OrderCargoes
     */
    public function setSpt07(string $spt07): OrderCargoes
    {
        $this->spt07 = $spt07;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt08(): string
    {
        return $this->spt08;
    }

    /**
     * 扩展字段
     * @param string $spt08
     * @return OrderCargoes
     */
    public function setSpt08(string $spt08): OrderCargoes
    {
        $this->spt08 = $spt08;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt09(): string
    {
        return $this->spt09;
    }

    /**
     * 扩展字段
     * @param string $spt09
     * @return OrderCargoes
     */
    public function setSpt09(string $spt09): OrderCargoes
    {
        $this->spt09 = $spt09;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt10(): string
    {
        return $this->spt10;
    }

    /**
     * 扩展字段
     * @param string $spt10
     * @return OrderCargoes
     */
    public function setSpt10(string $spt10): OrderCargoes
    {
        $this->spt10 = $spt10;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt11(): string
    {
        return $this->spt11;
    }

    /**
     * 扩展字段
     * @param string $spt11
     * @return OrderCargoes
     */
    public function setSpt11(string $spt11): OrderCargoes
    {
        $this->spt11 = $spt11;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt12(): string
    {
        return $this->spt12;
    }

    /**
     * 扩展字段
     * @param string $spt12
     * @return OrderCargoes
     */
    public function setSpt12(string $spt12): OrderCargoes
    {
        $this->spt12 = $spt12;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt13(): string
    {
        return $this->spt13;
    }

    /**
     * 扩展字段
     * @param string $spt13
     * @return OrderCargoes
     */
    public function setSpt13(string $spt13): OrderCargoes
    {
        $this->spt13 = $spt13;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt14(): string
    {
        return $this->spt14;
    }

    /**
     * 扩展字段
     * @param string $spt14
     * @return OrderCargoes
     */
    public function setSpt14(string $spt14): OrderCargoes
    {
        $this->spt14 = $spt14;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt15(): string
    {
        return $this->spt15;
    }

    /**
     * 扩展字段
     * @param string $spt15
     * @return OrderCargoes
     */
    public function setSpt15(string $spt15): OrderCargoes
    {
        $this->spt15 = $spt15;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt16(): string
    {
        return $this->spt16;
    }

    /**
     * 扩展字段
     * @param string $spt16
     * @return OrderCargoes
     */
    public function setSpt16(string $spt16): OrderCargoes
    {
        $this->spt16 = $spt16;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt17(): string
    {
        return $this->spt17;
    }

    /**
     * 扩展字段
     * @param string $spt17
     * @return OrderCargoes
     */
    public function setSpt17(string $spt17): OrderCargoes
    {
        $this->spt17 = $spt17;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt18(): string
    {
        return $this->spt18;
    }

    /**
     * 扩展字段
     * @param string $spt18
     * @return OrderCargoes
     */
    public function setSpt18(string $spt18): OrderCargoes
    {
        $this->spt18 = $spt18;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt19(): string
    {
        return $this->spt19;
    }

    /**
     * 扩展字段
     * @param string $spt19
     * @return OrderCargoes
     */
    public function setSpt19(string $spt19): OrderCargoes
    {
        $this->spt19 = $spt19;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt20(): string
    {
        return $this->spt20;
    }

    /**
     * 扩展字段
     * @param string $spt20
     * @return OrderCargoes
     */
    public function setSpt20(string $spt20): OrderCargoes
    {
        $this->spt20 = $spt20;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt21(): string
    {
        return $this->spt21;
    }

    /**
     * 扩展字段
     * @param string $spt21
     * @return OrderCargoes
     */
    public function setSpt21(string $spt21): OrderCargoes
    {
        $this->spt21 = $spt21;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt22(): string
    {
        return $this->spt22;
    }

    /**
     * 扩展字段
     * @param string $spt22
     * @return OrderCargoes
     */
    public function setSpt22(string $spt22): OrderCargoes
    {
        $this->spt22 = $spt22;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt23(): string
    {
        return $this->spt23;
    }

    /**
     * 扩展字段
     * @param string $spt23
     * @return OrderCargoes
     */
    public function setSpt23(string $spt23): OrderCargoes
    {
        $this->spt23 = $spt23;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt24(): string
    {
        return $this->spt24;
    }

    /**
     * 扩展字段
     * @param string $spt24
     * @return OrderCargoes
     */
    public function setSpt24(string $spt24): OrderCargoes
    {
        $this->spt24 = $spt24;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt25(): string
    {
        return $this->spt25;
    }

    /**
     * 扩展字段
     * @param string $spt25
     * @return OrderCargoes
     */
    public function setSpt25(string $spt25): OrderCargoes
    {
        $this->spt25 = $spt25;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt26(): string
    {
        return $this->spt26;
    }

    /**
     * 扩展字段
     * @param string $spt26
     * @return OrderCargoes
     */
    public function setSpt26(string $spt26): OrderCargoes
    {
        $this->spt26 = $spt26;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt27(): string
    {
        return $this->spt27;
    }

    /**
     * 扩展字段
     * @param string $spt27
     * @return OrderCargoes
     */
    public function setSpt27(string $spt27): OrderCargoes
    {
        $this->spt27 = $spt27;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt28(): string
    {
        return $this->spt28;
    }

    /**
     * 扩展字段
     * @param string $spt28
     * @return OrderCargoes
     */
    public function setSpt28(string $spt28): OrderCargoes
    {
        $this->spt28 = $spt28;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt29(): string
    {
        return $this->spt29;
    }

    /**
     * 扩展字段
     * @param string $spt29
     * @return OrderCargoes
     */
    public function setSpt29(string $spt29): OrderCargoes
    {
        $this->spt29 = $spt29;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpt30(): string
    {
        return $this->spt30;
    }

    /**
     * 扩展字段
     * @param string $spt30
     * @return OrderCargoes
     */
    public function setSpt30(string $spt30): OrderCargoes
    {
        $this->spt30 = $spt30;
        return $this;
    }

    /**
     * 验证
     */
    public function validate()
    {
        if (empty($this->cargoName)){
            throw new InvalidArgumentException('cargoName is required.');
        }
        if (empty($this->cargoCode)){
            throw new InvalidArgumentException('cargoCode is required.');
        }
        if (empty($this->cargoNum)){
            throw new InvalidArgumentException('cargoNum is required.');
        }
        if (empty($this->cargoUnitPrice)){
            throw new InvalidArgumentException('cargoUnitPrice is required.');
        }
        if (empty($this->cargoTotalPrice)){
            throw new InvalidArgumentException('cargoTotalPrice is required.');
        }
        if (empty($this->cargoTotalTax)){
            throw new InvalidArgumentException('cargoTotalTax is required.');
        }
        if (empty($this->gnum)){
            throw new InvalidArgumentException('gnum is required.');
        }
        if (empty($this->unit)){
            throw new InvalidArgumentException('unit is required.');
        }
        if (empty($this->country)){
            throw new InvalidArgumentException('country is required.');
        }

    }

}