<?php

namespace Asrx\Customs\Entity;

use Asrx\Customs\Exception\InvalidArgumentException;
use Exception;

/**
 * 协议主体
 * Class OrderProtocol
 *
 * @package \Asrx\Customs\Entity
 */
class OrderProtocol
{
    /**
     * 固定值: v2.1
     * @var string
     */
    public $version = 'v2.1';

    /**
     * 提交时间
     * @var int
     */
    public $commitTime;
    /**
     * 企业名称
     * @var string
     */
    public $coName;

    /**
     * 企业代码
     * @var string
     */
    public $coCode;
    /**
     * 流水号
     * @var string
     */
    public $serialNumber;

    /**
     * @param string $serialNumber
     */
    public function setSerialNumber()
    {
        $this->serialNumber = $this->coCode . $this->commitTime . substr(strval(rand(00000,99999)),0,5);
    }

    /**
     * OrderProtocol constructor.
     * @param string $coName
     * @param string $coCode
     * @param string $serialNumber
     */
    public function __construct(string $coName, string $coCode)
    {
        $this->commitTime = date('YmdHis',time());
        $this->coName = $coName;
        $this->coCode = $coCode;
        $this->setSerialNumber();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function validate()
    {
        if (empty($this->coName)){
            throw new InvalidArgumentException('coName is required.');
        }
        if (empty($this->coCode)){
            throw new InvalidArgumentException('coCode is required.');
        }
        if (empty($this->serialNumber)){
            throw new InvalidArgumentException('serialNumber is required.');
        }

    }
}