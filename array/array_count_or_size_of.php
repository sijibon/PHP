<?php

$country = [
 'Bangladesh','India','Sri Lanka ', 'Pakistan','New Zeland','Australia'
];


// $multi_country = [
//     'Asia'=> ['Bangladesh', 'India', 'Sri lanka','Sri lanka'],
//     'Africa'=> ['South Africa','Uganda', 'Zembabwe'],
//     'Australia'=> ['Australia ','New Zeland', 'New country']
// ];

// echo count( $multi_country['Asia']);
$count_array = sizeof($country);
// echo sizeof( $multi_country,1);//total array

for($i=0; $i<$count_array;$i++){
    echo $country[$i]."<br>";
}

// $count_array = count($country);
// $count_array = sizeof($country);
// echo $count_array;