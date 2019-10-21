<?php

namespace Asrx\Customs;

use Asrx\Customs\Entity\OrderParameter;
use Asrx\Customs\Exception\Exception;
use Asrx\Customs\Exception\HttpException;
use Asrx\Customs\Exception\InvalidArgumentException;
use Curl\Curl;

/**
 * Class OrderRequet
 *
 * @package \Asrx\Customs
 */
class OrderDeclare extends OrderParameter
{
    /**
     * Debug URI
     * @var string
     */
    private $http = 'http://jk.shcepp.com/cepoi/order/orderlist.htm';

    /**
     * production URI
     * @var string
     */
    private $https = 'https://jk.shcepp.com/cepoi/order/orderlist.htm';

    /**
     * @var Curl
     */
    private $curl;

    /**
     * false:production, true:debug
     * @var bool
     */
    private $useIntegration;
    /**
     * OrderDeclare constructor.
     * @throws \ErrorException
     */
    public function __construct($useIntegration = false)
    {
        $this->curl = new Curl();

        $this->useIntegration = $useIntegration;
    }

    /**
     * 验证请求参数
     * @throws InvalidArgumentException
     */
    public function validate()
    {
        if (empty($this->getSignMsg())){
            throw new InvalidArgumentException();
        }

        if ($this->getProtocol()){
            $this->getProtocol()->validate();
        }

        if ($this->getPayment()){
            $this->getPayment()->validate();
        }

        if ($this->getBody()){
            $this->getBody()->validate();
        }
    }

    // 订单申报 请求接口
    public function send()
    {
        try{
            $this->validate();
            $post_params = [];
            $json_params = json_encode($this->getObjParams(), JSON_UNESCAPED_UNICODE);

            $post_params['SignMsg'] = strtoupper(md5($json_params.$this->getSignMsg()));
            $post_params['EData'] = urlencode($json_params);

            $this->curl->post($this->baseUrl(),$post_params);
            if ($this->curl->error){
                throw new HttpException($this->curl->errorMessage,$this->curl->errorCode);
            }else{
                return json_decode(urldecode($this->curl->response), true);
            }

        }catch (Exception $e){
            $message = $e->getMessage();
            if ($e instanceof InvalidArgumentException) {
                return 'InvalidArgumentException: '.$message;
            } else if ($e instanceof HttpException) {
                return 'HttpException: '.$message;
            }
            return $message;
        }

    }

    /**
     * api url
     * @return string
     */
    private function baseUrl()
    {
        return $this->useIntegration ? $this->http : $this->https;
    }

}