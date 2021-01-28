<?php

//checkdate()

echo checkdate(2,29,2013);
echo "<br>";


$date1 = date_create("2010-12-10");
$date2 = date_create("2010-04-10");

$date_diff =  date_diff($date1, $date2);
if($date_diff->invert == 0){
    echo $date_diff->days;
}else{
    echo "-".$date_diff->days;
}


// echo "<pre>";
// print_r($date_diff);
// echo "</pre>";

