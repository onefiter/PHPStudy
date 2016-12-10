<?php
require './UserModel.class.php';

$obj_user = new UserModel();
$data1 = $obj_user->GetAllUser();
$data2 = $obj_user->GetUserCount();

include './showAllUser_view.html';
