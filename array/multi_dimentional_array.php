<?php

echo "<ul>";
$emp =[
    [1,'Jibon shohidul','Junior software developer',20000],
    [2,'Parvez Rahman','UX/UI Designer','18000'],
    [3,'Al-Amin','Full stack web developer','25000'],
    [4,'Mahadi Hasan','Senior Software developer','30000']
];

//array print using for loop
// for($row = 0; $row <4; $row ++){
//     for($col = 0; $col <4 ; $col++ ){
//         echo $emp [$row][$col]." ";
//     }

//     echo "<br>";
// }

//multi dimentional array print using foreach loop
echo "<table border='2px';cellpadding='px'; cellspacing='0'>";
echo "<tr>
    <th>No </th>
    <th>Name </th>
    <th>Designations </th>
    <th>Salary </th>
    
 </tr>";
foreach($emp as $rowData){
    echo "<tr>";
    foreach($rowData as $colData){
        echo "<td>$colData</td>";
 
    }
    echo "</tr>";
}
echo "</table>";





//  echo $emp[0] [0]." ";
//  echo $emp[0] [1]." ";
//  echo $emp[0] [2]." ";
//  echo $emp[0] [3]." ";

//  echo "<br>";

//  echo $emp[1] [0]." ";
//  echo $emp[1] [1]." ";
//  echo $emp[1] [2]." ";
//  echo $emp[1] [3]." ";

//  echo "<br>";

//  echo $emp[2] [0]." ";
//  echo $emp[2] [1]." ";
//  echo $emp[2] [2]." ";
//  echo $emp[2] [3]." ";


 echo "</ul>";

// echo "<pre>";
// var_dump($emp);

// echo "</pre>";