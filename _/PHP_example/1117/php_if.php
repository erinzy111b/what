<?php

$score = 84;

if ($score > 60)
  echo "success <br>";


if ($score > 70)
  echo "success <br>";
else
  echo "fail <br>";


if ($score >= 90) {
  echo "A . <br>";
} elseif ($score >= 80) {
  echo "B . <br>";
} elseif ($score >= 70) {
  echo "C . <br>";
} elseif ($score >= 60) {
  echo "D . <br>";
} else {
  echo "不及格 <br>";
}