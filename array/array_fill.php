<?php

$array = ['jibon','hello','hi','welcome'];

$new_array = array_fill_keys($array, "valueLess");


echo "<pre>";
print_r($new_array);
echo "</pre>";




$new_array = array_fill(4,5, "valueLess");


echo "<pre>";
print_r($new_array);
echo "</pre>";