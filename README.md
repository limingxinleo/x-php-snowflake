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
        return strtotime('2017-01-01');
    }
}
~~~

- 调用
~~~php
<?php

$id = Test::getInstance()->id(1, 1);
~~~
