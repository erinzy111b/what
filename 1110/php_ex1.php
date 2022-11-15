<?php



$score[0] = 101;
$score[1] = 102;
$score[2] = 104;
$score[3] = 105;
$score[4] = 106;
$math = ['+','+','+','+','='];
$value = 0;
for ($i=0;$i < count($score);$i++){
  echo $score[$i];
  echo $math[$i];
  $value = $value + $score[$i];
}
echo $value."<br/>";


//


$score[0] = 200;
$score[1] = 201;
$score[2] = 203;
$score[3] = 205;
$score[4] = 300;
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