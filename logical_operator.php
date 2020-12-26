<?php
$age  = 18;

if($age == 18){
    echo " this value is true";
    
}else{
    echo "this is value is false";
}

echo "==================<br>";


$age = 16;

if($age >= 14 && $age <=18){
    echo "The person is Teenager";

}else{
    echo "The person is not Teenager";
}


echo "==================<br>";

$number = 20;
$number2 = 30;

if($number <= $number2){
    echo "true";

}else{
    echo "false";
}


echo "==================<br>";




$d = date("D");

if($d == "Fri"){
    echo "Have a nice weekend!";

} elseif($d == "Sat"){
    echo "Have a nice Saturday!";

}elseif($d == "Mon"){
        echo "This is our not holiday..!";

}elseif($d == "Tue"){
    echo "It's called Mongolbar in Bangali Language ";

}elseif($d == "Wed"){
    echo "I don't enjoy in this day..!";

} else{
    echo "Have a nice day!";
}


echo "==================<br>";


$a = 1;
if ($a--)
    print "True".$a;
if ($a++)
    print "False".$a;


$a = 1;
    if (print $a)
        print "True";
    else
        print "False"; 


echo "==================<br>";

//programme or leaf year 

$year = 2018;

if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "this is leap year";

}elseif($year % 4 ==0 && $year % 100 ==0){
    echo "this is not leap year";

}elseif($year % 4 ==0){
    echo "this is  leap year";

}else{
    echo "it is not leap year";
}