<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  div.error {
    color: red;
  }
  </style>
  <script>
  document.getElementById('star').style.display = "none";
  </script>
</head>

<body>
  <form action="php_test01.php" method="get" id="star" align="center">
    請輸入列(ROW)數 : <input type="text" name="row"><br>
    <input type="submit" value="send"><br>
  </form>


  <?php

if (empty($_GET['row'])) {
    return;
}

if (!$_GET['row']) {
    echo "Please enter the count";
} else {
    $row = $_GET['row'];
    echo "<script>
        document.getElementById('star').style.display = 'none';
        </script>";

    for ($i = 0; $i < $row; $i++) {
        for ($x = ($row - $i); $x > 0; $x--) {
            echo "*";
        }
        echo "<br>";
    }
}

?>

</body>

</html>