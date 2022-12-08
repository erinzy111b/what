<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>結果頁</title>

  <style>
  body {
    text-align: center;
  }
  </style>



</head>

<body>

  結果<br>
  <br>

  <table align="center" boder=0>

    <?php

$rownum = $_POST['rownum'] + 1;
$row = 1;
$col = $rownum;

// for ($row = 0; $row <= $rownum; $row++) {
//     echo "<tr> <td> $ </td> ";

for ($row = 1; $row <= $rownum; $row++) {
    echo "<tr>";

    $rowid = $rownum - $row;
    echo "<td> $rowid </td>";

    for ($col = $rownum; $col - $row; $col--) {

        echo " <td> &nbsp; * &nbsp; </td>";
    }

    echo "</tr>";
}

// for ($row = 1; $row <= $rownum; $row++) {
//     echo " <tr>";
//     for ($y = 1; $y <= $rownum; $y++) {
//         echo "<td> &nbsp; * &nbsp; </td>";
//     }
//     echo "</tr>";
// }

?>

</body>

</html>