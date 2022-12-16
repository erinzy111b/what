<?php
trait Trait1
{
  public function hello()
  {
    echo "{Trait1 上的 hello()} <br>";
  }
  public function hi()
  {
    echo "{Trait1 上的 hi() } <br>";
  }
}

trait Trait2
{
  public function hello()
  {
    echo "{Trait2 上的 hello()} <br>";
  }
  public function hi()
  {
    echo "{Trait2 上的 hi()} <br>";
  }
}

// class Class1
// {
//   use Trait1, Trait2;
// }

//使用 insteadof 解決碰撞

class Class1
{
  use Trait1, Trait2 {
    //取代 Trait1 上的 hello() , 使用 Trait2 上的 hello()
    Trait2::hello insteadof Trait1;
    //取代 Trait2 上的 hi() , 使用 Trait1 上的 hi()
    Trait1::hi insteadof Trait2;
  }
}

$obj1 = new Class1;
$obj1->hello();
$obj1->hi();

//使用 insteadof 或 as 解決碰撞
class Class2
{
  use Trait1, Trait2 {
    //取代 Trait1 上的 hello() , 使用 Trait2 上的 hello()
    Trait2::hello insteadof Trait1;
    //取代 Trait2 上的 hi() , 使用 Trait1 上的 hi()
    Trait1::hi insteadof Trait2;
    // Trait2 上的 hi(), 使用別名 hei()
    Trait2::hi as hei;
    // Trait1 上的 hello(), 使用別名 hehe()
    Trait1::hello as hehe;
  }
}

$obj2 = new Class2;
$obj2->hello();
$obj2->hi();
$obj2->hei();
$obj2->hehe();