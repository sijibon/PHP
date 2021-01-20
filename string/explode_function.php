<?php

$string = "Hello I am a student of southeast university.";

$new_string = explode(" ",$string);

echo "<pre>";
print_r($new_string);
echo "</pre>";


$string = "Hello I am a student of southeast university. Hello I am a student of southeast university. 
Hello I am a student of southeast university";

$new_string = explode(".", $string);

echo "<pre>";
print_r($new_string);
echo "</pre>";