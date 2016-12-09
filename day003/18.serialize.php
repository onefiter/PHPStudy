<?php
$v1 = 1;
$v2 = 'abc';
$v3 = false;
$v4 = array(41,42,42);

$str1 = serialize($v1);//转为字符串
$str2 = serialize($v2);
$str3 = serialize($v3);
$str4 = serialize($v4);

//将$str1存储到文件file1.txt中
/**
 * file_put_contents
 * 当文件不存在的时候,会自动创建相关文件，必须保证有文件写入的权限
 */
file_put_contents('./file1.exe',$str1);
file_put_contents('./file2.txt',$str2);
file_put_contents('./file3.txt',$str3);
file_put_contents('./file4.txt',$str4);
