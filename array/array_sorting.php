<?php

//array_reduce 

//array_sorting

//sort
//rsort


//sort
$array = ['jibon','joy','Imam','Al-amin','Kabir','Taher','mehedi','parbez'];

sort($array);

echo "<pre>";
print_r($array);
echo "<pre>";


//rsort
$array = ['jibon','joy','Imam','Al-amin','Kabir','Taher','mehedi','parbez'];

rsort($array);
echo "<pre>";
print_r($array);
echo "<pre>";



//asort()

$array = [
    "Jibon"=>22,
    "Parbez"=>21,
    "Alamin"=>23,
];

asort($array);
echo "<pre>";
print_r($array);
echo "</pre>";


//arsort()

$array = [
    "Jibon"=>22,
    "Parbez"=>21,
    "Alamin"=>23,
];

arsort($array);
echo "<pre>";
print_r($array);
echo "</pre>";



//ksort()

$array = [
    "Jibon"=>22,
    "Parbez"=>21,
    "Alamin"=>23,
];

ksort($array);
echo "<pre>";
print_r($array);
echo "</pre>";




//krsort()

$array = [
    "Jibon"=>22,
    "Parbez"=>21,
    "Alamin"=>23,
];

krsort($array);
echo "<pre>";
print_r($array);
echo "</pre>";




//natsort()

$array = [
'3'=>'image3.png',
'12'=>'image15.png',
'4'=>'image12.png',
'6'=>'image7.png',
'8'=>'image9.png'
];

natsort($array);
echo "<pre>";
print_r($array);
echo "</pre>";

//natcasesort()

$array = [
    '3'=>'Image3.png',
    '12'=>'image15.png',
    '4'=>'Image12.png',
    '6'=>'image7.png',
    '8'=>'image9.png'
    ];
    
    natcasesort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";


    //array_reverse
    $array = ['jibon','joy','Imam','Al-amin','Kabir','Taher','mehedi','parbez'];

    $new_array = array_reverse($array);

    echo "<pre>";
    print_r($new_array);
    echo "</pre>";

    //array_multisort

