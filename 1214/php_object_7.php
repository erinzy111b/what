<?php
class Peo
{
    public $peoName;

    public function __construct($str)
    {
        $this->peoName = $str;
    }
}
//令 obj1 指向 peoName 屬性為 allen 的案例
$obj1 = new Peo("allen");
//令 obj2 指向 peoName 屬性為 allen 的案例
$obj2 = new Peo("allen");
//令 obj3 指向 $obj1 所指向的案例,
$obj3 = $obj1;

// true 用==會比較兩方物件的類別和值
if ($obj2 == $obj1) {
    echo '$obj2 的成員與值和 $obj1 相同';
} else {
    echo '$obj2 的成員與值和 $obj1 不同';
}

// false 用===會比較兩方物件所屬的類別和案例(記憶體儲存位置), 因為obj1和obj2各自new了一次新的儲存位置, 所以是false
if ($obj2 === $obj1) {
    echo '$obj2 $obj1 指向相同案例';
} else {
    echo '$obj2 $obj1 指向不同案例';
}

// true obj3 直接調用 obj1 塞在記憶體位置的東西, 因此可以不占記憶體空間而使用 obj1 的內容
if ($obj3 === $obj1) {
    echo '$obj3 $obj1 指向相同案例';
} else {
    echo '$obj3 $obj1 指向不同案例';
}

?>;