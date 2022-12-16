<?php
class name
{
    public $name;

    public function getname()
    {
        return $this->name = "mint";
    }

    public function getnamebythis()
    {
        return $this->name;
    }

    public function getnamebyself()
    {
        return self::getname();
    }
}

class name2 extends name
{
    public function getname()
    {
        return $this->name = "jelly";
    }
}

$newname = new name2;
//new出新的記憶體空間放name2內容
echo $newname->getnamebythis(); // ""
//這裡會先回name2找getnamebythis的函式, 找不到就跑回被繼承的name裡面找, 找到沒給值的'return $this->name', 於是回傳空值
echo "=======================<br>";
echo $newname->getnamebyself(); // mint