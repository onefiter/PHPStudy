<?php
class Student{
  public $name = '';//实例属性
  static $count = 0; //静态属性
}

$s1 = new Student();
$s1->name = "王二";
Student::$count++;
$s2 = new Student();
$s2->name = "呵呵哒";

Student::$count++;

echo "<br />当前的学生对象总数为：" . Student::$count;
