<?php

//不宣告靜態變數->一個迴圈跑完$res即清空歸零, 故結果為 1 1

function add($res = 0)
{
    $res += 1;
    echo $res . "<br>";
}

add();
add();

//宣告靜態變數->static $res->迴圈跑完$res還在, 故結果為 1 2

function counter($res = 0)
{
    static $res;
    $res += 1;
    echo $res . "<br>";
}

counter();
counter();