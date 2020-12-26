<?php

echo "hello world";

$rollOfMine = 382298;

echo "<br>";

$name = 'rollOfMine';

echo $$name;

echo "<br>";

$number =  3456;

$string = "number";

echo $$string;


$nm = "Bangladesh";
$question = "How are you?";

echo "{$nm},  {$question}";

echo "<br>";

echo "try to print constant....";
echo "<br>";

define('PI',3.14169);

define('PI',2346);
echo "hello ".PI;

echo "This is Pi value here = ".PI;






