<?php
class A
{
    static $p1 = 1;
    static protected $p2 = 2;
}

class B extends A{
  static function Show1(){
    echo "<p>这里是子类B中的方法";
    echo "<br />这里要显示父类的属性p1：" . parent::$p1;
		echo "<br />这里要显示A类的属性p2：" . A::$p2;
  }
}

B::Show1(); //静态方法的调用，直接使用类名来调用

//下面演示使用parent代表“对象”的情况（调用实例方法）：
class C{
	public $p1 = 1;
	function showInfo(){
		echo "<br />C中的属性p1：" . $this->p1;
		echo "<pre>";
			var_dump($this);//看看$this的真面貌
		echo "</pre>";
	}
}
class D extends C{
	function Show2(){
		echo "<p>调用父类中的实例方法：" ;
		parent::showInfo();//调用父类的实例方法
				//这里可用的前提是
			//这个方法(Show2)的调用者是一个对象
	}
}
$d1 = new D();
$d1->Show2();
