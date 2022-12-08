<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="http://web111b.com:6080/1117/work.php" method="post">
    請輸入列(row): <input type="text" name="row"><br>
    <input type="submit" value="送出">
  </form>

  <?php

 if (empty($_POST['row']) ) {
 echo "<div style= color:red></div>";}else {
$row1 = $_POST["row"];

for ($x = $row1; $x>0; $x--){

  for ($y =1; $y <= $x; $y++){
      echo "*";
  }
echo "<br>";
} }





  ?>


</html>