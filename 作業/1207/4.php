<!-- //  4. 輸入一正整數, 判斷其奇偶. -->
<html>
<form name="20221207" action="4.php" method="post" align="left">

  請輸入正整數：<input type="number" name="num"><br><br>
  <input type="reset" value="重置"> &nbsp; <input type="submit" value="送出">
</form><br>

<!-- ^\+?[1-9][0-9]*$ -->

<?php

if (isset($_POST['num'])) {

    if ($_POST['num'] = null) {

        if (!preg_match("/^-[0-9]*[1-9][0-9]*$/", $_POST['num'])) {

            $i = $_POST['num'] / 2;

            if (!preg_match("/^[0-9]*[0-9][0-9]*$/", $i)) {
                echo $_POST['num'] . ' 是奇數';
            } else {
                echo $_POST['num'] . ' 是偶數';
            }
            ;
        } else {echo $_POST['num'] . ' 非正整數，請重新輸入';
        }
    } else {echo 'null';}

} else {}

?>

</html>