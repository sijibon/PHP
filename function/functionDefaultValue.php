

<?php

//function with default value...

function serve($x, $y='1cup'){
echo "{$x} {$y} have been served ";

}

$food ="Coffee";
$prm ="3 Cups";

serve($food , $prm);





echo "<br>";


//unlimited arguments accepts

function sum(int ...$numbers):int{
    $result =0;
    for($i=0;$i<count($numbers);$i++){
    $result = $result + $numbers[$i];
}

return $result;

}


echo sum(5,5,5,5);

?>