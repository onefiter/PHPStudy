<?php
//1.定义的全局变量：总共有6个 _GET、_POST 、_COOKIE、 _FILES、 _SERVER、 _GLOBALS
dump($GLOBALS);

echo "<pre>";


//2. $_SERVER中的有三十四个
dump($_SERVER);
echo "122";
echo "<hr>";

//3. $_REQUEST 是$_GET 与 $_POST 的合体

/**
 * 打印函数
 * @param  [any] $args 传递参数
 * @return [type]       none
 */
function dump($args)
{
  echo "<pre>";
  var_dump($args);


}
