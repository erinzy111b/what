<?php
// 列 橫的
$row = $_GET['row'];
// 行 直的
$col = $_GET['row'];

// 第一層迴圈的迭代器 跟 第二層迴圈的迭代器，要以不同的變數名稱命名，不然 第二層迴圈的迭代器 會取到 第一層迴圈的值
// $a = iterator 迭代器
for($a=1; $a<=$row; $a++) {
    // $b = iterator 迭代器
    for($b=1; $b<=$col; $b++) {
        echo "*";
    };

    // 換行
    echo "<br>";

    // 每跑過一列，行數就減一
    $col = $col-1;
};

?>
