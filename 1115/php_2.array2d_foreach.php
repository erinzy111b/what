<?php

$row0 = array(64, 65);
$row1 = array(77, 81);
$row2 = array(89, 93);

$grades = array($row0, $row1, $row2);
print_r($grades);
echo "<br>";
$grades[1][0] = 30;

$total = 0;

echo count($grades), "<br>";

$row = 0; //為了下方pa而定義的，不然找不到$row
foreach ($grades as $matrix) {
    $sum = 0;

    foreach ($matrix as $element) {
        // $sum = $sum + $grades[$row][$col];
        $sum += $element;
        $total += $element;
    }
    $row++; //$row = $row+1
    echo "第" . $row . "小計為：" . $sum . "<br>"; //pa在此
}
echo "總計為： {$total} <br>";

print_r($grades);
