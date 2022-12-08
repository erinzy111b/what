<?php

function CircleArea($r)
{
    echo "半徑為" . $r . "的圓面積為" . ($r * $r * 3.14159) . "<br>";
}

function SquareArea($L)
{
    echo "邊長為" . $L . "的正方形面積為" . ($L * $L) . "<br>";
}

$func = "CircleArea";
$func(10);
$func = "SquareArea";