<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php-registersystem";

//Connect to database
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

//Throw error if connection failed
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}