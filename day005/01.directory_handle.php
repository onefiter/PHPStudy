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
