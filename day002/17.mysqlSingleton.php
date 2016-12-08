<?php
/**
 * 设计一个类： mysql 数据库操作类
 * 1.该类一实例化，就可以自动连接上mysql数据库
 * 2.该类可以单独去设定要使用的连接编码,例: set names gbk;
 * 3.该类可以单独去设定要使用的数据库 use xxx
 * 4.该类可以主动关闭连接
 */

class MySQLDB
{
  public $link = null;
  function __construct($host,$port,$user,$pass,$charset,$dbname)
  {
    $this->link = @mysql_connect("$host:$port",$user,$pass) or die('连接失败');
    mysql_query("set names $charset");
    mysql_query("use $dbname");
  }
  //设定连接编码方式
  function setCharset($charset)
  {
    mysql_query("set names $charset");
  }
  //选择要连接的数据库
  function selectDB($dbname)
  {
    mysql_query("use $dbname");
  }
  //可以关闭连接
  function closeDB()
  {
    mysql_close($this->link);
  }
}
$host = "localhost";
$port = 3306;
$user = "root";
$pass = "root";
$charset = "utf8";
$dbname = "php";

$db1 = new MySQLDB($host, $port, $user, $pass, $charset, $dbname);


//测试是否连接成功
$result = mysql_query("select * from tab_int");

var_dump($result);
//测试编码样式
$db1->setCharset("gbk");

$result2 = mysql_query("select * from product");

$re = mysql_fetch_array($result2);
echo "<hr/>";
echo $re['pro_name'];

//测试连接关闭
$db1->closeDB();
$result = @mysql_query("select * from tab_int");
var_dump($result);
//测试修改代码
$db1->setCharset("gbk");
