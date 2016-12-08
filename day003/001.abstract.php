<?php
/**
 * abstract 抽象方法
 */
abstract class Ghost{
  protected $blood = 100;
  abstract function Attach(); //抽象方法:继承它的子类中可以具体实现
}

class Snake extends Ghost
{
  function Attach()
  {
    echo "<br />俏销靠近主人公，然后迅猛咬一口";
    $this->blood--;
  }
}

//虎怪
class  Tiger extends Ghost
{
	function Attach(){//具体去实现该父类继承下来的抽象方法
		echo "<br />猛扑猛咬主人公";
		$this->blood--;	//自身掉血1点
	}
}

//妖怪：这个类，作为抽象类，可以不去“实现”父类的抽象方法；
//当然也可以去实现。这里，是没有实现
abstract class  Yao extends Guai{
	//abstract  function Attach();//抽象方法
	//这里，这个抽象方法仍然是保留父类抽象方法的身份
}
//bajie(八戒）
class  bajie extends Yao{
	function Attach(){//具体去实现该父类继承下来的抽象方法
		echo "<br />抡起钉耙打下去";
		$this->blood -= 2;	//自身掉血1点
	}
}
