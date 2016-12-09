<?php
class A
{
  public $p1 = 1;
  protected $p2 = 2;
  private $p3 = 3;
  static $p4 = 4; //静态属性
  function showAllProperties()
  {
    foreach ($this as $key => $value) {
      echo "<br />属性$key ： $value";
    }
  }
}
$obj1 = new A();
//此时只显示属性$p1
foreach ($obj1 as $key => $value) {
  echo "<br />属性$key ： $value";
}

echo "<hr />";
$obj1->showAllProperties();
