<?php
$array = [];
$even_number = 2;

for ($i = 1; $i < 2001; $i++) {
    if ($i % $even_number != 0) { //checking to see that the integer is not divisible by 2
        echo 'Number is '. $i.'.' .' This is an odd number. <br>';
    } else { // if it is than it knows its an  even number
        echo 'Number is '. $i.'.' .' This is an even number. <br>';
    }
}
?>