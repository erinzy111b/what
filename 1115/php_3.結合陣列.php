<?php

$arr["color"] = "紅色";
$arr["name"] = "John";
$arr["shape"] = "圓形";
$arr[] = 50;

$arr = array("Color" => "紅色", "name" => "John", "shape" => "圓形", 50);

if (!isset($arr["color"])) {
    $arr["color"] = "綠色";
}

unset($arr["color"]);
$arr["color"] = "綠色";