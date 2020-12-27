<?php

$very_old = 0;
$old = 1;
$new = 1;



for($i = 0 ; $i <5 ; $i++){
    echo $very_old. " ";
    $old = $new;
    $new = $old + $very_old;
    $very_old = $new;


}





// 0 1 1 2 3 5 8 13 