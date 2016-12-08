<?php
const PP = 1;
define("PP1",2);
class C1{
  const PI = 3.14;
  const G = 9.8;
}
//常量的访问
$v1 = C1::PI *3 *3;
echo "<br />v1 = $v1";

echo "<br />C1::G = " . C1::G;
