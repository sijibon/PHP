<?php

//strpos
//strrpos
//stripos
//strripos


$n = "the world is very nice. And  Bangladesh also Very nice plce";

echo "strrpos  ". strpos($n,"very",15);
echo "<br>";

echo "strrpos  ". strrpos($n,"very");
echo "<br>";


$n = "the world is very nice. And  Bangladesh also Very nice plce";

echo "stripos  ". stripos($n,"very",15);
echo "<br>";

echo "strripos  ". strripos($n,"very");
echo "<br>";
