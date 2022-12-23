<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>與我聯絡</title>
  <style></style>
</head>

<body>
  <table align="center">
    <tr>
      <td align="left">
        <fieldset>
          <legend>
            <h2 align="center">聯絡表單</h2>
          </legend>
          <form name="form" action="contact.php" method="post">
            <label>
              姓名：<input type="text" name="name" required="required"><br>
              <!-- pattern="[^%!&+'?<>/\\|^0-9]" -->
              <br>
            </label>
            <label>
              電話：<input type="tel" name="tel" required="required"
                pattern="(\d{2,3}-?|\(\d{2,3}\))\d{3,4}-?\d{4}|\d{4}(\d{6}|-\d{6}|-\d{3}-\d{3})"><br>
              <!-- 電話：<input type="tel" name="tel" required="required"><br> -->
              <!-- 因為世界各地電話號碼格式不同, 使用tel並不會特別驗證資料格式, 若要規定格式還是要用正規表達式限制 (據說用tel格式在手機介面輸入時會直接跑數字鍵盤的樣子...? ) -->
              <br>
            </label>
            <label>
              <span>意見：</span><textarea name="request" cols="30" rows="5" style="vertical-align:top"></textarea><br>
              <br>
            </label>
            <div align="center">
              <input type="submit" value="確定">&emsp;<input type="reset" value="取消"><br>
            </div>
            <br>
          </form>
        </fieldset>
      </td>
    </tr>
  </table>

  <br><br>

  <table align="center">
    <!-- <div align="center"> -->
    <tr>
      <td align="left">
        <?php
if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['request'])) {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $request = $_POST['request'];
    // if ($request == null) {
    //     echo "姓名：" . $name . "<br>" . "電話：" . $tel . "<br>";
    // } else {
    echo "姓名：" . $name . "<br><br>" . "電話：" . $tel . "<br><br>" . "意見：" . $request . "<br>";
    // }
}
?>
      </td>
    </tr>
  </table>
  <!-- </div> -->

</body>

</html>