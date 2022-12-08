<?php
$rown = $_POST['row'];
for ($x = $rown; $x >= 1; $x--) {

    for ($y = 1; $y <= $x; $y++) {
        echo "*";
    }
    echo " <br>";
}