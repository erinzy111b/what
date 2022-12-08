<?php
class Peo
{
  //聲明一公有屬性
  public $peoName = "allen";

  //聲明私有方法
  private function showSelf()
  {
    echo "Say Hello !";
  }

  //聲明公有方法
  public function canUsedFunc()
  {
    //$this 是一個虛擬變數(物件)，表示當前正在調用這個方法的物件。
    $this->peoName;
    $this->showSelf();
  }
}

$peo = new Peo;
echo $peo->peoName . "<br>";
$peo->peoName = 'aby';
echo $peo->peoName . "<br>";
$peo->canUsedFunc();