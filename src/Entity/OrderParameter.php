<?php

namespace Asrx\Customs\Entity;

/**
 * Class OrderParameter
 *
 * @package \Asrx\Customs\Entity
 */
class OrderParameter
{
    /**
     * Parameters are case-sensitive
     * N: Don't empty
     * Y: Can be null
     * Length 1:  It could be `number`, `letter`, `number`, `symbol`
     */

    /**
     * 摘要加签过
     * @var string
     */
    private $signMsg;

    /**
     * 协议参数
     * @var OrderProtocol
     */
    private $protocol;

    /**
     * 订单主体信息
     * @var OrderBody
     */
    private $body;

    /**
     * 货品
     * @var array
     */
    private $cargoes = [];

    /**
     * 支付信息
     * @var OrderPayment
     */
    private $payment;

    private $objParams;

    /**
     * @return \stdClass
     */
    public function getObjParams()
    {
        $this->merge();
        return $this->objParams;
    }


    /**
     * @return OrderProtocol
     */
    public function getProtocol(): OrderProtocol
    {
        return $this->protocol;
    }

    /**
     * @param OrderProtocol $protocol
     */
    public function setProtocol(OrderProtocol $protocol): void
    {
        $this->protocol = $protocol;
    }

    /**
     * @return OrderBody
     */
    public function getBody(): OrderBody
    {
        return $this->body;
    }

    /**
     * @param OrderBody $body
     */
    public function setBody(OrderBody $body): void
    {
        $this->body = $body;
    }

    /**
     * @return array
     */
    public function getCargies(): array
    {
        return $this->cargoes;
    }

    /**
     * @param array $cargoes
     */
    public function setCargies(array $cargoes): void
    {
        $this->cargoes = $cargoes;
    }

    /**
     * @return OrderPayment
     */
    public function getPayment(): OrderPayment
    {
        return $this->payment;
    }

    /**
     * @param OrderPayment $payment
     */
    public function setPayment(OrderPayment $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @return string
     */
    public function getSignMsg()
    {
        return $this->signMsg;
    }

    /**
     * @param string $SignMsg
     */
    public function setSignMsg($signMsg)
    {
        $this->signMsg = $signMsg;
    }

    /**
     * OrderParameter constructor.
     * @param OrderProtocol $protocol 协议参数
     * @param OrderBody $body 订单主体信息
     * @param array $cargoes 订单商品结合信息（Cargoes 集合信息）
     * @param OrderPayment $payment 支付信息
     */
    public function __construct($SignMsg, $protocol, $body, $cargoes, $payment)
    {
        $this->signMsg = $SignMsg;

        $this->protocol = new OrderProtocol();
        $this->protocol = $protocol;
        $this->body = $body;
        $this->cargoes = $cargoes;
        $this->payment = $payment;
    }

    private function merge()
    {
        $this->objParams = new \stdClass();
        $this->setting($this->protocol)
            ->setting($this->body)
            ->setting($this->cargoes)
            ->setting($this->payment);
    }

    private function setting($obj)
    {
        if (is_array($obj) && count($obj) > 0 && $obj[0] instanceof OrderCargoes){
            $this->objParams->cargoes = [];
            for ($i = 0; $i < count($obj); $i++){
                $_tmp = new \stdClass();
                foreach ($obj[$i] as $key => $value) {
                    $_tmp->$key = $value;
                }
                $this->objParams->cargoes[] = $_tmp;
            }
        }else{
            foreach ($obj as $key => $value) {
                if (isset($key) && !empty($key)){
                    $this->objParams->$key = $value;
                }
            }
        }
        return $this;
    }
}