<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body id="body">
  <form action="php_ex1.php" method="post" id="form">
    請輸入列(row)數：<input type="text" name="txRow"><br>
    <input type="submit" value="送出">
  </form>
</body>

</html>

<?php

if (isset($_POST['txRow'])) {

    $iRow = $_POST['txRow'];
    $iCol = $_POST['txRow'];
    echo "<table align='center' border='1' style='border-collapse:collapse;'>";

    for ($i = 1; $i <= $iRow; $i++) {
        echo "<tr>";
        for ($j = $iCol; $j >= 1; $j--) {
            echo "<td>";
            echo "*";
            echo "</td>";
        }

        echo "</td>";
        echo "<br>";
        $iCol--;
    }

    echo "</table>";

    echo "<script>
  document.getElementById('form').style.display='none'
</script>";
}