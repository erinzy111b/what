<!-- 3. 寫一程式，讓使用者輸入身高(cm)及體重(kg)，作單位換算輸出身高(英吋)及體重(磅)。(1磅=0.454公斤，1吋=2.54公分)
 -->

<html>

<form name="20221207" action="3.php" method="post" align="left">

  身高：<input type="number" name="hight" required="required">&nbsp;cm<br><br>
  體重：<input type="number" name="weight">&nbsp;kg<br><br>
  <input type="reset" value="重置"> &nbsp; <input type="submit" value="送出">
</form><br>

<?php

if (isset($_POST['hight']) && isset($_POST['weight'])) {

    $hight = $_POST['hight'];
    $weight = $_POST['weight'];

    $tr_hight = $hight * (1 / 2.54);
    $tr_weight = $weight * (1 / 0.454);

    echo "身高數值 " . $hight . " 公分，換算結果約為 " . round($tr_hight, 2) . " 英吋" . "<br><br>";
    echo "體重數值 " . $weight . " 公斤，換算結果約為 " . round($tr_weight, 2) . " 磅" . "<br>";

}

?>

</html>