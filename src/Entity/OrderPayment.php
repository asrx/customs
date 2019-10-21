<?php

namespace Asrx\Customs\Entity;

use Asrx\Customs\Exception\InvalidArgumentException;

/**
 * Class OrderPayment
 *
 * @package \Asrx\Customs\Entity
 */
class OrderPayment
{
    /**
     * 支付方式
     * @var string
     */
    public $payMethod;

    /**
     * 企业支付名称
     * @var string
     */
    public $payMerchantName;

    /**
     * 企业支付编号
     * @var string
     */
    public $payMerchantCode;

    /**
     * 支付总金额
     * @var string
     */
    public $payAmount;

    /**
     * 付款币种
     * @var string
     */
    public $payCUR = '142';

    /**
     * 支付交易号
     * @var string
     */
    public $payID;

    /**
     * 支付交易时间
     * @var string
     */
    public $payTime;

    /**
     * 支付方式
     * @return string
     */
    public function getPayMethod(): string
    {
        return $this->payMethod;
    }

    /**
     * 支付方式
     * @param string $payMethod
     */
    public function setPayMethod(string $payMethod): void
    {
        $this->payMethod = $payMethod;
    }

    /**
     * 企业支付名称
     * @return string
     */
    public function getPayMerchantName(): string
    {
        return $this->payMerchantName;
    }

    /**
     * 企业支付名称
     * @param string $payMerchantName
     */
    public function setPayMerchantName(string $payMerchantName): void
    {
        $this->payMerchantName = $payMerchantName;
    }

    /**
     * 企业支付编号
     * @return string
     */
    public function getPayMerchantCode(): string
    {
        return $this->payMerchantCode;
    }

    /**
     * 企业支付编号
     * @param string $payMerchantCode
     */
    public function setPayMerchantCode(string $payMerchantCode): void
    {
        $this->payMerchantCode = $payMerchantCode;
    }

    /**
     * 支付总金额
     * @return string
     */
    public function getPayAmount(): string
    {
        return $this->payAmount;
    }

    /**
     * 支付总金额
     * @param string $payAmount
     */
    public function setPayAmount(string $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * 付款币种
     * @return string
     */
    public function getPayCUR(): string
    {
        return $this->payCUR;
    }

    /**
     * 付款币种
     * @param string $payCUR
     */
    public function setPayCUR(string $payCUR): void
    {
        $this->payCUR = $payCUR;
    }

    /**
     * 支付交易号
     * @return string
     */
    public function getPayID(): string
    {
        return $this->payID;
    }

    /**
     * 支付交易号
     * @param string $payID
     */
    public function setPayID(string $payID): void
    {
        $this->payID = $payID;
    }

    /**
     * 支付交易时间
     * @return string
     */
    public function getPayTime(): string
    {
        return $this->payTime;
    }

    /**
     * 支付交易时间
     * @param string $payTime
     */
    public function setPayTime(string $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * OrderPayment constructor.
     */
    public function __construct($attributes = null)
    {
        if (null != $attributes){

            if (isset($attributes->payMethod)){
                $this->setPayMethod($attributes->payMethod);
            }

            if (isset($attributes->payMerchantName)){
                $this->setPayMerchantName($attributes->payMerchantName);
            }

            if (isset($attributes->payMerchantCode)){
                $this->setPayMerchantCode($attributes->payMerchantCode);
            }

            if (isset($attributes->payAmount)){
                $this->setPayAmount($attributes->payAmount);
            }

            if (isset($attributes->payCUR)){
                $this->setPayCUR($attributes->payCUR);
            }

            if (isset($attributes->payID)){
                $this->setPayID($attributes->payID);
            }

            if (isset($attributes->payTime)){
                $this->setPayTime($attributes->payTime);
            }

        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public function validate()
    {
        if (empty($this->payMethod)){
            throw new InvalidArgumentException('payMethod is required.');
        }
        if (empty($this->payMerchantName)){
            throw new InvalidArgumentException('payMerchantName is required.');
        }
        if (empty($this->payMerchantCode)){
            throw new InvalidArgumentException('payMerchantCode is required.');
        }
        if (empty($this->payAmount)){
            throw new InvalidArgumentException('payAmount is required.');
        }
        if (empty($this->payCUR)){
            throw new InvalidArgumentException('payCUR is required.');
        }
        if (empty($this->payID)){
            throw new InvalidArgumentException('payID is required.');
        }
        if (empty($this->payTime)){
            throw new InvalidArgumentException('payTime is required.');
        }

    }
}