<?php
/**
 * file_get_contents
 * 从文件中读取数据
 */

$str1 = file_get_contents('./file1.txt');
$str2 = file_get_contents('./file2.txt');
$str3 = file_get_contents('./file3.txt');
$str4 = file_get_contents('./file4.txt');

$v1 = unserialize($str1);
$v2 = unserialize($str2);
$v3 = unserialize($str3);
$v4 = unserialize($str4);

var_dump($v1); echo "<br />";
var_dump($v2); echo "<br />";
var_dump($v3); echo "<br />";
var_dump($v4); echo "<br />";
