<?php

//$fruits = ['apple','Orange','Mango','Lichi','guava','lemon'];
$fruits = ['1'=>'apple','2'=>'Orange','3'=>'Mango','4'=>'Lichi','5'=>'guava', '6'=>'lemon'];

$new_array = array_slice($fruits, 2, 2, true);

echo "<pre>";
print_r($new_array);
echo "</pre>"; 


$name = ['alamin','jibon','mehedi','parbez'];

$slice_array = array_slice($name, 2, 1);

echo "<pre>";
print_r($slice_array);
echo "</pre>";