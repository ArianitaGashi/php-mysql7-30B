<?php

// phpinfo();

// $x = "Hello";
// $y=10.3;
// $z=5;

// print_r($x);

// echo gettype($x);
// echo gettype($y);
// echo gettype($z);

// function printV(){
//     echo "This is PHP".phpversion();
// }

// printV();

function maximum($x, $y){
    if($x>$y){
        return $x;
    }else{
        return $y;
    }
}

$test = maximum(100, 101);
echo $test;

?>