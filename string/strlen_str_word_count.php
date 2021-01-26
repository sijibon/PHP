<?php

$name = "jibon shohidul jibon shohidul";


echo strlen($name);

echo "<br>";
echo str_word_count($name);



$name = "jibon shohidul jibon shohidul";

$array = str_word_count($name, 1);

echo "<pre>";
print_r($array);
echo "<pre>";


$name = "jibon shohidul jibon shohidul";

$array = str_word_count($name, 2);

echo "<pre>";
print_r($array);
echo "<pre>";



$n = "the world is very nice. And  Bangladesh also nice plce";

$array = substr_count($n, "And",6);

echo "<pre>";
print_r($array);
echo "<pre>";