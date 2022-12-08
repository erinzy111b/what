<?php

$Msg = "Hello, this is outside of Func1().";
echo $Msg; //全域變數$Msg的值
Func1();
echo $Msg . "123" . "<br>";

function Func1()
{
    $Msg = "Hello, this is inside of Func1()."; //局部變數
    echo $Msg . "<br>"; //區域變數$Msg的值
}

//寫在方法裡的變數是區域變數
//要在方法內部使用全域變數, 需要先把變數拉進來做全域宣告