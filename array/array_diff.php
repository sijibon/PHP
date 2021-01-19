<?php


//array_diff function
$first_array = ['a'=>'Jibon','b'=>'ty','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','b'=>'Anik','g'=>'islam','d'=>'Jisan'];
$third_array = ['a'=>'Jibon','h'=>'ghj','g'=>'hello','d'=>'Jisan'];

$new_array = array_diff($first_array, $second_array, $third_array);

echo "<pre>";
print_r($new_array);
echo "</pre>";


//array_diff_key function
$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','c'=>'Anik','g'=>'islam','d'=>'Jisan'];


$new_array = array_diff_key($first_array, $second_array);

echo "<pre>";
print_r($new_array);
echo "</pre>";


//array_diff_asssoc function
$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','c'=>'Anik','g'=>'islam','d'=>'Mahadi'];


$new_array = array_diff_assoc($first_array, $second_array);

echo "<pre>";
print_r($new_array);
echo "</pre>";

