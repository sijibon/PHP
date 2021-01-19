<?php

//index array
$names =[
    'jibon','Anik','Riad','Bristi'
];


foreach($names as $name ){

    echo $name."<br>";
}

echo "===================="."<br>";
//associative array

$age =[
  'jibon'=>  '32',
   'riad'=> '21',
   'bristi'=> '45',
   'parbez'=> '46',

];
echo "<ul>";

foreach($age as $key => $all_ages){
echo  "<li> $key = $all_ages </li>";
}

echo "<ul>";