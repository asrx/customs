<?php

namespace Asrx\Customs\Entity;

/**
 * Class Courtry
 *
 * @package \Asrx\Customs\Entity
 */
class Country
{
    /**
     * 韩国
     */
    const KOR_410 = 'KOR';

    /**
     * 美国
     */
    const USA_840 = 'USA';

    /**
     * 日本
     */
    const JPN_392 = 'JPN';

    /**
     * 香港
     */
    const HKG_344 = 'HKG';

    /**
     * 澳门
     */
    const MAC_446 = 'MAC';

    /**
     * 法国
     */
    const FRA_250 = 'FRA';

    /**
     * 台湾
     */
    const TWN_158 = 'TWN';

    /**
     * 意大利
     */
    const ITA_380 = 'ITA';

    /**
     * 澳大利亚
     */
    const AUS_36  = 'AUS';

    /**
     * 新西兰
     */
    const NZL_554 = 'NZL';

    /**
     * 加拿大
     */
    const CAN_124 = 'CAN';

    /**
     * 英国
     */
    const GBR_303 = 'GBR';

    private static $countries = [
        'KOR'=> 'KOREA,REPUBLIC OF KOREA',
        'USA'=> 'UNITED STATES',
        'JPN'=> 'JAPAN',
        'HKG'=> 'HONG KONG',
        'MAC'=> 'MACAU',
        'FRA'=> 'FRANCE',
        'TWN'=> 'TAIWAN,PROVINCE OF CHINA',
        'ITA'=> 'ITALY',
        'AUS'=> 'AUSTRALIA',
        'NZL'=> 'NEW ZEALAND',
        'CAN'=> 'REPUBLIC',
        'GBR'=> 'UNITED KINGDOM',
    ];

    /**
     * @return array
     */
    public static function getCountries(): array
    {
        return self::$countries;
    }

    /**
     * @param $code
     * @return string
     */
    public static function getCountry($code): string
    {
        return self::$countries[$code];
    }
}