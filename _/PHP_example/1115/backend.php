<?php
//取得前台的資料
$user = $_GET["user"];
$email = $_GET["email"];;
$edu = $_GET["edu"];
$hobbys = $_GET["hobbys"];

//法1:
// foreach ($hobbys as $hobby) {
//   echo $hobby . "<br>";
// }

//法2:
// echo implode(",", $hobbys) .  "<br>";
$h = implode(",", $hobbys);


echo "使用者是: {$user} 他的郵件是: {$email} <br> 學歷是: {$edu} 是嗜好有 : {$h}";
//echo "使用者是: {$user} 他的郵件是: {$email} <br> 學歷是: {$edu} ";