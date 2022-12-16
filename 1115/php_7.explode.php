<?php
//explode('分割字元', 陣列);
$courses = "HTML CSS JS PHP";
$arr = explode(" ", $courses);
echo count($arr) . "<br>";
echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";
echo $arr[3] . "<br>";

foreach ($arr as $value) {
    echo $value . "<br>";
}
