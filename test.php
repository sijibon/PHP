<?php

//factorial

$result = 1;

for($i=1; $i<=5; $i++){
    $result *=$i;
}

echo $result;



echo "<br>";

for($i=0; $i <=70; $i++){

   echo  $i % 7 == 0 ? "$i": " ";
   echo  $i % 11 == 0 ? "$i": " ";


    //    if( $i % 7 ==0 || $i % 11 == 0){
    //     echo "$i <br>";
    // }

}