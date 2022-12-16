<?php
class Father
{
    public $pubPro = '父類別公開的屬性'; //公開的屬性沒有什麼好說的, 正常情況下大家都能用
    protected $protecPro = '父類別受保護的屬性'; //受保護的屬性可供直接繼承的子類別使用, 但由外部呼叫新的子類別時即報錯
    private $priPro = '父類別私有的屬性'; //私有的屬性只有自己內部能使用

    public function fatherPublicPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }

    protected function fatherProtectPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }

    private function fatherPrivatePut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }
}

class Son extends Father
{
    public function SonSelfPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        //echo $this->priPro . "<br>";
    }
}

$father = new Father;
echo $father->pubPro . "<br>"; // OK 父類別公開的屬性
//echo $father->protecPro . "<br>"; // NG 受保護的屬性，外部無法直接訪問
//echo $father->priPro . "<br>";   //  NG 私有的屬性，外部無法直接訪問

echo $father->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $father->fatherProtectPut() . "<br>"; //NG 受保護的方法，外部無法直接訪問
//echo $father->fatherPrivatePut() . "<br>"; //NG 私有的方法，外部無法直接訪問

$son = new Son;
echo $son->pubPro . "<br>"; // OK 父類別公開的屬性
//echo $son->protecPro . "<br>";  // NG 受保護的屬性，外部無法直接訪問
//echo $son->priPro . "<br>";       //  NG 私有的屬性，外部無法直接訪問

echo $son->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $son->fatherProtectPut() . "<br>"; //NG 受保護的方法，外部無法直接訪問
//echo $son->fatherPrivatePut() . "<br>"; //NG 私有的方法，外部無法直接訪問

$son->SonSelfPut(); //其中繼承來的 $priPro 屬性是父類別私有的東西不能拿來使用