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

<body>
  <form action="php.login.php" method="post" id="form">
    會員名稱：<input type="text" name="uname"><br>
    密碼：<input type="password" name="upass"><br>
    <input type="submit" value="登入"> &emsp; <input type="reset" value="取消">
  </form>
</body>


<script>


</script>

</html>



<?php

//if (isset($_GET['uname']) && isset($_GET['upass']) && !empty($_GET['uname']) && !empty($_GET['upass'])

//) {}

if (empty($_POST['uname']) || empty($_POST['upass'])) {
    return;
}

$userpass = array(
    'admin' => '12345',
    'woof' => '98798',
);

$count = count($userpass);

if (!$_POST['uname'] || !$_POST['upass']) {
    echo "<div class='error'>請輸入帳號密碼！</div>";
} else {
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $count = 1;
    foreach ($userpass as $key => $value) {
        if ($key == $username) {
            break;
        } else {
            if ($count == count($userpass)) {
                echo "<div>帳號密碼不相符！</div>";
                exit;
            }
            $count++;
        }
    }

    if ($userpass[$username] == $password) {
        echo "<div class='welcome'>$username 會員你好！ <br> 你有新留言 </div>";
        echo "<script>
          document.getElementById('form').style.display = 'none'
          </script>";

    } else {
        echo "<div class='error'>帳號密碼不相符！</div>";
    }

}

?>