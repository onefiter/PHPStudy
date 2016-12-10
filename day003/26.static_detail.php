<?php
class A
{
  static $p1 = 1;
  static function show()
  {
    echo "<br/>self::p1=" . self::$p1 ;
    echo "<br/> static::p1=" . static::$p1;
  }
}

class B extends A
{
  static $p1 = 11;
}

A::show();
echo "<hr/>";
B::show();
