<?php
ini_set('display_errors',1);//不显示错误报告

ini_set('error_log','my_error.txt');//记录到该文件,需要存在着个my_error.txt

// ini_set("error_log", "syslog");//记录到系统日志中
echo "aaa<br />";

echo $v1; //使用存在的变量
echo C1; //使用不存在的常量
echo "<br />bbb<br />";

include './no_this_file.php';
echo "<br />ccc";
