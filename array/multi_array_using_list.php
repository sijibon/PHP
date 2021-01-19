<?php

$emp =[
    [1,'Jibon shohidul','Junior software developer',20000],
    [2,'Parvez Rahman','UX/UI Designer','18000'],
    [3,'Al-Amin','Full stack web developer','25000'],
    [4,'Mahadi Hasan','Senior Software developer','30000'],
    [5,'sagor vai ',' software developer',20000],
    [6,'Parvez Rahman','UX/UI Designer','18000'],
    [7,'Al-Amin','Full stack web developer','25000'],
    [8,'Mahadi Hasan','Senior Software developer','30000']
];

echo "<table border='2px' cellpadding='5px', cellspacing='0'>";
    echo "<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";

foreach( $emp as list( $id, $name, $designation, $salary)){
      echo " <tr>
      <td> $id </td> <td> $name </td> <td> $designation </td> <td>$salary </td>
      </tr>";
 
}

echo "</table>";


// echo "<pre>";
// var_dump($marks);
// echo "</re>";



