<?php

// $colors = ['Shohidul','23','Male','Single'];

// echo  $colors[0]." ";
// echo  $colors[1]." ";
// echo  $colors[2]." ";
// echo  $colors[3]." ";

//diffrent type array

$colors ['0'] = "Red";
$colors ['1'] ="Blue";
$colors ['2'] = "Green";
$colors ['3'] = "Yelllow";

echo "<ul>";
for($i = 0; $i<4; $i++){
 echo "<li> $colors[$i] </li>";
}
echo "<ul>";
// echo "<pre>";
// print_r($colors);
// echo "</pre>";