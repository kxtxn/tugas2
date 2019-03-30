<?php
$dbname = "id8198639_akademik";
$hostname = "localhost";
$username = "id8198639_katon";
$password = "12345";

$connection = mysqli_connect($hostname, $username, $password, $dbname);
if (!$connection) {
    die("Connection Failed:" . mysqli_connect_error());
}
 
