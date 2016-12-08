<?php
//factory设计模式
class A{}
class B{}

//设计一个工厂类：这个工厂类，有一个静态方法；
//通过该方法可以获得指定类的对象！

class Factory{
  static function GetObject($className)
  {
    $obj = new $className();
    return $obj;
  }
}


$o1 = Factory::GetObject("A");
$o2 = Factory::GetObject("B");
$o3 = Factory::GetObject("A");

var_dump($o1); echo "<br />";
var_dump($o2); echo "<br />";
var_dump($o3); echo "<br />";
