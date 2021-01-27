<?php
//convert_uuencode
//convert_uudecode

$password = "jibon1234";
echo $password."<br>";

$strEnc = convert_uuencode($password);
echo $strEnc;
echo "<br>";
echo convert_uudecode($strEnc);
echo "<br>";


$password = "jibon1234";
echo $password."<br>";
