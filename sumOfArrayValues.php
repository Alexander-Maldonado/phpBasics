<?php
$numbers = [1,2,5,10,255,3];
$total = 0;

foreach ($numbers as $key => $value){
    $total = $total + $value;
}
echo $total .'<br>';

// above function gives you the total from array provided

$array = [1,2,5,10,255,3];

echo array_sum($array); //array_sum is a built in function to give you the sum of an array

?>