<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  </style>




</head>

<body>




</body>

</html>


<?php
if ($_POST['row'] > 0)
{

  $row = $_POST['row'];
  for($i = 0; $i <$row; $i++ ){
    for($j = 0; $j < $row - $i; $j++){
      echo "*";
    }
    echo "<br>";
  }
}
?>