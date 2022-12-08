<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>第二題：抽數字</title>
</head>

<body>

  第二題：抽取指定範圍指定個數的不重複數值<br><br>

  <form name="20221206" action="_ex2.php" method="get" align="left">

    最小值：<input type="number" name="min"><br>
    最大值：<input type="number" name="max"><br>
    個數：<input type="number" name="times"><br><br>
    <input type="reset" value="重置"> &nbsp; <input type="submit" value="送出">
  </form><br>

  <?php

if (
    isset($_GET['min']) && isset($_GET['max']) && isset($_GET['times'])
) {

    $arg1 = $_GET["min"];
    $arg2 = $_GET["max"];
    $arg3 = $_GET["times"];

    $allresult = array();
    $i = count($allresult);

    if ($arg1 <= $arg2) {
        if ($arg3 <= ($arg2 - $arg1 + 1)) {
            while ($i + 1 <= $arg3) {
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
        } else {echo '不合理的次數要求';}
    } else {echo '最小值請勿大於最大值';}
} else {echo '請填入數字';}

?>

</body>

</html>