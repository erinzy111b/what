<?php

$user = $_GET["user"];
$email = $_GET["email"];
$edu = $_GET["edu"];
$hobbys = $_GET["hobbys"];

$hobby = implode(',', $hobbys);

echo "使用者 {$user} <br> 他的信箱是：{$email} &nbsp;  學歷是：{$edu} &nbsp;  嗜好是：{$hobby}"

?>