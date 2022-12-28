<?php

require_once "connDB.php";

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
while ($row = mysqli_fetch_assoc($result)) {
    # code...
    echo "
 {$row['cID']}
 {$row['cName']}
 {$row['cSex']}
 {$row['cBirthday']}
 {$row['cEmail']}
 {$row['cPhone']}
 {$row['cAddr']}
 {$row['cHeight']}
 {$row['cWeight']}" . "</br>";
}

// 單筆

// require_once "connDB.php";

// $sql = "SELECT * FROM `students`";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// echo "
//  {$row['cID']}
//  {$row['cName']}
//  {$row['cSex']}
//  {$row['cBirthday']}
//  {$row['cEmail']}
//  {$row['cPhone']}
//  {$row['cAddr']}
//  {$row['cHeight']}
//  {$row['cWeight']}" . "</br>";
// $row = mysqli_fetch_assoc($result);
// echo "
//  {$row['cID']}
//  {$row['cName']}
//  {$row['cSex']}
//  {$row['cBirthday']}
//  {$row['cEmail']}
//  {$row['cPhone']}
//  {$row['cAddr']}
//  {$row['cHeight']}
//  {$row['cWeight']}" . "</br>";