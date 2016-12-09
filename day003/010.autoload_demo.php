<?php
function __autoload($class_name)
{
  require './' .$class_name. ".class.php";
}
$obj1 = new A();

var_dump($obj1);
