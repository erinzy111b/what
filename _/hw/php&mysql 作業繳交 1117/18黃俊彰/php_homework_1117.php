<?php

if (empty($_POST['rows'])) {
    echo "<div class='error'>請輸入列數!</div>";
    exit;
}

echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 0; $i < $_POST['rows']; $i++) {
    for ($j = 0; $j < ($_POST['rows'] - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}

?>