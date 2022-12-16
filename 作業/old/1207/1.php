<?php
// 1. 寫一函數square(n,c),以c字元,印出邊長為n之實心正方形。Ex: square(3,'@') 將印出如下形狀
//     @@@
//     @@@
//     @@@

// square($n, $c);

$n = 3;
$c = 'c';

function square($n, $c)
{
    echo "<table align='center' border='0'>";
    for ($x = 1; $x <= $n; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= $n; $y++) {
            echo "<td> $c" . "</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
}
square($n, $c);
