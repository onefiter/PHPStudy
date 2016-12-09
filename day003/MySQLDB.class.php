<?php

class MySQLDB
{
  private $link = null;

  private $host;//主机名：localhost
  private $port;//端口：3306
  private $user;//用户名
  private $pass;//密码
  private $charset;//字符集
  private $dbname; //数据库名

  function __construct($config)
  {

    //先将这些基本的连接信息，保存起来！
    $this->host = !empty($config['host']) ? $config['host'] : 'localhost';
    $this->port = !empty($config['port']) ? $config['port'] : '3306';
    $this->user = !empty($config['user']) ? $config['user'] : 'root';
    $this->pass = !empty($config['pass']) ? $config['pass'] : 'root';
    $this->charset = !empty($config['charset']) ? $config['charset'] : 'utf8';
    $this->dbname = !empty($config['dbname']) ? $config['dbname'] : 'php';
    //连接
    $this->link = mysql_connect("{$this->host}:{$this->port}","{$this->user}","{$this->pass}") or die('数据库连接失败');
    //设定编码
    $this->setCharset($this->charset);
    //选择要使用的数据库
    $this->selectDB($this->dbname);
  }

  //可以设定要使用的连接编码
	function setCharset( $charset )
  {
		mysql_query("set names $charset");
	}
  //可以设定要使用的数据库
	function selectDB($dbname)
  {

		mysql_query("use $dbname");
	}
  //可关闭连接
	function closeDB()
  {
		mysql_close($this->link);
	}
  //执行增删改查语句
  function exec($sql)
  {
    $result = mysql_query($sql);
    //连接失败
    if ($result === false)
    {
      echo "<p>sql语句执行失败，请参考如下信息：";
      echo "<br />错误代号：" . mysql_errno();//错误代码号
      echo "<br />错误信息：" . mysql_error();//获取错误提示
      echo "<br />错误语句：" . $sql;
      die();
    }
    return true;
  }
  /**
   * 执行一条语句返回一行数据，返回的是一维数组
   * @param [string] $sql SQL语句
   */
  function GetOneRow($sql)
  {
    $result = mysql_query($sql);
    if ( $result === false)
    {
			//语句执行失败，则需要处理这种失败情况：
			echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();	//获取错误代号
			echo "<br />错误信息：" . mysql_error();	//获取错误提示内部
			echo "<br />错误语句：" . $sql;
			die;
    }
    //如果没有出粗,则开始处理数据，已返回数据
    $rec = mysql_fetch_assoc($result);
    return $rec;
  }

  //这个方法为了执行一条返回多行数据的语句，它可以返回二维数组
	function GetRows($sql)
  {

	}

	//这个方法为了执行一条返回一个数据的语句，它可以返回一个直接值
	function GetOneData($sql)
  {

	}

}
