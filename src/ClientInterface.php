<?php
// +----------------------------------------------------------------------
// | ClientInteface.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Xin\Snowflake;

interface ClientInterface
{
    public static function getInstance();

    public function getBeginAt();
}
