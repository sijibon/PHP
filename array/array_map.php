<?php
 
 function square($n, $m){
    $value = $n + $m ;

    return $value;
 }

 $array = [1 ,2, 3, 4, 5, 6];
 $array2 = [1 ,2, 3, 4, 5, 6];

 $new_array = array_map( "square", $array, $array2);


 
echo "<pre>";
print_r($new_array);
echo "</pre>";


//  echo square(4,5);


function square2($n){
    $value = $n;

    return $value;
 }

 $array = ['1'=>'jibon','2'=>'Sohel','3'=>'karim'];

 $new_array = array_map( "square2", $array);


 
echo "<pre>";
print_r($new_array);
echo "</pre>";

