<?php

namespace Asrx\Customs\Entity;

/**
 * Class AreaCode
 *
 * @package \Asrx\Customs\Entity
 */
class AreaCode
{
    /**
     * 浦东机场
     */
    const AREA_SH_PDJC = '2244';

    /**
     * 虹桥机场
     */
    const AREA_SH_HQJC = '2203';

    /**
     * 浦东自贸
     */
    const AREA_SH_PDZM = '2216';

    /**
     * 洋山港
     */
    const AREA_SH_YSG = '2249';

    /**
     * 外高桥
     */
    const AREA_SH_WGQ = '2218';

    /**
     * 松江加工
     */
    const AREA_SH_SJJG = '2235';

    /**
     * 嘉定出口
     */
    const AREA_SH_JDCK = '2232';

    /**
     * 青浦加工
     */
    const AREA_SH_QPJG = '2238';

    private static $Areas = [
        '2244' => '浦东机场',
        '2203' => '虹桥机场',
        '2216' => '浦东自贸',
        '2249' => '洋山港',
        '2218' => '外高桥',
        '2235' => '松江加工',
        '2232' => '嘉定出口',
        '2238' => '青浦加工',
    ];

    /**
     * @return array
     */
    public static function getAreas():array
    {
        return self::$Areas;
    }

    /**
     * @param $code
     * @return string
     */
    public static function getArea($code): string
    {
        return self::$Areas[$code];
    }
}