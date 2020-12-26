<?php

/*
Integer 
Float / Double 
String 
Boolean
Null
Object 
Array
Resource


*/

//string
$name = "jibon shohidul";

//mnumber
$number =  123;

//float
$float = 124.234;

//double
$double = 20000000000;

//null

$null=  null;

//string null

$string_null =  '';

//Boolean

$boolean =  false;

var_dump($boolean);

echo "<br>";

$name =  "Earth";
echo "We're live in the {$name}";

//use of %s for placeholder of varriable

echo "<br>";

$fname =  "jibon";
$lname = "shohidul";
$age =  22;
$roll =  382298;

printf("The student first name : %s <br> last name : %s <br> roll : %s <br> age : %s <br>",strtoupper( $fname), strtoupper ($lname), $roll, $age);
echo "<br>";
$name = "jibon";
$number =  789065;

printf("this is just a %s", $name);
echo "<br>";
printf("this is just a %b", $number);

echo "<br>";
printf("this is just a %c", $number);

echo "<br>";
printf("this is just a %e", $number);