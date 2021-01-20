<?php
//print number using range function
$new_array = range(1,20);


echo "<pre>";
print_r($new_array);
echo "</pre>";


$new_array = range("a","j",3);


echo "<pre>";
print_r($new_array);
echo "</pre>";



foreach (range(1, 10,3) as $alpha){
    echo "$alpha"."<br>";
}



foreach (range("a", "m") as $alpha){
    echo "$alpha"."<br>";
}