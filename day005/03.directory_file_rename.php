<?php
$oldpath = './newpath/there';
$new_path = './newpath/where';

$result = rename($oldpath,$new_path);

var_dump($result);
