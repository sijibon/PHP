<?php

$password = "jibon1234";

echo $password."<br>";

echo "The Binary number ".md5($password, true);
echo "<br>";
echo "The Hexadicimal number ".md5($password);
echo "<br>";

$password = "jibon1234";
echo $password."<br>";
echo "<br>";
echo "The Binary number ".sha1($password, true);
echo "<br>";
echo "Hexadicimal number is  ".sha1($password); 