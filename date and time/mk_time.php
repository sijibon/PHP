<?php

echo "Date & Time ".date("d/m/Y h:i:s a");
echo "<br><br>";

echo date("l d/m/Y h:i:s a", mktime(0,0,0,12,21,1997));

date_default_timezone_set("Asia/Dhaka");

