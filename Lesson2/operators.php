<?php

$a = "Hello";
$b= "world!";

//echo $a." ".$b . PHP_EOL;

$a = $a." world";

$a .= " worlds";

$v = 5;

$v -= 7;

echo $a;
echo $v; // v = -2


$v++; //-1
$v++; // 0
$v++; // 1
$v--; // 0

echo PHP_EOL;
echo $v;