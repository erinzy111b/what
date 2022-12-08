<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>請輸入有幾個ROW</title>
  <style>
  body {
    text-align: left;
  }
  </style>
</head>
<form action="EX1.php" method="post" id="form">
  請輸入列(row)數量:<input type="text" name="r_amount"> <br>
  <input type="submit" value="送出"><br>
</form>

<body>

</body>

</html>

<?php
  if (empty($_POST["r_amount"])){
    return;
  }
  $r_amount = $_POST["r_amount"];
  for($row =0 ; $row < $r_amount ; $row++){
    for($col =0 ; $col < $r_amount - $row ; $col++){
      echo "*";
    }
    echo "<br>";
  }
?>