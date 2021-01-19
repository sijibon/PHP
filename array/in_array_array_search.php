<?php

$names = array('jibon','mahadi', 30.00, 'parvez','al-amin');

// echo in_array('sagor', $names);

if(in_array(30.00, $names, true)){
    echo "Find successfully of Habbes.";
}else{
    echo "Can't find";
} 



echo "<br>==========================<br>";

$multi_array = array(
    array('jibon','parbez'), array('38220',1000),
    'number',56,23);

   if( in_array( array('jibon','parbez'), $multi_array )){
       echo "Find successfully.";
   }else{
       echo "Can't find";
   }

echo "<br>";

  $name = array('jibon','mahadi', 30.00, 'parvez','al-amin');

  echo   array_search('parvez',$name);//it will return array index

  echo "<br>==========================<br>";


  $name = array('a'=>'apple', 'b'=>'banana', 'c'=> 30.00, 'd'=>'orange', 'e'=>'grapes');
  echo array_search('orange',$name);//it will return orange key

