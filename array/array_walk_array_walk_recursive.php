<?php

$array = ['jibon','Sohel','karim','Rahim'];

//$name = ['a'=>'jibon','b'>'anik','c'=>'ALamin','d'=>'parbez','e'=>'Sohel'];

array_walk($array, "myFunction", "Is a key of");

function myFunction($key, $value, $param ){
    echo "$key $param $value";
    echo "<br>";
}

echo "<br>========================<br>";

$array = ['1'=>'jibon','2'=>'Sohel','3'=>'karim'];

$name = [
    $array,
    'a'=>'jibon',
    'b'>'anik',
    'c'=>'ALamin',
    'd'=>'parbez',
    'e'=>'Sohel'
];

array_walk_recursive($name, "myFunction", "Is a key of");

