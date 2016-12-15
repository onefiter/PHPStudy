<?php
/**
 * Directory Handle
 */
$path = "./path/where/nice";
/**
 * mkdir
 * bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )
 * @param $mode  读写
 * @param $recursive 是否递归创建
 * @param $context stream
 */
if (!is_dir($path))
{
  $re = mkdir($path,0755,true);
  var_dump($re);

}

if(is_dir($path))
{
  $re = rmdir($path);
  echo "rmdir:";
  var_dump($re);
}
