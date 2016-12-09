<?php
class A
{
	//当对这个类的对象的不存在的实例方法进行“调用”的时候，会自动调用本方法：
	//这个方法必须带2个形参：
	//$methodName ：表示要调用的不存在的方法名；
	//$argument ：表示要调用该不存在的方法时，所使用的实参数据，是一个数组；
	function __call($methodName, $argument)
  {
		echo "__call被调用了！";
    echo $methodName;

	}
}


$a1 = new A();
$a1->f1();
