<?php
if (empty($_POST["row"])) {
    echo "<div  style = color:red >請輸入數量</div>";} else {
    $row = $_POST["row"];
    for ($x = $row; $x > 0; $x--) {
        for ($y = 1; $y <= $x; $y++) {
            echo "  *  ";
        }
        echo '<br>';
    }
}