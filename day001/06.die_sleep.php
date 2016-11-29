<?php
echo "<br/>A";

echo "<br/>当前时间:" . Date('Y-m-d H:i:s');
sleep(3);//sleep 3 seconds
echo "<br/>B";
echo "<br/>当前时间:" . Date('Y-m-d H:i:s');
die("<br />终止");

echo "<br/ >X1";
echo "<br/ >X2";
