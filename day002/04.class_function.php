<?php
class MyDreamGirl
{
  var $name = "小花";
  var $age = 24;
  var $edu = "本科";
  function washcloth()
  {
    echo "<br />{$this->age}岁的{$this->edu}学历的{$this->name}在勤快地洗衣服";
  }
  function cook()
  {
    echo "<br />{$this->age}岁的{$this->edu}学历的{$this->name}在快乐地做饭";
  }
  function  GetPingfanghe($x, $y){
		$result = $x*$x + $y*$y;
		return $result;
	}
}
$g = new MyDreamGirl();
$g->washcloth();
$g->cook();

$g2 = new MyDreamGirl();
$g2->name = "小红";
$g2->age = 20;
$g2->edu = "大专";
$g2->washcloth();
$g2->cook();

$v1 = $g->GetPingfanghe(3,4);

echo $v1;
