<?php
/**
 * 1.进制问题
 */

//1.1 十进制

$num = 123;
echo "十进制:";
print_r($num);
echo "<br>";
//1.2 八进制

$num1 = 0123;
echo "八进制:";
print_r($num1);
echo "<br>";
//1.3 十六进制

$num3 = 0x123;
echo "十六进制:";
print_r($num3);
echo "<br>";
//1.4 二进制

$num4 = 0b1010;
echo "二进制:";
print_r($num4);
echo "<br>";


/**
 *2.进制转换
 */

//2.1 十进制转换为其他3种进制

$n1 = 123;
$z1 = decbin($n1); //十进制转换为2进制
$z2 = decoct($n1); //十进制转换为8进制
$z3 = dechex($n1); //十进制转换为16进制

echo "<br/>\$n1的2进制是:$z1";
echo "<br/>\$n1的8进制是:$z2";
echo "<br/>\$n1的16进制是:$z3";
echo "<br>";

//2.2其他进制转换为10进制
$c1 = "1010110";
$c2 = "123"; //此时是8进制，是字符串，不是整数数字
$c3 = "123abc";

$m1 = bindec($c1);//二进制转换为十进制
$m2 = octdec($c2);//八进制转换为十进制
$m3 = hexdec($c3);//16进制转换为二进制

echo "<br/>\$c1的10进制是:$m1";
echo "<br/>\$c2的10进制是:$m2";
echo "<br/>\$c3的16进制是:$m3";


/**
 * 3.类型相关的函数
 */

//3.1 var_dump():用于变量输出的“完整信息”
//3.2 get_Type():获取该变量的类型名字
//3.3 set_Type():设置该变量的类型
//3.4 isset(),empty(),unset()
//3.5 is_int(),is_float(),is_string(),is_bool(),is_array(),is_object(),is_null(),is_numeric(),is_scala()
