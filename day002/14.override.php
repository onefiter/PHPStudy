<?php
//override:重写
class Animal
{
  public $p1 = "能吃东西";
  function Move()
  {
    echo "<br/>能移动";
  }
}

class Fish extends Animal
{
  public $skin = "鱼鳞"; //skin
  public $p1 = "张开圆形的嘴巴吸入大量含食物的水";//覆盖了父类的同名属性
  function Move()
  {
    echo "<br/>摆动尾巴前进";
  }
}

//鸟类
class Bird extends Animal{
	public $skin = "布满羽毛";	//皮肤
	public $p1 = "张开尖尖的嘴巴啄食物";//覆盖了父类的同名属性
	function Move(){	//覆盖了父类的同名方法！
		echo "<br />扇动翅膀飞翔前进";
	}
}
