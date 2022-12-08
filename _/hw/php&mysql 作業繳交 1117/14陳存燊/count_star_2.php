<?php
$x = $_POST['ROW'];
for ($i = $x; $i >= 1; $i--) {
  for ($j = 1; $j <= $i ; $j++) {
    echo "*";
  }
  echo "<br>";
}
?>