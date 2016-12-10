<?php
/**
 * __invoke():将对象当做函数来使用，不推荐
 */

class A
{
  function __invoke()
  {
    echo "<br/>对象当做函数使用__invoke()";
  }
}

$o1 = new A();

$o1();
