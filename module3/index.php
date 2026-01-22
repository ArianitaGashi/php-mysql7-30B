<?php

// $nr = -1;

// if($nr == 0){
//     echo "The number is 0 <hr>";
// }else if($nr>0){
//     echo "The number is greater than 0 <hr>";
// }else{
//     echo "The number is smaller than 0 <hr>";
// }

// //Switch

// $day = "Tuesday";

// switch($day){
//     case 'Monday':
//         echo "It is monday, start of the week <hr>";
//         break;
//     case 'Tuesday':
//         echo "It is tuesday, keep pushing through <hr>";
//         break;
//     case 'Wednesday';
//         echo "It is wednesday, middle of the week <hr>";
//         break;
//     case "Thursday";
//         echo "It is thursday, almost there <hr>";
//         break;
//     case "Friday";
//         echo "it is friday, enjoy the weekend <hr>";
//         break;
//     case "Saturday";
//         echo "its saturday, free day <hr>";
//         break;
//     case "Sunday";
//         echo "its sunday, prepare for monday <hr>";
//         break;
//     default:
//         echo "Check again, you wrote something wrong <hr>";
//         break;
// }

//While loop

// $numri = 0;

// while($numri <=5){
//     echo "The number is: $numri <hr>";
//     $numri++;
// }

// // do while loop

// $numri1 = 0;
// do{
//     echo "The number is: $numri1 <hr>";
//     $numri1++;
// }while($numri1 <=5);

// //for loop
// for($x=0; $x<=10; $x++){
//     echo "The number is: $x <hr>";
// }

//foreach

$cars = array("Audi", "BMW", "Tesla", "VW");

foreach($cars as $car){
    echo "$car <hr>";
}

$age = array("Lum"=>"13", "Jora"=>"14", "Sufjan"=>"15");

foreach($age as $x => $value){
    echo "$x = $value <hr>";
}
?>