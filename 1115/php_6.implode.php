<?php
//implode('分割字元', 陣列);
$courses = ["HTML", "CSS", "JS", "PHP"];

$s = implode(",", $courses);
echo $s . "<br>";
foreach ($courses as $course) {
    echo $course . "<br>";
}

$members = ["John" => "20", "Mary" => "18", "Jack" => "19"];
$m_value = implode(",", $members);
echo $m_value . "<br>";

$m_key = implode(",", array_keys($members));
echo $m_key . "<br>";
