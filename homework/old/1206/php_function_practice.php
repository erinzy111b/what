<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>第一題</title>
</head>

<body>

  第一題：今天_____吃_____<br><br>
  <form name="20221206" action="php_function_practice.php" method="get" align="left">
    哪一餐：<input type="text" name="when" required="required"><br>
    吃什麼：<input type="text" name="food" required="required"><br><br>

    <input type="reset" value="重置"> &nbsp; <input type="submit" value="送出">
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

</body>

</html>