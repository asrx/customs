<?php

/**
 * Class OrderProtocolTest
 *
 * @package \\${NAMESPACE}
 */
class OrderProtocolTest extends \PHPUnit\Framework\TestCase
{
    public function testGetProtocol()
    {

        $order = new \Asrx\Customs\OrderDeclare(true);
        $op = new \Asrx\Customs\OrderProtocol('上海XXXXXXX有限公司', 'XXXXXXX');
        $order->setProtocol($op);
        $order->setSignMsg('XXXXXXXXXXXXXXXXXXXXXX');

        $body = new \Asrx\Customs\Entity\OrderBody();
        $body->setMerchantOrderId('test11111111');
        $body->setAssBillNo('wl11111111');
        $body->setOrderCommitTime(date('YmdHis'));
        $body->setSenderName('XX');
        $body->setSenderTel('186XXXXXXXX');
        $body->setSenderCompanyName('上海XXXXXX有限公司');
        $body->setSenderAddr('上海浦东新区XX路XX号X幢XXX室');
        $body->setSenderZip('201306');
        $body->setSenderCity('上海市');
        $body->setSenderProvince('上海市');
        $body->setSenderCountry('142');
        $body->setCargoDescript('Descript ...');
        $body->setAllCargoTotalPrice(12.2);
        $body->setAllCargoTotalTax(1.2);
        $body->setExpressPrice(0.00000);
        $body->setOtherPrice(0.00000);

        $body->setRecPerson('XX');
        $body->setRecPhone('186XXXXXXXX');
        $body->setRecCountry('中国');
        $body->setRecProvince('上海');
        $body->setRecCity('上海');
        $body->setRecAddress('XXX路XXX弄X号XXX室');
        $body->setRecZip('210000');
        $body->setServerType(\Asrx\Customs\Entity\Service::SERVIER_TYPE_S02);
        $body->setCustCode(\Asrx\Customs\Entity\AreaCode::AREA_SH_YSG);
        $body->setAppType(\Asrx\Customs\Entity\Service::APPTYPE_CREATE);
        $body->setCustomDeclCo('XXXX');
        $body->setSpt('');
        $body->setCrossOrderId ('');
        $body->setMerchantCode('XXXXX');
        $body->setEbpCode ('XXXXXXXX');
        $body->setEbpName('上海XX有限公司');
        $body->setEbcCode ('XXXXXX');
        $body->setEbcName('上海XX有限公司');
        $body->setBuyerRegNo ('XXX');
        $body->setBatchNumbers('');
        $body->setSpt04('186XXXXXXXXX');

        $order->setBody($body);
        $oc1 = new \Asrx\Customs\Entity\OrderCargoes();
        $oc1->setCargoName('XXX');
        $oc1->setCargoCode('XXX');
        $oc1->setCargoNum('1');
        $oc1->setCargoUnitPrice('99.00000');
        $oc1->setCargoTotalPrice('99.0000');
        $oc1->setCargoTotalTax('0.00000');
        $oc1->setGnum(1);
        $oc1->setItemDescribe('nothing');
        $oc1->setUnit('个');
        $oc1->setCountry('116');
        $oc1->setSpt01('SKU01');

        $ocs[] = $oc1;
        $order->setCargies($ocs);
        $opm = new \Asrx\Customs\Entity\OrderPayment();
        $opm->setPayMethod('SANDPAY');
        $opm->setPayMerchantName('杉德支付网络服务发展有限公司');
        $opm->setPayMerchantCode('XXXXXXXXXX');
        $opm->setPayAmount('99.00');
        $opm->setPayCUR('142');
        $opm->setPayID('20191017XXXXXXXXXXXXXXXXXXXX');
        $opm->setPayTime('19811129194200');

        $order->setPayment($opm);
        $res = $order->send();
        echo json_encode($res);
    }
}