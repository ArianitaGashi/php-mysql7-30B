<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';

    try{

        $conn = new PDO("mysql:host=$host" , $user, $pass);

        $sql = "CREATE DATABASE testnita";

        $conn->exec($sql);

        echo "Connected";

        echo "database created";

    }catch(Exeption $e){

        echo "Not connected";

        echo "database not created";

    }

?>