<?php



$name = "jibon shohidul";
$age = 23;
$gender = "Male";


// $array = ['jibon','joy','Imam','Al-amin'];

// $new_array = compact("array");

$new_array = compact("name","age","gender");


echo "<pre>";
print_r($new_array);
echo "</pre>";