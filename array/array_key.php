<?php

$age = [
    "jibon"=>23,
    "bristi"=>'bristi',
    "riad"=>21,
    "anik"=>22,

];
 
$newArray =  array_keys($age);

echo "<pre>";
print_r($newArray);
echo "</pre>";



$age = [
    "jibon"=>23,
    "bristi"=>'bristi',
    "riad"=>21,
    "anik"=>22,

];
 
$newArray =  array_key_first($age);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$age = [
    "jibon"=>23,
    "bristi"=>'bristi',
    "riad"=>21,
    "anik"=>22,

];
 
$newArray =  array_key_last($age);

echo "<pre>";
print_r($newArray);
echo "</pre>";



$age = [
    "jibon"=>23,
    "bristi"=>'bristi',
    "riad"=>21,
    "anik"=>22,

];
 
$newArray =  array_key_exists("anik",$age);

if($newArray){
    echo "Value exist";
}else{
echo "Value doesn't exist";
}

echo "<pre>";
print_r($newArray);
echo "</pre>";