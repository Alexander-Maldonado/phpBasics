<?php
$numbers = [1,2,5,10,255,3];
$total = 0;
$size = 6;

foreach ($numbers as $key => $value){
    $total = $total + $value;
}
echo $total / $size .'<br>';  // total is 276 then divide by size to get an average of 46
?>