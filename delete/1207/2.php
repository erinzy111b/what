<?php

// 2. 設計一函數F(w,h),印出寬w,高h如下的數字矩陣。
//    (以w=5,h=3為例)
//    1  2  3  4  5
//    2  4  6  8 10
//    3  6  9 12 15
//  其中第二行是第一行的兩倍, 第三行是第一行的三倍, 以此類推.
$w = 9;
$h = 9;

function F($w, $h)
{
    echo "<table align='center' border='0'>";

    for ($x = 1; $x <= $h; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= $w; $y++) {
            echo "<td>" . "&nbsp;" . $y * $x . "&nbsp;" . "</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
}
F($w, $h);