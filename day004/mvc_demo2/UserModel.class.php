<?php
require './BaseModel.class.php';
class UserModel extends BaseModel
{
  function GetAllUser()
  {
    $sql = "select * from user_info;";
		$data = $this->db->GetRows($sql);
		return $data;
  }

  function GetUserCount()
  {
    $sql = "select count(*) as c from user_info;";
		$data = $this->db->GetOneData($sql);
		return $data;
  }
  function GetUserInfoById($id){
		//......
	}
	function GetUserInfoByUserName($name){
		//......
	}
}
