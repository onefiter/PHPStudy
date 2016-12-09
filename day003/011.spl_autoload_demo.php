<?php
/**
 * 自定义自动加载函数
 */
//声明autoload1，autoload2自动加载函数
spl_autoload_register("autoload1");
spl_autoload_register("autoload2");

function  autoload1($class_name)
{
  echo "<br />准备在 autoload1 加载这个类：$class_name";
  $file = './class/' . $class_name . '.class.php';
  if (file_exists($file)) {
    include_once $file;
  }
}
function autoload2($class_name)
{//这个自动加载函数，用于加载lib目录中的类文件
	echo "<br />准备在 autoload2 加载这个类：$class_name";
	$file = './lib/' . $class_name . ".class.php";
	if( file_exists($file) ){	//如果该文件存在
		include_once $file;
	}
	//如果不存在，则本函数就没有成功加载该类文件，就会继续找后续加载函数！
}

$a1 = new A();
echo "<br />";
var_dump($a1);

$b1 = new B();
echo "<br/>";
var_dump($b1);
