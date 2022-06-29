<?php 

// params to connect ot the databse
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "users";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>