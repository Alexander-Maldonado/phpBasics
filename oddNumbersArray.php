<?php
$array = [];
$even_number = 2;

for ($i = 0; $i < 20001; $i++) {
    if ($i % $even_number != 0) { //checking to see that the integer is not divisible by 2
        array_push($array, $i);
    }
} var_dump($array);
?>