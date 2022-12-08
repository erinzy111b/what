<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>作業星星</title>
  <style>
  /* body {
      text-align: center;
    } */
  </style>
</head>

<body style="text-align: center">
  <form action="exam3.php" method="post">
    請輸入列(row)數: <input type="text" name="tyrow"><br>
    <input type="submit" value="送出">
  </form>
</body>

</html>
<?php
$y = $_POST['tyrow'];
//$num = count($y);
echo $y;
for ($x = 0; $x < $y; $x++) {
    echo "*" . "<br>";
}
?>