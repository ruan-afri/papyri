<?php

//Connection Variables
$servername = "localhost";
$username = "papyri_user";
$password = "password";

try {

    $conn = new PDO("mysql:host=$servername;dbname=papyri_db", $username, $password);
    // Set the PDO error mode to 'exception'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    }

catch(PDOException $e)
    {

    echo "Connection Failed: " . $e->getMessage();

    }

?>
