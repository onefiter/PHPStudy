<?php
echo "<br />aaa";
echo $v1;	//使用不存在的变量
echo C1;	//使用不存在的常量
echo "<br />bbb";

include './no_this_file.php';

echo "<hr/>";

//define self_error

$age = 666;

if ($age > 127 || $age < 0) {
  trigger_error("年龄不符合要求!",E_USER_ERROR);
}else {
    echo "您的年龄为： $age";
}
echo "<br/>";

//E_ERROR:致命错误：导致程序无法执行后续语句

$s1 = no_this_file(1,2);

echo "done!";
