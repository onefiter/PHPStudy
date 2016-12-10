<?php
header('content-type:text/html;charset=utf8');
require './UserModel.class.php';
require './ModelFactory.class.php';

if(!empty($_GET['act']) && $_GET['act'] == 'del')
{
  $id = $_GET['id'];
  $obj = ModelFactory::M('UserModel');
  $result = $obj->delUserById($id);
  echo "<font color=red>删除成功！</font>";
}
$obj_user = new UserModel();
$obj_user = ModelFactory::M('UserModel');
$data1 = $obj_user->GetAllUser();
$data2 = $obj_user->GetUserCount();

include './showAllUser_view.html';
