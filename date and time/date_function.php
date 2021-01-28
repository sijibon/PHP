<?php


echo "Today is ".date("dS M")."<br>";//it show just day
echo "Today is ".date("j")."<br>";//it show just day but don't show prefix number
echo "Today is ".date("jS")."<br>";// S shows latter with number


echo "This Month is ".date("F")."<br>";// F shows month name in latters
echo "This Month is ".date("m")."<br>";// m shows month name in number with prefix
echo "This Month is ".date("n")."<br>";// n shows month name in number without prefix
echo "This Month is ".date("M")."<br>";// M shows month name in the short form in letter


echo "This Year is ".date("Y")."<br>";// Y shows year in the full number
echo "This Year is ".date("y")."<br>";// y shows year name in the short number
echo "Full date  ".date("d/m/Y")."<br>";// shows full date
echo "Full date  ".date("dS M Y")."<br>";// shows full date


echo "day of week  ".date("l")."<br>";// shows full week name 
echo "day of week  ".date("N")."<br>";// shows in number week name 

echo "<h4>Full Tate Today</h4> ".date("l, F d, Y")."<br>";// shows full date

echo "passing days in the month  ".date("z")."<br>";// shows full years days
echo "passing week in the year  ".date("W")."<br>";// shows full date
echo "days of the month  ".date("t")."<br>";// 
echo "this is leap year?  ".date("L")."<br>";// 


