<?php

$food = ['Apple','Banana','Grapes'];

$colors = ['red','green','blue','white'];

$newArray = array_replace($food, $colors);


echo "<pre>";
print_r ($newArray);
echo "</pre>";



//associative array

$food = ['a'=>'Apple', 1=>'Banana','Grapes'];

$colors = [ 1=> 'red', 'a'=>'green', 'blue','white'];

$newArray = array_replace($food, $colors);


echo "<pre>";
print_r ($newArray);
echo "</pre>";


//multi associative array replace using array_replace_recursive funciton 

$food = [
    ['a'=>'Apple'],
    [ 'b'=>'Banana', 'c'=>'Grapes'],

];

$colors = [
    [ 'a'=> 'red'],
    [ 'b'=> 'green'],
];

$newArray = array_replace_recursive($food, $colors);


echo "<pre>";
print_r ($newArray);
echo "</pre>";



// //bangla to english
// function bn2enNumber ($number){
//     $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
//     $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
//     $en_number = str_replace($search_array, $replace_array, $number);

//     return $en_number;
// }


//small letter to capital letters
function str_cap($letters){
    $search_letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $replace_letter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    $new_capital_letters = str_replace($search_letter, $replace_letter, $letters);

    return $new_capital_letters;
}

$a = "jibon shohidul";

echo  str_cap($a)."<br>";


//capital letters to small letters
function str_sm($letters){
    $search_letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $replace_letter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    $new_small_letters = str_replace($replace_letter, $search_letter,  $letters);

    return $new_small_letters;
}

$name = "JIBON SHOHIDUL";

 echo str_sm($name);
