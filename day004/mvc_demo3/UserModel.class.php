<?php
require './BaseModel.class.php';
class UserModel extends BaseModel
{
  function GetAllUser()
  {
    $sql = "select * from user_info;";
		$data = $this->_dao->GetRows($sql);
		return $data;
  }

  function GetUserCount()
  {
    $sql = "select count(*) as c from user_info;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
  }
  function GetUserInfoById($id){
		//......
	}
	function GetUserInfoByUserName($name){
		//......
	}
  function delUserById($id){
		$sql = "delete from user_info where user_id = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
}
