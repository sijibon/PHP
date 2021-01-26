<?php

$str = "jibon shohidul";

$newString =  str_split($str, 5);  
echo "<pre>";
print_r($newString);
echo "</pre>";



$newStr = "jibon shohidul";

$newString =  chunk_split($newStr,6, "....");
 echo $newString;

