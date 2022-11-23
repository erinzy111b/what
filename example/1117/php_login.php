<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡迎頁面</title>

  <style>
  body {
    text-align: center;
  }

  div.welcome {
    color: green;
  }

  div.error {
    color: red;
  }
  </style>
</head>

<body style="text-align: center">
  <form action="login.php" method="post">
    會員名稱: <input type="text" name="uname"><br>
    密碼: <input type="password" name="upass"><br>
    <input type="submit" value="登入">
  </form>
</body>

</html>



<?php

if (empty($_POST['uname']) || empty($_POST['upass'])) {
  return;
}

$userpass =  array(
  'admin' => '12345',
  'tony' => '54321'
);

$count = count($userpass);

if (!$_POST['uname'] || !$_POST['upass']) {
  echo "<div class='error'>請輸入帳號密碼!</div>";
} else {
  //有收到 $uname 與 $upass
  $username = $_POST['uname'];
  $password = $_POST['upass'];

  $count = 1;
  foreach ($userpass as $key => $value) {
    if ($key == $username) {
      break;
    } else {
      if ($count == count($userpass)) {
        echo "<div class='error'>無此人!</div>";
        // exit;
        return;
      }
      $count++;
    }
  }


  if ($userpass[$username] == $password) {
    echo "<div class='welcome'>$username 會員你好!";
    echo "你有新留言 </div>";
    // echo "<div class='welcome'>$username 會員你好! <br>你有新留言 </div>";
  } else {
    echo "<div class='error'>帳號密碼不相符!</div>";
  }
}
?>