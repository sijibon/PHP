<?php

for($i = 0; $i <= 10; $i++){
    echo "The number is ".$i;
    echo "<br>";
}


echo "<br>";

for($i = 10; $i >= 0; $i--){
 if($i %2 == 0 ){

     echo "Even number".$i;
     echo "<br>";
 }else{
    echo "Odd number".$i;
 }
}

for( $i = 1; $i <10; $i++){
     echo $i;
     echo "<br>";
    for($j = 0; $j < $i; $j++){
        echo "*";

    }
   
}

//while loop

$i = 0;

while($i<10){
    echo $i++;

    echo "<br>";
}