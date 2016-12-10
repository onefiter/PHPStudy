<?php
include './Object_serialize.php';

$s1 = file_get_contents('./obj1.txt');
$o2 = unserialize($s1);
echo "<pre>";
var_dump($o2);
echo "</pre>";

$o2->f1();

$p1 = $o2->p1;
echo "<br/>";
var_dump($p1);
