<?php

namespace Asrx\Customs\Entity;

/**
 * Class Service
 *
 * @package \Asrx\Customs\Entity
 */
class Service
{

    /**
     * 报送类型 - 新增
     */
    const APPTYPE_CREATE = 1;
    /**
     * 报送类型 - 变更
     */
    const APPTYPE_UPDATE = 2;
    /**
     * 报送类型 - 删除
     */
    const APPTYPE_DELETE = 3;


    /**
     * 业务类型 - 一般进口
     */
    const SERVIER_TYPE_S01 = 'S01';
    /**
     * 业务类型 - 保税区进口
     */
    const SERVIER_TYPE_S02 = 'S02';


    // 是
    const Y = 'Y';
    // 否
    const N = 'N';
    // 未知
    const U = 'U';
}