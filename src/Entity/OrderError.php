<?php

namespace Asrx\Customs\Entity;

/**
 * Class OrderError
 *
 * @package \Asrx\Customs\Entity
 */
class OrderError
{
    const ILLEGAL_SIGN = 'ILLEGAL_SIGN';
    const ILLEGAL_VERSION = 'ILLEGAL_VERSION';
    const ILLEGAL_ARGUMENT = 'ILLEGAL_ARGUMENT';
    const HASH_NO_PRIVILEGE = 'HASH_NO_PRIVILEGE';
    const ILLEGAL_PARTNER = 'ILLEGAL_PARTNER';
    const OUT_ORDER_ID_EXIST = 'OUT_ORDER_ID_EXIST';
    const ORDER_PRICE_LESSEQUAL_ZERO = 'ORDER_PRICE_LESSEQUAL_ZERO';
    const ORDER_AMOUNT_LESSEQUAL_ZERO = 'ORDER_AMOUNT_LESSEQUAL_ZERO';
    const ILLEGAL_CARGO_CODE = 'ILLEGAL_CARGO_CODE';
    const ILLEGAL_CARGO_NUM = 'ILLEGAL_CARGO_NUM';
    const ILLEGAL_CARGO_FEE_PARAM = 'ILLEGAL_CARGO_FEE_PARAM';
    const ILLEGAL_TOTAL_CARGO_FEE = 'ILLEGAL_TOTAL_CARGO_FEE';
    const ILLEGAL_TAX_FEE_PARAM = 'ILLEGAL_TAX_FEE_PARAM';
    const ILLEGAL_PAY_FEE_PARAM = 'ILLEGAL_PAY_FEE_PARAM';
    const ILLEGAL_SENDER_COUNTRY = 'ILLEGAL_SENDER_COUNTRY';
    const ILLEGAL_PAY_METHOD = 'ILLEGAL_PAY_METHOD';
    const ILLEGAL_ORDER_CARGO_TYPE = 'ILLEGAL_ORDER_CARGO_TYPE';
    const ILLEGAL_CUSTOM_DEC_CO = 'ILLEGAL_CUSTOM_DEC_CO';
    const ILLEGAL_CLIENT_IP = 'ILLEGAL_CLIENT_IP';
    const SYSTEM_ERROR = 'SYSTEM_ERROR';

    private $errors = [
        'ILLEGAL_SIGN' => '签名验证出错',
        'ILLEGAL_VERSION' => '无效版本号',
        'ILLEGAL_ARGUMENT' => '参数不正确(包括不能为空值的参数传 输空值、字段长度超过最大数、金额格 式不正确、日期格式不正确等)',
        'HASH_NO_PRIVILEGE' => '没有权限访问该服务',
        'ILLEGAL_PARTNER' => '电商标识不正确（名称、代码与电商备 案信息不符）',
        'OUT_ORDER_ID_EXIST' => '电商订单已经存在',
        'ORDER_PRICE_LESSEQUAL_ZERO' => '金额（商品总金额、支付总金额、税款 总金额、物流运费金额、其它费用金 额、单项商品金额、单项商品总金额、 单项商品税款总金额）不能小于等于 0',
        'ORDER_AMOUNT_LESSEQUAL_ZERO' => '数量（单项商品数量）不能小于或等于 0',
        'ILLEGAL_CARGO_CODE' => '非法商品信息，商品未备案',
        'ILLEGAL_CARGO_NUM' => '非法商品集合数量，无商品信息',
        'ILLEGAL_CARGO_FEE_PARAM' => '非法商品金额格式（参考商品单价、商 品总价、商品数量三个组合规则）',
        'ILLEGAL_TOTAL_CARGO_FEE' => '非法商品总金额限制（港澳地区发货地 每笔订单多件商品价值总金额小于等于 800，其它地区发货地每笔订单多件商 品价值总金额小于等于 2000）',
        'ILLEGAL_TAX_FEE_PARAM' => '非法税款金额格式（每个单项商品税款 总价的合计金额与全部商品税款总价不 符）',
        'ILLEGAL_PAY_FEE_PARAM' => '非法支付金额格式（支付总金额与全部 商品合计总价 +税款+物流运费+其它费 用不一致）',
        'ILLEGAL_SENDER_COUNTRY' => '非法商品发件地国家或地区（传输值参 考国家或地区代码英文代码）',
        'ILLEGAL_PAY_METHOD' => '非法支付方式(支付方式不正确)',
        'ILLEGAL_ORDER_CARGO_TYPE' => '订单和商品业务类型不一致（一般进口 订单中出现保税备案商品或保税订单中 出现一般进口备案商品）',
        'ILLEGAL_CUSTOM_DEC_CO' => '非法海关进境申报企业（企业编号不存 在或企业所属业务类型与订单业务类型 不一致）',
        'ILLEGAL_CLIENT_IP' => '客户端 IP 地址无权访问服务',
        'SYSTEM_ERROR' => '系统错误',
    ];

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param $code
     * @return string
     */
    public function getError($code):string
    {
        return $this->errors[$code];
    }

}