<?php

function functionName($name){
echo  "Hello I am $name  <br>";
   
}

functionName("jibon shohidul");
functionName("kabir sing");
functionName("AL-amin");



echo "==================<br>";

//student info
function StudentInfo($name ="Unknown", $roll ="Unknown", $semester="Unknown"){

    echo "<h3> Student Information</h3>";
    echo  "Hello I am $name  <br>";
    echo  "roll $roll  <br>";
    echo  "roll $semester  <br>";

    echo "<h4>They're Students of Southeast University.</h4><br>";
       
    }

    StudentInfo("Jibon Shohidul", "382298","1st");
    StudentInfo("Parbez Rahman", "38238","3rd");
    StudentInfo("38238","3rd");
    StudentInfo("Al-Amin","38458","4th");
    StudentInfo("Imam hossain","34558","6th");


    //sum 

    function sum($a,$b){
        echo $a+$b;
        echo "<br>";

    }

    sum(3,7);
    sum(20,10);
    sum(75,15);