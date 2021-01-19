<?php

//array_intersect
//array_intersect_key
//array_intersect_assoc



$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_intersect($first_array, $second_array);//find same value of two arrays

echo "<pre>";
print_r($new_array);

echo "</pre>";

//array_

$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_intersect_key($first_array, $second_array);//find same key of two arrays

echo "<pre>";
print_r($new_array);

echo "</pre>";


$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_intersect_assoc($first_array, $second_array);//find the same values and keys of two arrays

echo "<pre>";
print_r($new_array);

echo "</pre>";


//array_intersect_uassoc
//array_uintersect_assoc
//make a user define function and find out values 
function compare($a, $b){
    if($a === $b){
        return 0;
    }else{
        return ($a > $b)? 1 : -1;
    }
}


function compareValue($a, $b){
    if($a === $b){
        return 0;
    }else{
        return ($a > $b)? 1 : -1;
    }
}



$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi','h'=>'Madi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_intersect_uassoc($first_array, $second_array, "compare");

echo "<pre>"; 
print_r($new_array);

echo "</pre>";



 //array_intersect_ukey

$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi','h'=>'Madi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_intersect_ukey($first_array, $second_array, "compare");

echo "<pre>"; 
print_r($new_array);

echo "</pre>";


//arry_uintersect

$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi','h'=>'Madi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_uintersect($first_array, $second_array, "compare");

echo "<pre>"; 
print_r($new_array);

echo "</pre>";



//arry_uintersect_uassoc

$first_array = ['a'=>'Jibon','b'=>'Anik','c'=>'Al-amin','d'=>'Mahadi','h'=>'Madi'];
$second_array = ['a'=>'Jibon','f'=>'Riad','g'=>'Al-amin','d'=>'Jisan'];


$new_array =  array_uintersect_uassoc($first_array, $second_array, "compare", "compareValue");

echo "<pre>"; 
print_r($new_array);

echo "</pre>";



// $a = 'jibon';
// $b = 'jibon';

// $p = strcasecmp($a,$b);

// echo $p;


