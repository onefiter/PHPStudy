<?php
/**
 * extends : 继承
 */
class A{
  public $p1 = "这是A中属性";
  function f1(){
    echo "<br/>这是A中的方法";
  }
}

class B extends A {
  public $p2 = "这是B中的属性";
}

$b1 = new B();

echo "<br/>".$b1->p1;
