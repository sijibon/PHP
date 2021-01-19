<?php


//using array flip
$array = [
    "jibon"=>22,
    "parbez"=>21,
    "alamin"=>23,
];

$new_array = array_flip($array);

echo "<pre>";
print_r($new_array);
echo "<pre>";

//array_change_key_case

$array = [
    "Jibon"=>22,
    "Parbez"=>21,
    "Alamin"=>23,
];

$new_array = array_change_key_case($array, CASE_UPPER);

echo "<pre>";
print_r($new_array);
echo "<pre>";


