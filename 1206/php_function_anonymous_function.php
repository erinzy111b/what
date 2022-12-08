<?php

//匿名函式(不給函式明也行的寫法)

$counter =
function ($res = 0) {
    static $res;
    $res += 1;
    echo $res . "<br>";
};

$counter();
$counter();
