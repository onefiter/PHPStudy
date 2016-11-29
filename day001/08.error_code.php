<?php
//str_pad:将字符串增加为额外的长度
echo "<br />" . str_pad("123", 10, "0",STR_PAD_LEFT); //字符串长度不为10，左侧添加0
echo "<br />" . str_pad("123", 10, "-",STR_PAD_LEFT);
echo "<br />" . str_pad("1234567890122", 10, "0",STR_PAD_LEFT);
/**
 * 转换为二进制
 * @param  [type] $e [description]
 * @return [type]    [description]
 */
function getBinStr($e)
{
  $s = decbin($e);
  $s1 = str_pad($s,16,"0",STR_PAD_LEFT);
  return $s1;
}

echo "<pre>";
echo "<br />E_ERROR=" . E_ERROR . "\t\t其对应二进制值为" . getBinStr(E_ERROR);
echo "<br />E_WARNING=" . E_WARNING . "\t\t其对应二进制值为" . getBinStr(E_WARNING);
echo "<br />E_NOTICE=" . E_NOTICE . "\t\t其对应二进制值为" . getBinStr(E_NOTICE);
echo "<br />E_USER_NOTICE=" . E_USER_NOTICE . "\t\t其对应二进制值为" . getBinStr(E_USER_NOTICE);
echo "<br />E_ALL=" . E_ALL . "\t\t其对应二进制值为" . getBinStr(E_ALL);
