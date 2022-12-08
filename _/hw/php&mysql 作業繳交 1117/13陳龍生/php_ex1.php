<?php
if ($_POST['row'] > 0){

  $row = $_POST['row'];
  for($i = 0; $i < $row; $i++) {
    for($j = 0; $j < $row - $i; $j++) {
      echo "*";
    }
    echo "<br>";
  }
}





?>