<?php
//单例模式
class Single
{
  //1.私有化构造方法
  private function __construct(){

  }

  //2.定义静态属性
  static private $instance = null;
  //3.定义一个静态方法，从中判断对象是否生成并适当返回该对象；
  static function GetObject()
  {
    //判断是否设置$instance
    if(!isset(self::$instance))
    {
      $obj = new self();
      self::$instance = $obj;
      return $obj;
    }
    else {
      return self::$instance;
    }
  }

}

$obj1 = Single::GetObject();
$obj2 = Single::GetObject();

var_dump($obj1); echo "<br/>";
var_dump($obj2); echo "<br/>";
