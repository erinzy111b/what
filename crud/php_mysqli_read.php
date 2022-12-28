<?php

echo "
    <style>
      table,td{
        border-collapse:collapse;
      }
    </style>
";

require_once "connDB.php";

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

//總共有幾筆資料
$record = mysqli_num_rows($result);
//每頁顯示幾筆資料
$per_page = 5;
$total_page = ceil($record / $per_page); //天花板函式, 餘數結果會+1

if (isset($_GET['page'])) {
    $page = intVal($_GET['page']);
    //強制將收到的結果轉為值
} else {
    $page = 1;
}

$start = ($page - 1) * $per_page;
//$start = ($page * $per_page) - $per_page;
// $sql = "SELECT * FROM `students` LIMIT " . $start . "," . $per_page;
$sql = "SELECT * FROM `students` LIMIT {$start},{$per_page}";
$result = mysqli_query($conn, $sql);

echo "<h1 align='center'>學生資料管理系統</h1>";
echo "<p align='center'>總共有 {$record} 筆資料，" . "目前在第 {$page} 頁</p>";
echo "<p align='center'><a href='php_mysqli_create.php'>新增學生資料</a></p>";

//資料內容呈現
echo "<p><table align=center border=1>";
//資料表頭
echo "<tr>
      <th>座號</th>
      <th>姓名</th>
      <th>性別</th>
      <th>生日</th>
      <th>電子郵件</th>
      <th>電話</th>
      <th>地址</th>
      <th>身高</th>
      <th>體重</th>
      <th colspan='2'>功能</th>
</tr>";

//資料內容
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align=center>";
    echo "<td>" . $row['cID'] . "</td>";
    echo "<td>" . $row['cName'] . "</td>";
    echo "<td>" . $row['cSex'] . "</td>";
    echo "<td>" . $row['cBirthday'] . "</td>";
    echo "<td>" . $row['cEmail'] . "</td>";
    echo "<td>" . $row['cPhone'] . "</td>";
    echo "<td>" . $row['cAddr'] . "</td>";
    echo "<td>" . $row['cHeight'] . "</td>";
    echo "<td>" . $row['cWeight'] . "</td>";
    //第一種寫法
    echo "<td><a href='php_mysqli_update.php?cID=" . $row["cID"] . "'>修改</a></td>";
    //第二種寫法
    echo "<td><a href='php_mysqli_delete.php?cID={$row["cID"]}'>刪除</a></td>";
    echo "</tr>";
}

echo "</table></p>";

echo "<table align='center'";
echo "<tr>";
echo "<td>";

$prev = $page - 1;
$next = $page + 1;

if ($page > 1) {
    echo "<a href='?page=1'>首頁</a>&emsp;<a href='?page=$prev'>上一頁</a>&emsp;";
}

if ($page < $total_page) {
    echo "<a href='?page=$next'>下一頁</a>&emsp;<a href='?page=$total_page'>末頁</a>";
}

echo "</td>";
echo "</tr>";
echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);