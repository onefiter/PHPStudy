<?php

require './MySQLDB.class.php';

$config = array(
  'host' => 'localhost',
  'port' => 3306,
  'user' => 'root',
  'pass' => 'root',
  'charset' => 'utf8',
  'dbname' => 'php',
);

$db1 = new MySQLDB($config);

$v1 = rand(0,100);
$sql = "insert into tab_int(f1,f2,f3) values($v1,12,13)";
$db1->exec($sql);
echo "执行插入语句成功！<br />";

$sql = "select * from user_info where user_id = 6";
$user = $db1->GetOneRow($sql);
echo "<br />用户ID为：" . $user['user_id'];
echo "<br />用户名：" . $user['user_name'];
echo "<br />真实姓名：" . $user['real_name'];
echo "<br />生日：" . $user['birthday'];
