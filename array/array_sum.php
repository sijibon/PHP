<?php


//array_sum
$array = [50,90,70,63];

$sum_array = array_sum($array);

echo "<pre>";
print_r($sum_array);
echo "</pre>";



//array_product (multi)
$array = [5,9,7,6];

$product_array = array_product($array);

echo "<pre>";
print_r($product_array);
echo "</pre>";


//associative array

//array_sum
$array = ['a'=>50, 'b'=>90,'c'=>70,'d'=>63];

$sum_array = array_sum($array);

echo "<pre>";
print_r($sum_array);
echo "</pre>";



//array_product (multi)
$array = [5,9,7,6];

$product_array = array_product($array);

echo "array product = ". $product_array;