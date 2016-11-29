<?php
include "./page2.php"; //the return var is 1

$v1 = include_once "./page2.php";
echo "<br/>"; var_dump($v1);
$v2 = include "./no_this_page.php";//有返回值，是false
echo "<br />";  var_dump($v2);

echo "<hr />";
$v3 = include_once "./page3.php";//此被载入文件中有return
echo "<br />111";

echo "<hr />";
$v4 = include_once "./page4.php";//此被载入文件中有return
echo "<br />111";
echo "<br />";  var_dump($v4);
