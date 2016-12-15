<?php
/**
 * Directory Handle
 */
$path = "./path/where/nice";

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
