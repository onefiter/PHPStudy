<?php
/**
 * __tostring :将对象当做字符串来使用
 */
class A
{
  public $name;
  public $age;
  public $edu;

  function __construct($name,$age,$edu)
  {
    $this->name = $name;
    $this->age = $age;
    $this->edu = $edu;

  }

  function __tostring()
  {

    $str = "姓名:" . $this->name;
    $str .= ",年龄:" . $this->age;
    $str .= ",学历:" . $this->edu;
    return $str;
  }
}

$obj1 = new A('张三', 18, '本科');
echo $obj1;
