<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="homework_star.php" method=" " id="post">
    請輸入列(row)數:<input type="Text" name="star"><br>
    <input type="submit" value="送出">


  </form>

</body>

</html>

<?php
if (!empty($_GET['star'])) {

    $rowtatol = $_GET['star'];
    
    for ($row = 1; $row <= $rowtatol; $row++) {
        
        for ($row1 = $rowtatol; $row1 >= $row; $row1--) {
            echo "*";
        }
        echo "<br>";

    }
    echo "<script>document.getElementById ('post').style.display = 'none'</script><br>";
}
?>