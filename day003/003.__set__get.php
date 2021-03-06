<?php
class A
{
  //定义一个属性，这个属性意图存储“若干个”不存在的属性数据；
  protected $prop_list = array();
  //这个方法会在A的对象使用一个不存在的属性进行赋值的时候自动调用
  function __set($p,$v)
  {
    $this->prop_list[$p] = $v;
  }
  function __get($p)
  {
    if (isset($this->pro_list[$p]))
    {
       return $this->prop_list[$p];
    }
    else
    {
			return "该属性不存在！";
		}
  }
  function  __isset($prop)
  {
		$v1 = isset($this->prop_list[$prop]);
		return $v1;
	}
  function __unset($prop)
  {
		//这里其实是去销毁其中的属性列表那个数组中的某个单元
		unset($this->prop_list[$prop]);
	}
}
$a1 = new A();
$a1->p1 = 1;//不存在的属性名赋值，此时会调用__set(),并传过去"p1"和1
$a1->h2 = 2;
$a1->abc = '9999';
echo "<br />然后可以输出这些“不存在的属性”的值：";
echo "<br />a1->p1：" . $a1->p1;//不存在的属性名取值，此时会传过去'p1'
echo "<br />a1->h2：" . $a1->h2;
echo "<br />a1->abc：" . $a1->abc;
echo "<br />a1->abcddd：" . $a1->abcddd;	//这个显然不存在！

//下面演示isset判断一个不存在的属性
$v1 = isset( $a1-> p1);		//存在
$v2 = isset( $a1-> ppp1);	//不存在
echo "<hr />";
var_dump($v1);
echo "<br />";
var_dump($v2);

//下面演示销毁一个不存在的属性
echo "<hr />";
unset($a1->h2);	//销毁完了
unset($a1->h222);	//销毁完了
echo "<br />a1->h2：" . $a1->h2;//此时再去调用它，结果为：
