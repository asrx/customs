<?php

namespace Asrx\Customs\Exception;

/**
 * Class InvalidArgumentException
 *
 * @package \Asrx\Customs\Exception
 */
class InvalidArgumentException extends Exception
{
    /**
     * InvalidArgumentException constructor.
     */
    public function __construct($message = '请求参数错误',$code = 0)
    {
        parent::__construct($message, $code);
    }

}