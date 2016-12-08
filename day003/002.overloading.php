<?php
/**
 * 重载技术__get
 */
class A
{
  public $p1 = 1;
  function __get($pro_name)
  {
    echo "<br />你小心点阿，你正用的属性{$prop_name}我还没有定义呢";
    echo "<br />属性{$prop_name}不存在！";
    return "";
    //也可以返回0，或false，或任何其他被“看做没有”的数据；
    //也可以这样处理：
		trigger_error("发生错误：属性不存在。",  E_USER_ERROR);
		die();
  }
}

$a1 = new A();
echo $a1->p1;
echo $a1->p2;
