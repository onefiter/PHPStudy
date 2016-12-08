<?php

class C1{
  var $p1 = 1;
}
$v1 = 1;
$v2 = $v1 ;

$v1++;

echo "<br />v1 = $v1, v2 = $v2";//2和1

$obj = new C1();
$obj1 =  $obj;
$obj->p1 = 2;
echo "<br />o1->p1={$obj->p1}, o2->p1={$obj1->p1}";//2和2

$obj2 = new C1();
$obj3 = & $obj2;
$obj2->p1 = 2;

echo "<br />o3->p1={$obj2->p1}, o4->p1={$obj3->p1}";//2和2
