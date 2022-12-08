<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

  </style>

  <script>
  document.getElementById('form').style.display = "none";
  </script>

</head>

<body>

  <form action="test.php" method="get" align="center" id="form">
    請輸入列數:<input type="text" name="nrow"><br>
    <input type="submit" value="送出">
  </form>

  <?php
if (empty($_GET['nrow'])) {
    return;
}

//要設另一個變數,不能去覆蓋原本的nrow
//後台   //前台
$row = $_GET['nrow'];

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < ($row - $i); $j++) {
        echo " * ";
    }
    echo "<br>";
}
echo "<script>
        document.getElementById('form').style.display='none';
        </script>";
?>
</body>

</html>