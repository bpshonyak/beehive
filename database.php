<?php
    $username = "";
    $password = "";
    $hostname = "";
    $database = "";
 
    // PDO
    try{
        $dbh = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
        echo $e->getMessage();    
    }
?>