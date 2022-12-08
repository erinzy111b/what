<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<form action="q1-1.php" method="get">
  請輸入列:<input type="text" name="row" id="">
  <br>
  <input type="submit" value="送出">
</form>

<body>
  <table align='center'>

  </table>
</body>

</html>

<?php
if (empty($_GET['row'])) {

} else {
    $x = $_GET['row'];
    for ($i = $x; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            # code...
            echo "*";
        }
        # code...
        echo "<br>";
    }
}