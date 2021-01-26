<?php
//strstr
//strchr
//strrchr
//strpbrk



$str =  "the world is very nice. And  Bangladesh also Very nice plce";
 echo strstr($str, "very", true);
 echo "<br>";

 $str = "the world is very nice. And  Bangladesh also Very nice plce";
 echo strchr($str, "Bangladesh");
 echo "<br>";
 

$str = "the world is very nice. And  Bangladesh also very nice plce";
echo strrchr($str, "very");
echo "<br>";

$str = "the world is very nice. And  Bangladesh also very nice plce";
echo strpbrk($str, "he");
echo "<br>";
