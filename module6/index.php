<?php

$my_file = fopen("ds.txt" , "w");





$nita = fopen("nita.txt" , "r");

//code for the file

fclose($nita);




$filename = "modes.txt";

$readonly = fopen($filename, "r");

$size = filesize($filename);

$filedata = fread($readonly, $size);

echo $filedata;




$read = fopen("modes.txt", "r");

while(!feof($read)){
    echo fgets($read). "<br>";
}

fclose($read);



$write = fopen("nita.txt" , "w");

$text = "Ne sot po mesojme per file manipulation";

fwrite($write, $text );


$hii = file_put_contents('test.txt',"This is the second text we are adding into a file");

echo $hii;


?>