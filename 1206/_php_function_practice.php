<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice</title>
</head>

<body>
  第一題<br><br>
  <form name="20221206" action="http://web111b.com:6080/1206/_php_function_practice.php" method="get" align="left">
    哪一餐：<input type="text" name="when"><br>
    吃什麼：<input type="text" name="food"><br><br>

    <input type="reset" value="取消"> &nbsp; <input type="submit" value="送出">
  </form><br>

  <?php

if (
    isset($_GET['when']) && isset($_GET['food'])
) {

    $a = $_GET["when"];
    $b = $_GET["food"];

    function eat($a, $b)
    {
        echo "今天" . $a . "吃" . $b . "<br>";
    }
    eat($a, $b);

}
?>

  <br><br>

  第二題：抽取不重複數值<br><br>

  <form name="20221206" action="http://web111b.com:6080/1206/_php_function_practice.php" method="get" align="left">

    最小值：<input type="number" name="min"><br>
    最大值：<input type="number" name="max"><br>
    個數：<input type="number" name="times"><br><br>
    <input type="reset" value="取消"> &nbsp; <input type="submit" value="送出">
  </form><br>

  <?php

if (
    isset($_GET['min']) && isset($_GET['max']) && isset($_GET['times'])
) {

    $arg1 = $_GET["min"];
    $arg2 = $_GET["max"];
    $arg3 = $_GET["times"];

    // echo (rand($arg1, $arg2));

    $allresult = array();
    $i = count($allresult);

    if ($arg1 <= $arg2) {
        if ($arg3 <= ($arg2 - $arg1 + 1)) {
            // $i = 1;
            while ($i + 1 <= $arg3) {
                // for ($i = 0; $i <= $arg3; $i++) {
                $result = rand($arg1, $arg2);
                if (!in_array($result, $allresult)) {
                    array_push($allresult, $result);
                    echo $result;
                    echo "<br>";
                } elseif (in_array($result, $allresult)) {
                    echo '抽出數值重複，重新抽取。<br>';
                }
                $i = count($allresult);

            }

            // for ($i = 0; $i <= $arg3; $i++) {
            //     $i = rand($arg1, $arg2);
            //     echo $i;
            // }
            // $a = rand($arg1, $arg2);
            // echo $a;
        } else {echo '不合理的次數要求';}
    } else {echo '最小值請勿大於最大值';}
} else {echo '請填入數字';}

// in_array();
// array_push();

?>

  <!--   in_array   array_push   -->



</body>

</html>






<!-- //  $a = "早餐";
//  $b = "漢堡";
//  function eat($a, $b)
//  {
//   echo "今天" . $a . "吃" . $b . "<br>";
//  }
//  eat($a, $b);

//  $a, $b 的值改由表單輸入

// rand(min,max); 在 $arg1~$arg2 的範圍內抽出不重複的 $arg3 個號碼

// rand($arg1, $arg2);
// in_array
// array_push  -->



<!-- global $allresult;
global $i; -->
