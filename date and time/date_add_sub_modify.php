<?php

$date = date_create("2020-11-20");
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date,"d-m-Y");
echo "<br>";



$date = date_create("2020-10-25");
date_sub($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "d-m-Y");
echo "<br>";

//date_modify() date add
$date = date_create("2020-10-25");
date_modify($date, "10 days");
echo date_format($date, "d-m-Y");
echo "<br>";


$date = date_create("2020-10-20");
date_modify($date, "-10 days");
echo date_format($date, "d-m-Y");
