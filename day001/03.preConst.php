<?php
/**
 * 预定义常量
 * 可参考PHP手册 ->附录->保留字列表->预定义常量
 */

 /**
  * 打印函数
  * @param  [any] $args 传递参数
  * @return [type]       none
  */
 function dump($args)
 {
   echo "<pre>";
   var_dump($args);
   echo "<hr/>";
 }
//1.预定义常量
 //1.1 M_PI圆周率
 dump(M_PI);
//1.2 php运行所在的操作系统
dump(PHP_OS);

//1.3 php的版本号
dump(PHP_VERSION);
//1.4 php中的最大值
dump(PHP_INT_MAX);


//2.魔术常量

/**
 * 只是常量的形式，但并不是真正”不变”的值
 */
dump(__LINE__); //行数
dump(__FILE__); //网页文件的完整物理路径
dump(__DIR__); //当前网页文件所在的文件夹
dump(__LINE__);
