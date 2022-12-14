<?php

// 1. 一般陣列: 搭配索引子(整數)來存取元素
// 2. 結合陣列: 一對鍵值 key  => value


echo "======= 1. 一般陣列 ======= <br>";
//方式 1: 直接指定陣列元素的值
$name[] = 3;
$name[] = "str";
$name[] = true;

echo $name[1] . "<br>";  //
//或
$name1[0] = 3;
$name1[1] = "str";
$name1[2] = true;
echo $name1[2] . "<br>";
//布林值：
//非零的值(含負數、任何資源、NAN等)即為true;
//零、空字串、不含任何元素的陣列、布林值False本身、NULL則為False

//或
$name2 = [3, "str", true];
echo $name2[0] . "<br>";

//方式 2: 使用 array 建構式
$name3 = array(3, "str", true);
echo $name3[0] . "<br>";

print_r($name3);
echo "<br>";
var_dump($name3);
echo "<br>";

//陣列拜訪
for ($i = 0; $i < count($name3); $i++) {
  echo $name3[$i] . "<br>";
}

foreach ($name3 as  $value) {
  echo $value . "<br>";
}