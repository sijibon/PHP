<?php

$name = "shohidul 'islam'";
echo $name."<br>";

$newStr =  addslashes($name);
echo $newStr."<br>";

echo stripslashes ($newStr);
echo "<br>";


$str = addslashes('What does "yolo" mean?');

echo $str;