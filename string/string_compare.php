<?php

//strcmp
echo strcmp("hello everyone ", "hello everyone everyone");

echo "<br>";

//strcasecmp
$str1 = "hello everyone";
$str2 = "Hello everyone";

echo strcasecmp($str1, $str2);

//strncmp
echo "<br>";
echo strncmp("Hello everyone ", "hello everyone everyone", 6);


//strcasecmp
echo "<br>";
echo strcasecmp("Hello everyone ", "hello everyone everyone");

//strncasecmp
echo "<br>";
echo strncasecmp("Hello everyone ", "hello everyone everyone",6);

//strnatcmp
echo "<br>";
echo strnatcmp("22Hello everyone ", "2hello everyone everyone");


//strnatcasecmp
echo "<br>";
echo strnatcasecmp("22Hello everyone ", "22hello everyone everyone");

//substr_compare
echo "<br>";
echo substr_compare("22Hello everyone ", "2Hello everyone everyone", 0, 7);

//similar_text
echo "<br>";
echo similar_text("22Hello everyone ", "2Hello everyone everyone", $percentage);
echo "<br>";

echo number_format($percentage,4)."%";
