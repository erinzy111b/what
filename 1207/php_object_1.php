<?php
class Peo
{

    public $peoName = "allen";

    //定義方法
    public function showSelf()
    {
        echo "Say Hello !";
        echo $this->peoName . "<br>";
    }
}

$peo = new Peo;
$peo->peoName = "aby";
$peo->showSelf();
print_r($peo);
