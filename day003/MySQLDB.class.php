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

  private static $instance = null;
  static function GetInstance($config)
  {
    if(!(self::$instance instanceof self))
    {
      self::$instance = new self($config);
    }
    return self::$instance;
  }
  private function __clone(){}

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
    $result = $this->query($sql);
    return true;
  }
  /**
   * 执行一条语句返回一行数据，返回的是一维数组
   * @param [string] $sql SQL语句
   */
  function GetOneRow($sql)
  {
    $result = $this->query($sql);
    //如果没有出粗,则开始处理数据，已返回数据
    $rec = mysql_fetch_assoc($result);
    return $rec;
  }

  //这个方法为了执行一条返回多行数据的语句，它可以返回二维数组
	function GetRows($sql)
  {
      $result = $this->query($sql);
      $arr = array();
      while ($rec = mysql_fetch_assoc($result))
      {
        $arr[] = $rec;
      }
      //提前释放资源（销毁结果集），否则需要等到页面结束才自动销毁
      mysql_free_result( $result );
      return $arr;

	}

	/**
	 * 返回一条数据
	 * @param SQL语句
	 */
	function GetOneData($sql)
  {
    $result = $this->query($sql);
    $rec = mysql_fetch_row($result);
    $data = $rec[0];
    mysql_free_result($result);
    return $data;
	}

  /**
   * 执行sql语句，并进行错误处理或返回执行结果
   * @param  string $sql SQL语句
   * @return 返回结果
   */
  private function query($sql)
  {
    $result = mysql_query($sql,$this->link);
    if($result === false)
    {
      echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();	//获取错误代号
			echo "<br />错误信息：" . mysql_error();	//获取错误提示内部
			echo "<br />错误语句：" . $sql;
			die();
    }
    return $result;	//返回的是“执行的结果”
  }

}
