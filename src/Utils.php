<?php

namespace Asrx\Customs;

/**
 * Class Utils
 *
 * @package \Asrx\Customs
 */
class Utils
{
    /**
     * 保留5位小数
     * @param float $num
     * @param int $d
     * @return float
     */
    public static function keepDecimal(float $num, $d = 5) : float
    {
        return number_format($num, $d, '.','');
    }


    /**
     * 数组转对象
     * @param $array
     * @return StdClass
     */
    public static function array2object($array)
    {
        if(is_array($array)){
            $obj = new StdClass();
            foreach ( $array as $key => $val) {
                $obj->$key = $val;
            }
        }else
            $obj = $array;
        return $obj;
    }

    /**
     * 对象转数组
     * @param $object
     * @return array
     */
    public static function object2array($object): array
    {
        $array = [];
        if(is_object($object)){
            foreach ($object as $key => $val) {
                $array[$key] = $val;
            }
        }else
            $array = $object;
        return $array;
    }
}