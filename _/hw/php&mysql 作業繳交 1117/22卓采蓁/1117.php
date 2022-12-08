<?php
//題目:遞減的star三角形
$x=0;
$y=0;

//5*5的star
for ( $x=1 ; $x <= 5 ; $x++){
    for($y=1; $y <=5 ; $y++){
        echo "*";
    }
	echo"* <br>";
}
echo "<hr>";

for ( $x=5 ; $x >= 0 ; $x--){
    for($y=1 ; $y <= $x ; $y++){
        echo "*";
    }
	echo"* <br>";
}

?>