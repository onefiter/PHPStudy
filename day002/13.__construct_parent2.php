<?php
class Member {
  public $name = "匿名";
  public $age = 18;
  public $sex;
  function __construct($name,$age,$sex)
  {
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
  }
}

//老师
class Teacher extends Member
{
  public $edu = "本科";
  public $major;

  function __construct($name,$age,$sex,$edu,$major)
  {
    parent::__construct($name,$age,$sex);
    $this->edu = $edu;
    $this->major = $major;
  }
  function ShowInfo()
  {
    echo "<br/>姓名：{$this->name}";
    echo "<br/>年龄：{$this->age}";
    echo "<br/>性别：{$this->sex}";
    echo "<br/>学历：{$this->edu}";
    echo "<br/>专业：{$this->major}";
  }
}
$t1 = new Teacher('张三',30,'男','硕士','PHP');
$t1->ShowInfo();
