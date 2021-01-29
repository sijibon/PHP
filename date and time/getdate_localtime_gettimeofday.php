<?php

//getdate
//localtime
//gettimeofday

$date = mktime(0,0,0,03,20,2012);
$old_date = getdate($date);
echo $old_date['month']." ";
echo $old_date['wday']." ";
echo $old_date['weekday']." ";
echo $old_date['year']." ";
echo "<br>";



$Date = getdate();
echo $Date['month']." ";
echo $Date['wday']." ";
echo $Date['weekday']." ";
echo $Date['year']." ";


echo "<pre>";
print_r($Date);
echo "</pre>";


echo "<pre>";
echo  print_r(gettimeofday());
echo "</pre>";


$date = gettimeofday();
echo $date['sec'];

