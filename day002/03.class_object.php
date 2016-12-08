<?php
class Person{
  var $name;
  var $age;
  var $edu;
}
$p = new Person();
$p->name = "呵呵哒";
$p->age = 26;
$p->edu = "本科";

echo "<pre>";
var_dump($p);
echo "</pre>";
