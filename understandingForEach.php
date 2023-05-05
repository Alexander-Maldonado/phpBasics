<?php
// 1. What would be the output of the following code? Try to guess the output of the code before running it!

$x = array(1,3,5,7);

foreach ($x as $key => $value) { //key is the placement in the array & value is the int itself when using =>
    echo $key . " - " . $value ."<br />";
}

/*
    A. 0 - 1
    1 - 3
    2 - 5
    3 -7
*/

//2. What would be the output of the following code? Try to guess the output of the code before running it!
$x = array(1,3,5,7);

foreach ($x as $value) { //for each number in the array it will print out
    echo $value ."<br />";
}
/*
    1
    3
    5
    7
*/

//3. What would be the output of the following code? Try to guess the output of the code before running it!
$x = array("hi" => "Dojo", "awesome" => "game");// each key is paired with a value

foreach ($x as $key => $value) {
    echo $key . " - " . $value ."<br />";  //echo out each paired value
}
/*
    hi - Dojo
    awesome - game
*/

//4. What would be the output of the following code? Try to guess the output of the code before running it!
$x = array("hi" => "Dojo", "awesome" => "game");

foreach ($x as $key => $value) {
    echo $value ."<br />"; // only the value will be printed out
}
/*
    Dojo
    game
*/

//5. What would be the output of the following code? Try to guess the output of the code before running it!
$x = array("hi" => "Dojo", "awesome" => "game");
foreach ($x as $key => $value){
    echo $key ."<br />";
}
/*
    hi
    awesome
*/

//6. Okay. Now let's make it a little bit harder. What would be the output of the following code?
$x = array (array(1,3,5), array(2,4,6), array(3,6,9));
foreach ($x as $key => $value) {
    echo "Key is {$key}<br />";
    echo "var_dumping value";
    var_dump($value);
}
/*
    Key is 0
    var_dumping value [0]=>1,[1]=>3,[2]=>5
    
    key is 1
    var_dumping value [0]=>2,[1]=>4,[2]=>6

    key is 2
    var_dumping value [0]=>3,[1]=>6,[2]=>9
*/

// 7. Now what about this? Again guess the output before running the code.
$x = array (array(1,3,5), array(2,4,6), array(3,6,9));
foreach ($x as $value) {
    echo "var_dumping value";
    var_dump($value);
}
/*
    var dumping value ([0]=>1,[1]=>3,[2]=>5)([0]=>2,[1]=>4,[2]=>6)([0]=>3,[1]=>6,[2]=>9)
*/

// 8. Okay. Now let's make it even harder. What would be the output of the following code?
$x = array (array ("hi"=>"Dojo", "game"=>"awesome"), array ("dude"=>"fun", "play"=>"what?"), array ("no"=>"way", "i am"=>"confused?"));
foreach ($x as $key => $value) {
    echo "key is {$key}<br />";
    foreach ($value as $key2 => $value2) {
        echo $key2 ." - " . $value2."<br />";
    }
}
/*
    key is 0
    hi - Dojo
    game -awesome
    
    key is  1
    dude - fun
    play - what?

    key is 2
    no - way
    i am - confused
*/

// 9. Now what about this?
$x = array (array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?"));
foreach ($x as $y) {
    foreach ($y as $key => $value) {
        echo $key ." - " . $value."<br />";
    }
}
/*
    hi - dojo
    game - awesome
    dude - fun
    play - what?
    no - way
    i  am - confused
*/

?>