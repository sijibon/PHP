<?php

//normal function 

function Test($num){
    $num += 3;

}


function second(&$num){
    $num += 3;

}

$value = 10;
Test($value);
echo $value;

echo "<br>";


$value = 10;
second($value);
echo $value;