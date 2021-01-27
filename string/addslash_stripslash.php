<?php

$name = "shohidul 'islam'";
echo $name."<br>";

$newStr =  addslashes($name);
echo $newStr."<br>";

echo stripslashes ($newStr);
echo "<br>";


$str = addslashes('What does "yolo" mean?');

echo $str;
echo "<br>";
echo stripslashes($str);
echo "<br>";


$name = "shohidul islam";

echo addcslashes($name, "s");
echo "<br>";
echo stripslashes($name);


$name = "shohidul islam DFGHJ";
echo $name;
echo "<br>";

$newStr =  addcslashes($name, "a..s");

echo $newStr;



