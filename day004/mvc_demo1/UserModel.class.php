<?php
require './MySQLDB.class.php';
class UserModel
{
  function GetAllUser()
  {
    $config = array(
			'host' => "localhost",
			'port' => 3306,
			'user' => "root",
			'pass' => "root",
			'charset' => "utf8",
			'dbname' => "php"
		);
    $sql = "select * from user_info;";
		$db = MySQLDB::GetInstance($config);
		$data = $db->GetRows($sql);
		return $data;
  }

  function GetUserCount()
  {
    $config = array(
			'host' => "localhost",
			'port' => 3306,
			'user' => "root",
			'pass' => "root",
			'charset' => "utf8",
			'dbname' => "php"
		);
    $sql = "select count(*) as c from user_info;";
		$db = MySQLDB::GetInstance($config);
		$data = $db->GetOneData($sql);
		return $data;
  }
  function GetUserInfoById($id){
		//......
	}
	function GetUserInfoByUserName($name){
		//......
	}
}
