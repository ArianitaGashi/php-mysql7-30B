<?php 
    $host = 'localhost';
    $db = "restaurant";
    $user = 'root';
    $pass = '';

    try{

        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);

        $username = "Zani";

        $password = password_hash("mypassword", PASSWORD_DEFAULT);

        $sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

        $conn->exec($sql);

        echo "User CREATED";

    }catch(Exeption $e){

        echo "User NOT CREATED";

    }

?>