<?php
if(empty($_GET["amount"])){
  echo"<div class='error'>請輸入數量</div>";
}
else{
$amount=$_GET["amount"];
for($i=$amount;$i>0;$i--){
  for($k=1;$k<=$i;$k++){
    echo"*";
  }
 echo"<br>";
}}
?>
