<?php
class A
{
  function __construct()
  {
    echo "<br/>分类中的构造方法";
    var_dump($this);
  }
}

class B extends A
{
  function __construct()
  {
    echo "<br />子类中的构造方法";
    var_dump($this);
  }
}

class C extends A
{
    //这个类中没有构造方法
}
/**
 * 谁调用$this就是谁
 */
$o1 = new B();
$o2 = new C();
