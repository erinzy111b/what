<?php
//explode('分割字元',字串變數);
$courses = "HTML CSS JS PHP";
// $arr =  explode(",", $courses);
$arr =  explode(" ", $courses);
echo count($arr) . "<br>";
echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";
echo $arr[3] . "<br>";

foreach ($arr as $value) {
  echo $value . "<br>";
}

// foreach ($courses as $course) {
//   echo $course . "<br>";
// }


// $members = ["John" => "20", "Mary" => "18", "Jack" => "19"];
// $m_value = implode(",", $members);
// echo $m_value . "<br>";

// $m_key = implode(",", array_keys($members));
// echo $m_key . "<br>";