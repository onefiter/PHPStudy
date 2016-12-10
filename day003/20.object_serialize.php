<?php

include './Object_serialize.php';

$obj1 = new Object_serialize();

echo "<pre>";
var_dump($obj1);
echo "</pre>";
$s1 = serialize($obj1);
file_put_contents('./obj1.txt', $s1);
