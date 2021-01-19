<?php


//array_values it return a new array of arrays values
$colors = ['a'=>'red,','b'=>'Green','c'=>'Blue','e'=>'Pink'];

$new_array = array_values($colors);


echo "<pre>";
print_r($new_array);
echo "</pre>";



//array_values it return a new array of arrays values
$colors = ['a'=>'red','b'=>'Green','c'=>'Blue','d'=>'red'];

$new_array = array_unique($colors);


echo "<pre>";
print_r($new_array);
echo "</pre>";


