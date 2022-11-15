<?php

$a = 123;

echo $a . "<br>";

$a = 999.999 . "<br>";

echo $a . "<br>";

$var = '$a';
$var1 = "$a";

echo $var . "<br>";
echo $var1 . "<br>";

echo "======= 動態變數 ========<br>";
$hello = 'world';
$hell = '123';
$world = 'hell';

echo ${$hello} . "<br>";