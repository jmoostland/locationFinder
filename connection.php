<?php

function connectionDB() {

    $hostname = 'localhost'; 
    $databasenaam = 'kunst';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    return $conn;  
}

?>