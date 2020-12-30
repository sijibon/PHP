<?php

function sub($ban, $eng, $math){
    $sum = $ban + $eng + $math;
    return $sum;

}

//making percentage

function percentage($subTotal){
  $per = $subTotal / 3;

  return $per;
}
$result = percentage(sub(40,40,20));

echo "The result is ". $result ."%";