<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>輸入列數</title>
  <style>
  div.error {
    color: red;
  }
  </style>
</head>

<body>




  <?php

if (empty($_GET['row'])) {
    return;
}
if (empty($_GET['row'])) {
    echo "<div class='error'>請輸入數字</div>";
} else {
    $raw = $_GET['row'];
}
for ($x = 0; $x < $raw; $x++) {
    for ($y = 0; $y < ($raw - $x); $y++) {
        echo "*";
    }
    echo "<br>";

}

?>
</body>

</html>
