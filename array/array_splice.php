<?php

$name = ['jibon','alamin','parbez','Faruk','anik'];
$lastName = ['shohidul','sumon'];

// array_splice($name, 2, count($name) , $lastName); 

array_splice($name, 0,0, $lastName);

echo "<pre>";
print_r($name);
echo "</pre>";