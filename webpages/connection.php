<?php
$dbhost = "localhost";
$dbuser = "username"; 
$dbpass = ""; 

$dbname = "login";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
