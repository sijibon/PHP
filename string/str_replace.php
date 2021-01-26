<?php

//str_replace
//stri_replace

$str = "the world is very nice. And  Bangladesh also Very nice place";

echo str_replace("And","India ,", $str);


//string replace using array

$str = "the world is very nice. And  Bangladesh also Very nice place";

$find = ['world','very'];
$replace = ['Earth','really'];

$newString =  str_replace($find, $replace, $str);
echo "<br>";
echo $newString;



$str = "the World is Very nice. And  Bangladesh also Very nice place";
$find = ['world','very'];
$replace = ['Earth','really'];

$newString =  str_ireplace($find, $replace, $str);
echo "<br>";
echo $newString;


//make a function convert to english number to bangla number
function enTobn($str){
    $find = ['1','2','3','4','5'];
    $replace = ['১','২','৩','৪','৫'];

    $newstr = str_replace($find, $replace, $str);

    return $newstr;
}

 echo "<br>";
 echo enTobn(123);

echo "<br>";

 //substr_replace function
 $str = "the world is very nice. And  Bangladesh also Very nice place";

 echo substr_replace($str, "Earth", 4, -6);
 echo "<br>";


 //strtr function
 $str = "the world is very nice. And  Bangladesh also Very nice place";

 echo strtr($str, "And", "are");

echo "<br>";

  //strtr function
  $str = "the world is very nice. And  Bangladesh also very nice place";
  $array = ['world'=>'Earth','very'=>'really'];
  echo strtr($str, $array);