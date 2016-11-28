<?php
//1.用于声明或设置网页中的字符集的
header("content-type:text/html;charset=utf-8");

//2.连接数据库
//2.1数据库的配置信息
$db_host = "localhost";
$db_user = "root";
$db_pwd = "root";
$db_name = "new_ecshop";

//2.2连接数据MySQL服务器
$link = mysql_connect($db_host,$db_user,$db_pwd);

if (!$link) {
  echo "<li>PHP连接MySQL服务器出错啦</li>";
  exit();
}

//2.3 选择当前数据库

if(!mysql_select_db($db_name))
{
  echo "<h1>选择数据库<font color='red'>{$db_name}</font>失败!</h1>";
  exit();
}
else {
  echo "<h1>选择数据库<font color='green'>{$db_name}</font>成功!</h1>";
}
//2.4设置MySQL 返回数据的字符集
mysql_query("set names utf8");
