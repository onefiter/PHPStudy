<?php
//1.设置处理错误的函数名

set_error_handler('my_error_handler');

//2.定义my_error_handler
/**
 * 错误处理函数
 * @param   $errCode 错误代码号
 * @param   $errMsg  错误信息
 * @param   $errFile 错误文件名
 * @param   $errLine 错误行号
 * @return  错误代码号+错误信息+错误文件名+错误行号
 */
function my_error_handler($errCode,$errMsg,$errFile,$errLine)
{
    $str = " ";
    $str .= "<p><font color='red'>发生错误：</font>";
    $str .= "<br/>错误号为：".$errCode;
    $str .= "<br/>错内容为：".$errMsg;
    $str .= "<br/>错误文件为：".$errFile;
    $str .= "<br/>错误行号为：".$errLine;
    $str .= "<br/>发生时间为：".date('Y-m-d H:i:s');
    $str .= "</p>";

    echo $str;
}

echo "<br />aaa";
echo $v1;	//使用不存在的变量
echo C1;	//使用不存在的常量
echo "<br />bbb";
include './no_this_file.php';
echo "<br />ccc";
