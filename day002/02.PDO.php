<?php
/**
 * Represents a connection between PHP and a database server.
 */
/**
 * PHP Manual Function Reference Database Extensions Abstraction Layers PDO*
 */

$dsn = "mysql:host=localhost;port=3306;dbname=php";
$opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8');
$pdo = new PDO($dsn,'root','root',$opt);
var_dump($pdo); 
