<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Test;

use Tests\Snowflake\Test;
use Tests\TestCase;

class BaseTest extends TestCase
{
    public function testExample()
    {
        $id = Test::getInstance()->id(1, 1, intval(strtotime('2017-05-27') * 1000));
        $this->assertEquals('52908628377604097', $id);
        $this->assertEquals(17, strlen($id));
    }

    public function testMax()
    {
        $id = Test::getInstance()->id(1, 1, intval(strtotime('2077-01-01') * 1000));
        $this->assertEquals('7941730074624004097', $id);
        $this->assertEquals(19, strlen($id));
    }
}