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

// function maximum($x, $y){
//     if($x>$y){
//         return $x;
//     }else{
//         return $y;
//     }
// }

// $test = maximum(100, 101);
// echo $test;


// function fully_divisible($n){
//     if(($n % 2)==0){
//         return "$n is fully divisible by 2";
//     }else{
//         return "$n is not fully divisible by 2";
//     }
// }

// print_r(fully_divisible(4)."<hr>");
// print_r(fully_divisible(6)."<hr>");
// print_r(fully_divisible(7)."<hr>");
// print_r(fully_divisible(19)."<hr>");
// print_r(fully_divisible(13)."<hr>");

// $x = 4; //global variable

// function print_variables(){
//     $y = 10; //local variable
//     echo $y."<hr>";
// }

// print_variables();
// echo $x;


$sports = array("Football", "Basketball", "Handball", "Voleyball");

$fav_colors = ["red", "blue", "green", "pink", "purple"];

$numbers = [1,2,3,4,5,6,7,8];

// echo $sports[0]."<br>";

// echo $fav_colors[3]."<br>";

// echo $numbers[7]."<br>";

// for($i=0;$i<4; $i++){
//     echo $sports[$i], "<br>";
// }

//array_pop - deletes the last element
array_pop($fav_colors);

var_dump($fav_colors)."<br>";

//array_unshift - adds an element at the beginning of the array

array_unshift($fav_colors, 'orange');

var_dump($fav_colors)."<br>";

//arra_shift - deletes an element at the beginning of the array

array_shift($fav_colors);

for($i=0;$i<4; $i++){
     echo $fav_colors[$i], "<br>";
}

//array sum
var_dump(array_sum($numbers));


$myString=[3,4,5,3,4,5];

$mesatarja = array_sum($myString)/6;

echo $mesatarja;

?>