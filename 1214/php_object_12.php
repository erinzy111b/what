<?php
abstract class Pay
{
    public $EmpNme;
    //抽象方法內部只能放公開的方法, 且方法內不能帶有實作(即方法後的{})
    //抽象類別只能被繼承
    abstract public function Payment($Hour, $PayRate);
}

class BonusPay extends Pay
{
    public function Payment($Hour, $PayRate)
    {
        return $Hour * $PayRate + 5000;
    }
}

$obj = new BonusPay;
echo '加上獎金的薪資為' . $obj->Payment(100, 80) . "<br>";