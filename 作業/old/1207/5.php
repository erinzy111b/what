<!-- //  5. 輸入一串數字, 寫出一數字拆解函數decomp(n), 將其個別數字用空白分開 (ex: 輸入 128917178, 輸出 1 2 8 9 1 7 1 7 8).
//     decomp(4562) 印出 4  5  6  2
//     decomp(8279) 印出 8  2  7  9 -->
<html>

<form name="20221207" action="5.php" method="get" align="left">
  請輸入一串數字：<input type="number" name="num" required="required"><br><br>
  <input type="reset" value="重置"> &nbsp; <input type="submit" value="送出">
</form><br>

<?php

if (isset($_GET['num'])) {

// explode是不是不行啊(›´ω`‹ )
// $n = 1231453413;
// $arr = explode('', $n);
// echo count($arr) . "<br>";
// print_r($arr);

    $n = $_GET['num'];

    function decomp($n)
    {

        // $n = $_GET['num'];
        $nn = preg_split('//', $n, -1, PREG_SPLIT_NO_EMPTY);
        // print_r($arr);
        $n_n = implode(' ', $nn);
        echo '結果：' . $n_n;

    }
    decomp($n);

// $n = $POST_['num'];

}

?>

</html>