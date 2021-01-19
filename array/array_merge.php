<?php


//index array
$name = ['jibon','riad','jisan'];
$colors = ['red','green','blue'];
$number = ['one','two','three'];

$new_array = array_merge($name, $colors,$number);

echo "<pre>";
print_r($new_array);
echo "</pre>";

//associative array and index array merge
$name = ['a'=>'jibon','b'=>'riad','c'=>'jisan'];
$colors = ['red','green','blue'];

$new_merge = array_merge($name, $colors);

echo "<pre>";
print_r($new_merge);
echo "</pre>";


//only associative array merge 
$name = ['a'=>'jibon','b'=>'riad','c'=>'jisan'];
$colors = ['b'=>['colors'=>'yellow','aqua','pink'],'red','d'=>'green','f'=>'blue',32,200];

$new_merge = array_merge_recursive($name, $colors);

echo "<pre>";
print_r($new_merge);
echo "</pre>";


//index array using array_combine function 
$name = ['jibon','riad','jisan'];
$number = ['one','two','three'];

$new_array = array_combine($number , $name);

echo "<pre>";
print_r($new_array);
echo "</pre>";