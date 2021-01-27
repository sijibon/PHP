<?php
//bin2hex
//hex2bin

$hexStr =  bin2hex("Hello world");

echo $hexStr."<br>";

echo hex2bin($hexStr);
echo "<br>";
echo hexdec($hexStr);
