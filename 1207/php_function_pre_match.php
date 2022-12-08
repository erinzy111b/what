<?php

// preg_match(比對正規式, 被比對的字串)

// <form action="" method="post">
// <input type="text" name="telephone" id="">
// <input type="text" name="id_no" id="">
// </form>
//檢查電話號碼的格式為: 2 個數字 + 1 個 "-" 符號 + 8 個數字
if (!preg_match('/^[0-9]{2}-[0-9]{8}$/', $_POST['telephone'])) {
    echo '電話號碼格式錯誤!';
}
//檢查身分證的格式為:
//身分證字號的格式為:
// 1 個英文字母開頭                                        =>  /^[A-Za-z]/
//在台灣身分證字號英文字母後面的第一個數字 1 代表男生 2 代表女生  =>  /[12]/
//最後面再接8個任意數字                                      =>  /[0-9]{8}/ 或是 /\d{8}/

if (!preg_match('/^[A-Za-z][1-2]\d{8}$/', $_POST['id_no'])) {
    echo '身分證字號的格式錯誤!';
}
