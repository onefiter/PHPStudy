<?php
/**
 * 读取当前目录的内容
 * @param  string $path 路径
 */
function readDirs($path)
{
  $handle = opendir($path);
  while (false !== ($filename = readdir($path)))
  {
    if ($filename == '.' || $filename == '..')
    continue;
    echo $filename, "<br/>";
  }
  closedir($handle);
}
