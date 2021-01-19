<?php

$array = [
    ['id'=>200,'fname'=>'shohidul','lname'=>'jibon'],
    ['id'=>201,'fname'=>'parbez','lname'=>'rahman'],
    ['id'=>203,'fname'=>'alamin','lname'=>'sumon'],
];

$new_array = array_column($array, 'lname','id');

echo "<pre>";
print_r($new_array);
echo "<pre>";



//array chunk

 $array = [50,90,70,63,];


// $array = [
//     ['id'=>200,'fname'=>'shohidul','lname'=>'jibon'],
//     ['id'=>201,'fname'=>'parbez','lname'=>'rahman'],
//     ['id'=>203,'fname'=>'alamin','lname'=>'sumon'],
// ];


$newaArray = array_chunk($array, 3);

echo "<pre>";
print_r($newaArray);
echo "<pre>";


$sum_array = array_sum($newaArray);



echo "<pre>";
print_r($sum_array);
echo "<pre>";
