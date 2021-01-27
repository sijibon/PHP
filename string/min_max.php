<?php

//min function
//max function

$n = min(2,5,6,9);
echo $n;
echo "<br>";
$n = max(2,5,6,9);
echo $n;

echo "<br>";
$array = max( array(2,70,5), array(1,6,7));

echo "<pre>";
print_r($array);
echo "</pre>";


echo "<br>";
$array = min( array(2,70,5), array(1,6,7));

echo "<pre>";
print_r($array);
echo "</pre>";