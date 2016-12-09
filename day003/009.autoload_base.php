<?php
/**
 * 什么是执行__autoload？
 * 1.new 一个对象
 * 2.使用静态方法的时候
 * 3.定义一个类(B)并以另一个类(A)作为父类的时候
 * ---------------------------------------
 * 执行__autoload的时候
 * 1.会传入所需类的名字
 * 2.一个类应该保存在单独的文件中
 */
function __autoload( $name ){
	require_once './' . $name . ".class.php" ;
}

$config = array(
	'host' => "localhost",
	'port' => 3306,
	'user' => "root",
	'pass' => "root",
	'charset' => "utf8",
	'dbname' => "php"
);

$db1 = MySQLDB::GetInstance($config);
var_dump($db1);
