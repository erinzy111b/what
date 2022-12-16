<?php

namespace myabstract\pay;

//父類別
class Payroll
{
    public $Name;

    public static function Payment($Hours, $PayRate)
    {
        return $Hours * $PayRate;
    }
}

class BonusPayroll extends Payroll
{
    //Override 父類別的方法
    public static function Payment($Hours, $PayRate)
    {
        return $Hours * $PayRate + 5000;
        //方法一: 改用 parent 來操作
        // return parent::Payment($Hours, $PayRate) + 2000;
        //方法二: 改用 父類別名稱 來操作
        // return Payroll::Payment($Hours, $PayRate) + 3000;
    }
}

echo '尚未加上獎金的薪資為' . Payroll::Payment(100, 80) . "<br>";
echo '加上獎金的薪資為' . BonusPayroll::Payment(100, 80) . "<br>";