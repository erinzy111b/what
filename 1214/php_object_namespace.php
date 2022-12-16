<?php

//命名空間有業界慣例, 不能亂取, 通常以 公司or組織\功能\名稱 的格式來命名
//命名空間可幫助調用不同內容的同名檔案時區分使用, 須寫在頁面第一行, 宣告命名空間後, 即可於其他地方以include呼叫檔案, 繼而準確指向正確頁面內的方法
//可以為命名空間設定別名

namespace my\name;

include "php_object_9.php";

use myabstract\pay\Payroll as abc;

//在 \my\name 命名空間內定義 MyClass 類別
class MyClass
{

    public function MyFunction()
    {
    }
}

//在 \my\name 命名空間內定義 MYCONST 常數
const MYCONST = 1;

// $x = new Myclass;
// $y = MYCONST;

$x = new \my\name\Myclass;
$y = \my\name\MYCONST;

echo $y . "<br>";

$a = new \myabstract\pay\Payroll;
echo $a->Payment(4, 56) . "<br>";

class test extends \myabstract\pay\Payroll

{

}

class test1 extends abc
{

}