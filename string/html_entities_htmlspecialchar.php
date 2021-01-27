<?php

$link = "https://www.facebook.com/";

echo  htmlentities($link, ENT_COMPAT);
echo "<br>";
echo htmlentities($link, ENT_QUOTES);
echo "<br>";
echo htmlentities($link, ENT_NOQUOTES);
echo "<br>";



$str = "hello <b>bangladesh</b>";
echo $str."<br>";
echo htmlentities($str);
echo $str."<br>";



$string = '<a href="https://www.w3schools.com">Visit W3Schools</a>';
echo $string."<br>";

$links =  htmlentities($string, ENT_QUOTES);
echo "<br>";

echo html_entity_decode($links);



$string = '<a href="https://www.w3schools.com">Visit W3Schools</a>';
echo $string."<br>";
$s =  htmlspecialchars($string, ENT_QUOTES);
echo $s;
echo "<br>";
echo htmlspecialchars_decode($s);
