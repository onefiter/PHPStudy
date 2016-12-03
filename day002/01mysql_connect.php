<?php
/**
 * PHP offers three different APIs to connect to MySQL. --Reference from PHP Manual
 * (Function Reference -> Database Extensions -> Vendor Specific Database Extensions -> MySQL-> Overview of the MySQL PHP drives)
 */
//mysql
$link = mysql_connect("localhost","root","root");

mysql_query("set names utf8");

mysql_query("use php");
//$result  =  mysql_query(“select /  delete  /update  / insert  /  desc  /  show  tables  /drop  .......”);
$result = mysql_query("select * from tab_int2");

if ($result === false) {
	echo  "执行失败，请参考："  .  mysql_error();
}
else {
	echo "执行成功".$result;
}
echo "<hr>";
// mysqli
$mysqli = new mysqli("localhost", "root", "root", "php");
$result = $mysqli->query("SELECT * FROM tab_int2");

var_dump($result);
echo "<hr>";
// PDO
$pdo = new PDO('mysql:host=localhost;dbname=php', 'root', 'root');
$statement = $pdo->query("SELECT * FROM tab_int2");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['f1']);
