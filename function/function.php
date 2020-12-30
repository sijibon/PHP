<?php

function isEven($number){

    if($number % 2==0){
        return "Even number";
    }
    return "Odd nunmber";
}

$x =20;

if( isEven($x)){
    echo "Number is Even";
}else{
    echo "number is Odd";
}




