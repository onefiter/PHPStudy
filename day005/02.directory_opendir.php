<?php
$dir = '/Users/onefiter/Documents/workspace/excrise/PHPStudy/day005';
if (is_dir($dir))
{
  $re =  opendir($dir);
  var_dump($re);
  echo "<br/>";
/**
 * readdir()
 * 每次读取一个文件
 * 以下结果依次是
 * .
 * ..
 * .DS_Store
 * 01.directory_handle.php
 * 02.directory_opendir.php
 */
/*
  $filename = readdir($re);
  echo $filename , "<br/>";
  $filename = readdir($re);
  echo $filename , "<br/>";
  $filename = readdir($re);
  echo $filename , "<br/>";
  $filename = readdir($re);
  echo $filename , "<br/>";
  $filename = readdir($re);
  echo $filename , "<br/>";
*/
//依次取出当前目录下的文件以及文件夹
/*
  while ($filename = readdir($re))
  {
    if ($filename == '.' || $filename == '..')
    continue;
    echo $filename, '<br/>';
  }
*/

//取出文件名，一般用这种情况，防止出现以数字0命名的文件
  while (false !== ($filename = readdir($re)))
  {
      if ($filename == '.' || $filename == '..') continue;
      echo $filename, '<br/>';
  }
  closedir($re);

}
