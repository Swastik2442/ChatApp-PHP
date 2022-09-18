<!-- Script for Connecting to the Database -->

<?php

// Setting Database Variables 
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatapp";

// Connecting to mySQL Database
$conn = mysqli_connect($servername, $username, $password, $database);

// Error Catching
if (!$conn)
{
    die("Failed to Connect". mysqli_connect_error());
}

?>