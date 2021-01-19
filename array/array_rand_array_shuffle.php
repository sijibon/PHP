<?php


// $name = ['jibon','anik','ALamin','parbez','Sohel'];

$name = ['a'=>'jibon','b'>'anik','c'=>'ALamin','d'=>'parbez','e'=>'Sohel'];

$new_array = array_rand($name, 2);

echo "<pre>";
print_r($new_array);
echo "</pre>";

 echo $name[$new_array[0]]."  ";
 echo $name[$new_array[1]];



 //$name = ['jibon','anik','ALamin','parbez','Sohel'];
 $name = ['a'=>'jibon','b'=>'anik','c'=>'ALamin','d'=>'parbez','e'=>'Sohel'];
 
 shuffle($name);

echo "<pre>";
print_r($name);
echo "</pre>";
