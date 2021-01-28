<?php

//all time function

echo "Hour is now ".date("h")."<br>";//h show 12th hour system
echo "Hour is now ".date("H")."<br>";//H show 24th hour system
echo "Hour is now ".date("g")."<br>";//g show prefix number
echo "Hour is now ".date("G")."<br>";//G show without prefix number of the time

echo "<br>";

echo "minutes is now ".date("i")."<br>";//i show minutes
echo "Seconds is now ".date("s")."<br>";//s show seconds

echo "Meridiem is now ".date("A")."<br>";//A show capital letters meridiem AM/PM
echo "Meridiem is now ".date("a")."<br>";//a show small letters meridiem am/pm


echo "Time now  ".date("h:i:s A")."<br>";//full time shows



echo "Time and Date Today's  ".date("d/m/Y h:i:s A")."<br>";//full time shows

echo "Time and Date Today's  ".date("l, F, d, Y h:i:s A")."<br>";//full time shows

// date_default_timezone_set();//it show local time and date for any others country's








