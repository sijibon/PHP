<?php

echo "Date & Time ".date("d/m/Y h:i:s a");
echo "<br><br>";

echo date("d/m/Y h:i:s a", mktime(0,0,0,12,12,2019));