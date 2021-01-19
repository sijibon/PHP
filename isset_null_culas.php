<?php

$default_let = 12.9;
$detault_lon = 32.2;


$user_let =45;

$let = isset($user_let) ? $user_let : $default_let;

echo $let;

echo "<br>";

$user_let = null;
//tryb to diffrent way

if(isset($user_let))
{
    $result = $user_let;
    echo $result;
}else{
    echo $default_let;
}

echo "<br>";


//null coalecse operator

$let  = $user_let ?? $default_let;
echo $let;