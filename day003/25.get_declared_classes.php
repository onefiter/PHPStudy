<?php
class A{}
class B{}
/**
 * 获得系统所有的类名
 * 系统自带的大概有138个类
 */
$v1 = get_declared_classes();
echo "<pre>";
var_dump($v1);
echo "</pre>";
