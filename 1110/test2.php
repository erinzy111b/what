<?php

//

$score = [101,102,104,105,106];
$math = ['+','+','+','+','='];
$value = 0;
for ($i=0;$i < count($score);$i++){
  echo $score[$i];
  echo $math[$i];
  $value = $value + $score[$i];
}
echo $value."<br/>";

//

$score[0] = 101;
$score[1] = 102;
$score[2] = 104;
$score[3] = 105;
$score[4] = 106;;
$math = ['+','+','+','+','='];


$value = 0;
for ($i=0;$i < count($score);$i++){
  echo $score[$i];
  echo $math[$i];
  $value = $value + $score[$i];
}
echo $value."<br/>";

//

?>