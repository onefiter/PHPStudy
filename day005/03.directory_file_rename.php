<?php
/**
 * Refer to PHP Manual -> Function Reference -> File System Related Extensions -> Filesystem -> Filesystem Functions
 * @var string
 */
$oldpath = './newpath/there';
$new_path = './newpath/where';

$result = rename($oldpath,$new_path);

var_dump($result);
