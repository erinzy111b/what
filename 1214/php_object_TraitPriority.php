<?php

//設一個 Drive (驅動) 的 Trait, 有一特徵: $carName(車名) 和一行為 deiving(駕駛)
/**
 *
 */
trait Drive
{
  public $carName = 'Benz';
  public function hello()
  {
    echo "hello drive<br>";
  }

  public function driving()
  {
    echo "dribing 從 Drive <br>";
  }
}

class Person
{
  public function hello()
  {
    echo "hello person<br>";
  }
  public function driving()
  {
    echo "dribing 從 person <br>";
  }
}

class Student extends Person
{
  use Drive;
  public function hello()
  {
    echo "hello students <br>";
  }
  public function study()
  {
    echo "study  <br>";
  }
}


$student = new Student;
$student->hello(); //student hello
$student->driving(); //dribing 從 Drive