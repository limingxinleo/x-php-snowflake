# x-php-snowflake
snowflake 64位自增ID算法

## 安装
~~~
composer require limingxinleo/x-php-snowflake
~~~

## 使用
- 实现自己的Id类

~~~php
<?php 
namespace Tests\Snowflake;

use Xin\Snowflake\Client;

class Test extends Client
{
    public function getBeginAt()
    {
        return strtotime('2017-01-01') * 1000;
    }
}
~~~

- 调用
~~~php
<?php

$id = Test::getInstance()->id(1, 1);
~~~

## 使用年限
默认情况下有41个bit可以供使用，那么一共有T（1llu << 41）毫秒供你使用分配，年份 = T / (3600 * 24 * 365 * 1000) = 69.7年