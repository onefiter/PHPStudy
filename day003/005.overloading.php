<?php
/**
 *  设计一个类
 *  调用方法f1：
 *  传入1个参数，就返回其本身，
 *  传入2个参数，就求其平方和，
 *  传入3个参数，就求其立方和
 *  其他参数形式，报错！
 */

class A
{
   function __call($func_name, $argus)
   {
     if ($func_name === 'f1')
      {
       $len = count($argus);
       if ($len<1 || $len > 3)
       {
          trigger_error('使用非法的方法!',E_USER_ERROR);
       }
       elseif ($len == 1)
       {
        return $argus[0];
       }
       elseif ($len == 2)
       {
        return $argus[0]*$argus[0] + $argus[1]*$argus[1];
       }
       else if($len == 3){
          $v1 = $argus[0];
          $v2 = $argus[1];
          $v3 = $argus[2];

          return pow($v1,3) + pow($v2,3) + pow($v3,3);
       }
     }
   }
}


$a1 = new A();
$v1 = $a1->f1(1);
$v2 = $a1->f1(2,3);
$v3 = $a1->f1(4,5,6);
echo "v1 = $v1, v2 = $v2, v3 = $v3";
